<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //use HasFactory;

    protected $primarykey='id';
    protected $fillable = [
        'id_user',
        //'id_job',
        'destinatario',
        'asunto',
        'mensaje',
    ];
}
