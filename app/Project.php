<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // プロジェクトはユーザのもの
    public function user(){
        return $this->belongsTo(User::class);//select * from user where project_id= 現在のプロジェクトインスタンスのID
    }
    //hasOne
    //hasMany
    //belongsTo
    //belongsToMany
    //morphMany
    //morphToMany
}
