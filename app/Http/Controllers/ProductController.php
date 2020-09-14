<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index' , compact('products'));
    }

    public function create()
    {
      $categories = Category::all();
      return view('dashboard.products.create' , compact('categories'));        
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $data = request()->validate([
            'name' =>'required|unique:products',
            'details' => 'required|min:10',
            'image' =>'required|image',
            'price' =>'required|numeric',
            'category_id' => 'required',
        ]);


        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/products',$image_new_name);

        $product = new Product;
        $product -> name = request('name');
        $product -> details = request('details');
        $product -> price = request('price');
        $product -> category_id = request('category_id');
        $product -> image = $image_new_name;
        $product -> save();

        if($request->hasFile('images'))
        {
            foreach($request->images as $oneImage)  {
                $image = $oneImage;
                $image_new_name = time().$image->getClientOriginalName();
                $image->move('uploads/products',$image_new_name);
                $product_image = new ProductImage;
                $product_image->name = $image_new_name;
                $product_image->product_id = $product->id;
                $product_image->save();
            }
        }

        return redirect('/dashboard/products/') -> with('message' , 'Thank You . You ara Adding a New Product successfully' );
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.show' , compact('product' ) );

    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('dashboard.products.edit' , compact('categories' , 'product' ) );
    }

    public function update(Request $request, Product $product)
    {
        $id = $product->id;
        $data = request()->validate([
            'name' =>'required|unique:products,name,'.$id,
            'details' => 'required|min:10',
            'price' =>'required|numeric',
            'category_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/products',$image_new_name);
            $product -> image = $image_new_name;
            $product->save();
        }

        
        if($request->hasFile('images'))
        {
            foreach($request->images as $oneImage)  {
                $image = $oneImage;
                $image_new_name = time().$image->getClientOriginalName();
                $image->move('uploads/products',$image_new_name);
                $product_image = new ProductImage;
                $product_image->name = $image_new_name;
                $product_image->product_id = $product->id;
                $product_image->save();
            }
        }


        $product-> update($data);
        return redirect('dashboard/products/'.$product->id )-> with('message' , 'Thank You . You ara Updated a Product successfully' );
    }

    public function destroy(Product $product)
    {

      $image = '/uploads/products/'.$product->image;
      $path = str_replace('\\' , '/' , public_path());
        // dd($path.$image);
        if(file_exists($path.$image))
        {
            unlink($path.$image);
            $product->delete();
            return redirect('/dashboard/products')
            -> with('message' , 'Thank You . You ara Deleting a Customer successfully' );
        }
        else
        {
            $product->delete();
            return redirect('/dashboard/products')
            -> with('message' , 'Thank You . You ara Deleting a Customer successfully' );
        }


    }

    public function delete_image (ProductImage $imageProduct)
    {
        $image = '/uploads/products/'.$imageProduct->name;
        $path = str_replace('\\' , '/' , public_path());
          // dd($path.$image);
        if(file_exists($path.$image))
        {
            unlink($path.$image);
            $imageProduct->delete();
            return redirect('/dashboard/products')
            -> with('message' , 'Thank You . You ara Deleting a Customer successfully' );
        }
        else
        {
            $imageProduct->delete();
            return redirect('/dashboard/products')
            -> with('message' , 'Thank You . You ara Deleting a Customer successfully' );
        }

    }



}
