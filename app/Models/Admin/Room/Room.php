<?php

namespace App\Models\Admin\Room;

use App\Models\Admin\Room\RoomNumber\RoomNumber;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Room extends Model
{
    use HasFactory;

    public function roomNumber()
    {
        return $this->belongsTo(RoomNumber::class, 'roomnumber_id');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'roomtype_id');
    }
}
