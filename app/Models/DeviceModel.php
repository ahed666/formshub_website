<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceModel extends Model
{
    use HasFactory;
    protected $table="devices_models";

    // type of devices table relationship
    public function devices()
    {
        return $this->hasMany(TypeDevice::class, 'model_id');
    }
}
