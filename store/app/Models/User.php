<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'lastname', 'email', 'username', 'password', 'role',
    ];

    // use name and lastname to create usernames
    public function createUsername(): string
    {
        return strtolower($this->name . '' . $this->lastname);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->username = $user->createUsername();
        });
    }

    public function show($id)
{
    try {
        $user = User::findOrFail($id);
        return $user;
    } catch (ModelNotFoundException $e) {
        return response()->json(['error' => 'User not found.'], 404);
    }
}
}
