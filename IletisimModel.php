<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimModel extends Model
{
    use HasFactory;
    protected $table="iletisim";
    protected $fillable=["adsoyad","mail","telefon","metin","created_at","update_at"];
}
