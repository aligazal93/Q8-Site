<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{

  public function index()
  {
    $brands = Brand::all();
    return view('dashboard.brands.index' , compact('brands'));
  }

  public function create()
  {
    return view('dashboard.brands.create');
  }


  public function store(Request $request)
  {
    $brands = Brand::all();
    $data = request()->validate([
        'name' => 'required|unique:brands',
        'image' =>'required|image',
    ]);

    $image = $request->image;
    $image_new_name = time().$image->getClientOriginalName();
    $image->move('uploads/brands',$image_new_name);


    $brand = new Brand();
    $brand -> name = request('name');
    $brand -> image = $image_new_name;
    $brand->save();
    return redirect('/dashboard/brands');
  }

  public function edit(Brand $brand)
  {
    $brands = Brand::all();
    return view('dashboard.brands.edit' , compact('brand') );
  }

  public function update(Request $request, Brand $brand)
  {
      $data = request()->validate([
          'name' => 'required|unique:brands,name,'.$brand->id,
      ]);

      if ($request->hasFile('image')) {
          $image = $request->image;
          $image_new_name = time().$image->getClientOriginalName();
          $image->move('uploads/brands',$image_new_name);
          $brand -> image = $image_new_name;
          $brand->save();
      }


      $brand->update($data);
      return redirect('/dashboard/brands')-> with('message' , 'Thank You . You ara Updated a Brand successfully' ); ;

  }

  public function destroy(Brand $brand)
  {

      $image = '/uploads/brands/'.$brand->image;
      $path = str_replace('\\' , '/' , public_path());
        // dd($path.$image);
        if(file_exists($path.$image))
        {
            unlink($path.$image);
            $brand->delete();
            return redirect('/dashboard/brands')
                -> with('message' , 'Thank You . You ara Deleting a Brand successfully' );
        }
        else
        {
          $brand->delete();
          return redirect('/dashboard/brands')
              -> with('message' , 'Thank You . You ara Deleting a Brand successfully' );
        }

  }






}
