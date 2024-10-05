<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show(String $id)
    {
        return User::findOrFail($id);
    }
    public function index()
    {
        $users = User::where("users.id","!=","1")
            ->select('users.*',)
            ->get(); 
        return response()->json($users);
        //   return User::get();
    }

    public function create()
    {
       
    }

    public function store()
    {
        
    }

    public function edit()
    {
       

    }

    public function update()
    {
        
    }
//   username: Phải được cung cấp và phải
//  là duy nhất trong bảng users,
//   ngoại trừ người dùng với $id hiện tại (unique:users,username,'.$id).
    public function destroy()
    {
     
    }

}