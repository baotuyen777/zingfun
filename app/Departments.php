<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable = [
        'id', 'name', 'manage_id','code'
    ];
    public static function get_all_departments(){
        $arr_department = DB::table('departments')->select('code', 'name')->get();
        return $arr_department;
    }
}
