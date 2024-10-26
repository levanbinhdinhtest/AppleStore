<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function show(String $id)
    {
        return User::findOrFail($id);
    }
    public function index()
    {
        $users = User::where("users.id", "!=", "1")
            ->select('users.*', )
            ->get();
        return response()->json($users);
        //   return User::get();
    }

//   username: Phải được cung cấp và phải
//  là duy nhất trong bảng users,
//   ngoại trừ người dùng với $id hiện tại (unique:users,username,'.$id).
    public function destroy()
    {

    }
    public function login(Request $request)
    {
        //validate gmail and pass dau vao
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        // Lấy thông tin từ request
        $credentials = $request->only('username', 'password');
            // Kiểm tra thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            // Lấy thông tin người dùng sau khi đăng nhập thành công
            $user = Auth::user();
             // Kiểm tra vai trò người dùng (ví dụ, admin hoặc user)
            if($user->role_id ==1){
                return response()->json([
                    'username' => $request->input('username'), // Lấy username
                    'password' => $request->input('password'), // Lấy password
                ], 200);
            }else{
                return response()->json([
                    'message' => "customer",
                ]);
            }

        } else {
            return response()->json([
                'message' => "sai roi",
            ]);
        }
    }

}