<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Number;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public $guarded = [];
    protected function FName():Attribute
    {
        return Attribute::make(
            get:fn(string $value) => strtoupper($value)
        );
    }
    protected function UserName():Attribute
    {
        return Attribute::make(
            get:fn(string $value) => strtolower($value)
        );
    }
    protected function Salary():Attribute
    {
        return Attribute::make(
            get:fn(string $value) => Number::currency($value,in:'BDT',locale:'de')
        );
    }
    protected function Dob():Attribute
    {
        return Attribute::make(
            get:fn(string $value) => date('d-M-Y',strtotime($value))
        );
    }
    protected function Email():Attribute
    {
        return Attribute::make(
            set:fn(string $value) => strtoupper($value)
        );
    }
   //protected $stopOnFirstFailure = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
