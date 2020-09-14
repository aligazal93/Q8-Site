<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;

class AboutUsController extends Controller
{

    public function edit()
    {
      $about = AboutUs::find(3);
      return view('dashboard.about.edit' , compact('about') );
    }
    public function update(Request $request)
    {
        $about = AboutUs::find(3);
        $data = request()->validate([
          'content' => 'required',
          'image'=>'nullable|image',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/about/',$image_new_name);
            $about -> image = $image_new_name;
            $about->save();
        }

        $updatedData = request()->except('image');
        $about-> update($updatedData);
        return redirect('/dashboard/about/edit')-> with('message' , 'Thank You . You ara Updated a About Section successfully' ); ;

    }



    public function destroy($id)
    {
        //
    }
}
