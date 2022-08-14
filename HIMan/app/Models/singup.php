<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singup extends Model
{
    use HasFactory;

    public $table="Singup_table";

    public $primarykey = "id";

    public $incrementing = true;

    protected $keyType = "int";

    public $timestamps = true ;

    
    public const PRIMARY_KEY = "id";

}
