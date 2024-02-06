<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDevice extends Model
{
    use HasFactory;
    protected $table="type_of_devices";
    public function deviceModel()
    {
        return $this->belongsTo(DeviceModel::class, 'model_id');
    }
}
