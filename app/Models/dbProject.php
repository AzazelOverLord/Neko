<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\User;

class dbProject extends Model
{
    use HasFactory;

    protected $table = 'web_task';
    protected $guarded = 'false';

    public function PMProject()
    {
        return $this->belongsTo(user::class, 'id_project_manager','id');
    }

    public function UserProject()
    {
        return $this->belongsTo(user::class, 'id_user','id');
    }
}
