<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index' , compact('users'));
    }
    public function create()
    {
        return view('dashboard.users.create');

    }
    public function store(Request $request)
    {
        $users = User::all();
        $data = request()->validate([
            'name' => 'required|unique:users',
            'email' => 'email:rfc,dns',
            'phone' => ['required', 'string','max:20' , 'min:10'],
            'password' => ['required', 'string', 'min:8'],
            'image' => 'required|image',
            'role' => 'required',
        ]);

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/users',$image_new_name);



        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->role = request('role');
        $user->image = $image_new_name;
        $user->password = Hash::make( request('password'));
        $user->save();
        return redirect('/dashboard/users/');
    }
    public function edit(User $user)
    {
        $users = User::all();
        return view('dashboard.users.edit', compact('user' ));
    }
    public function update(Request $request,User $user)
    {
        // dd($request->all());
        $data = request()->validate([
            'name' => 'required|unique:users,name,'.$user->id,
            'email' => 'email:rfc,dns',
            'phone' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/users',$image_new_name);
            $user -> image = $image_new_name;
            $user->save();
        }

        $user-> update($data);
        return redirect('dashboard/users/')-> with('message' , 'Thank You . You ara Updated a user successfully' ); ;

    }
    public function destroy(User $user)
    {

        $image = '/uploads/users/'.$user->image;
        $path = str_replace('\\' , '/' , public_path());
          // dd($path.$image);
          if(file_exists($path.$image))
          {
              unlink($path.$image);
              $user->delete();
              return redirect('/dashboard/users/')
                  -> with('message' , 'Thank You . You ara Deleting a User successfully' );
          }
          else
          {
            $user->delete();
            return redirect('/dashboard/users/')
                -> with('message' , 'Thank You . You ara Deleting a User successfully' );

          }


    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
