<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserBooking;
use App\Models\User;
use Illuminate\Support\Carbon;

class BookingData extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function userbooking(){
        return $this->belongsTo(UserBooking::class,'id_pendaki'); 
    }

    public function getCreatedAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('1, d F Y');
    }
}
