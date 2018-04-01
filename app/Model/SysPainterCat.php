<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class SysPainterCat extends Model{
    protected $table = 'sys_painter_cat';

    function relVal(){
        return $this->hasMany('App\Model\SysPainterVal', 'type_id');
    }
}
