<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Permissions\HasPermissionsTrait;
Use App\Models\PackageUser;
Use App\Models\EventTransaction;

class User extends Authenticatable
{
    use Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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


    public function referrals()
    {
       return $this->hasMany(Referral::class, 'referral_id');
    }
    
    public function connection()
    {
       return $this->hasOne(Referral::class, 'user_id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function walletFund()
    {
        return $this->hasMany(WalletFund::class);
    }

    public function packageTransactions()
    {
        return $this->hasMany(PackageTransaction::class);
    }

    public function adverts(){
        return $this->hasMany(Advert::class);
    }

    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }

    // public function smsTextTransactions()
    // {
    //     return $this->hasMany(SmsTextTransaction::class);
    // }

    public function walletTransactions()
    {
        return $this->hasMany(WalletTransaction::class);
    }

    // public function smsTransaction()
    // {
    //     return $this->hasMany(SmsTextTransaction::class);
    // }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function eventTransaction()
    {
        return $this->hasMany(EventTransaction::class);
    }


}
