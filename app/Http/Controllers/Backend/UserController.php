<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.user.index', [
            'users' => User::get()
        ]);
    }

    public function store(UserRequest $request)
    {
        $data   = $request->validated();

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return back()->with('success', 'User has been created');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('success', 'User has been deleted');
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $data   = $request->validated();

        
        if ($data['password'] != '') { //jika request password tidak sama dengan kosong, maka update password
            $data['password'] = bcrypt($data['password']);
            User::find($id)->update($data);
        } else { //jika tidak mengganti password
            User::find($id)->update([
                'name'  => $request->name,
                'email' => $request->email
            ]);
        }

        return back()->with('success', 'User has been updated');
    }
}
