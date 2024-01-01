<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termek extends Model
{
    use HasFactory;
    protected $table = "termekek";
    protected $fillable = ['darabszam'];

    public function rendeles()
    {
        return $this->hasOne(Rendeles::class);
    }
}
