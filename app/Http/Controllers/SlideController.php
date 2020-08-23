<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{

    public function index()
    {
        $slides = Slide::all();
        return view('dashboard.slides.index' , compact('slides'));
    }
    public function create()
    {
      return view('dashboard.slides.create');
    }

    public function store(Request $request)
    {
        $slides = Slide::all();
        // dd($request->all());
        $data = request()->validate([
            'image' =>'required|image',
            'content' => 'required',
            // 'user_id'=>'required',
        ]);

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/slides',$image_new_name);

        $slide = new Slide();
        $slide -> content = request('content');
        $slide -> image = $image_new_name;
        $slide -> save();
        return redirect('slides') -> with('message' , 'Thank You . You ara Adding a New Slide successfully' );
    }

    public function show($slide)
    {
        $slide = Slide::find($slide);
        // dd($product);
        return view('dashboard.slides.show' ,compact('slide'));
    }

    public function edit(Slide $slide)
    {
      $slides = Slide::all();
      return view('dashboard.slides.edit' , compact('slide') );
    }


    public function update(Request $request, Slide $slide)
    {
        $data = request()->validate([
          'content' => 'required',
          'image'=>'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/slides',$image_new_name);
            $slide -> image = $image_new_name;
            $slide->save();
        }

        $updatedData = request()->except('image');
        $slide-> update($updatedData);
        return redirect('slides')-> with('message' , 'Thank You . You ara Updated a Slide successfully' ); ;

    }

    public function destroy(Slide $slide)
    {
      $image = '/uploads/slides/'.$slide->image;
      $path = str_replace('\\' , '/' , public_path());
        // dd($path.$image);
        if(file_exists($path.$image))
        {
            unlink($path.$image);
            $slide->delete();
            return redirect('slides')
            -> with('message' , 'Thank You . You ara Deleting a Slide successfully' );
        }
        else
        {
            $slide->delete();
            return redirect('slides')
            -> with('message' , 'Thank You . You ara Deleting a Slide successfully' );
        }


    }


}
