<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;
    protected $table = "checkin";
    protected $fillable = ['nama_depan','nama_belakang','tanggal_lahir','domisili','no_hp','email','sosial_media','jenis_trip','signature'];
}
