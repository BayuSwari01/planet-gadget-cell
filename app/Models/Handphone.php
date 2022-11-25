<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    use HasFactory;

    protected $table = 'handphones';
    protected $primaryKey = 'id';

    //pake ini kalo misalkan idnya itu ga increment
    // public $incrementing = true;

    //pake ini kalo misalkan idnya string bukan int
    // protected $keyType = 'string';

    //pake ini kalo misalkan databasenya ga ada kolom createdAt dan updateAt
    // public $timestamps = false;
}
