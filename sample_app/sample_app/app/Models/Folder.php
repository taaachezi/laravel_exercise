<?php

namespace App\Models;
// HasFactory -> テストデータの際に使用
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
     use HasFactory;
     public function tasks()
     {
     	// 外部キーと主キーの命名が同じ場合、引数を省略できる
     	return $this->hasMany("App\Models\Task");
     }
}
