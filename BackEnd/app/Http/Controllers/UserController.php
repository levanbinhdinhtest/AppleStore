<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
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
            if($user->role_id ==2){
                return response()->json([
                    'username' => $request->input('username'), // Lấy username
                    'password' => $request->input('password'), // Lấy password
                ], 200);
                
            }else{
                return response()->json([
                    'message' => "admin",
                ]);
            }

        } else {
            return response()->json([
                'message' => "sai roi",
            ]);
        }
    }
    public function getUserLogin(String $username)
{
            // Tìm người dùng theo username
            $user = User::where('username', $username)->first();

            // Nếu không tìm thấy người dùng, trả về lỗi
            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }
    
            // Trả về thông tin người dùng
            return response()->json($user, 200);
}

public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/customers/login');
    }


}