<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joblisting extends Model
{
    use HasFactory;
    protected $table= "joblisting";
    protected $fillable = [
        'jobtitle',
        'experience',
        'closing date',
        'skill sets'
    ];
    public function recuiters(){
        return $this->belongsTo(
            recuiters::class
        );
    }
}
