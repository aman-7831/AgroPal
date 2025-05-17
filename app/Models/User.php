<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
// implements MustVerifyEmail
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin','number','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected static function boot(){
        parent::boot();
        static::created(function ($user){

            $a= $user->buyerprofile()->create([
                'firstname'=>$user->name,
                
                ]);
                $b=$user->sellerprofile()->create([
                'companyname'=>$user->name,
            ]);
            }
    
    
    );
    }
    public function cart(){
        return $this->hasOne(Cart::class);
    } 
    public function product(){
        return $this->hasMany(Product::class);
    }


    public function sellerprofile(){
        return $this->hasOne(Sellerprofile::class);
    } 
    public function buyerprofile(){
        return $this->hasOne(Buyerprofile::class);
    } 
    public function buy(){
        return $this->hasOne(Product::class);
    }
}
