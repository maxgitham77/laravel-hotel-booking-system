<?php

namespace App\Models\Admin\Room;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

class RoomType extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->hasMany(Room::class, 'roomtype_id', 'id');
    }
}
