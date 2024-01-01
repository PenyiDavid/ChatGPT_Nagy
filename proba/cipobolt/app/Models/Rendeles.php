<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendeles extends Model
{
    use HasFactory;
    protected $table = "rendelesek";

    protected $fillable = ['user_id', 'termek_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function termek()
    {
        return $this->belongsTo(Termek::class, 'termek_id');
    }
}
