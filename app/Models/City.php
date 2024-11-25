<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city'; // 指定表名稱
    protected $primaryKey = 'city_id'; // 指定主鍵名稱
    public $timestamps = false; // 如果沒有 created_at 和 updated_at 欄位

    public function towns()
    {
        return $this->hasMany(Town::class, 'city_id', 'city_id');
    }
}