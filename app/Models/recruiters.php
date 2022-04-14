<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruiters extends Model
{
    use HasFactory;
    protected $table= "recruiters";
    protected $fillable = [
        'email',
        'password',
        'companyname'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function joblisting(){
        return $this->hasmany(
            'App\Models\joblisting', 'hremail', 'email'
        );
    }
}
