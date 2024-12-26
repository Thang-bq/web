<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Các thuộc tính có thể gán hàng loạt.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',    // Thêm 'bio' vào danh sách fillable
        'avatar', // Thêm 'avatar' vào danh sách fillable
    ];

    /**
     * Các thuộc tính ẩn không được hiển thị trong JSON.
     *
     * @var array<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Các thuộc tính cần được chuyển đổi kiểu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
