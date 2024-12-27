<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Hiển thị danh sách người dùng với phân trang.
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Hiển thị form tạo người dùng mới.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Lưu người dùng mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        // Validate yêu cầu
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'role' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
            'status' => 'required|boolean',
        ]);

        // Tạo người dùng
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'login_time' => now(),
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Hiển thị form chỉnh sửa người dùng.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Cập nhật thông tin người dùng trong cơ sở dữ liệu.
     */
    public function update(Request $request, User $user)
    {
        // Validate yêu cầu
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|string',
            'password' => 'nullable|string|min:6|confirmed',
            'status' => 'required|boolean',
        ]);

        // Cập nhật dữ liệu người dùng
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->login_time = now();

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Xóa người dùng khỏi cơ sở dữ liệu.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
