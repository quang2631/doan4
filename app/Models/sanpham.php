<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    public function loaisp(){
        return $this->belongsTo(loaisp::class,'id_loai_sp');
    }
    public function ncc(){
        return $this->belongsTo(ncc::class,'id_ncc');
    }
}
