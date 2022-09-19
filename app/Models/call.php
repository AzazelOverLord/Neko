<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class call extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 't_call';
    protected $guarded = 'false';

    public function upCreate ()
    {
        call::UpdateOrCreate([
        'id_caller'=>'',
        'name_company'=>'',
        'contact_user'=>'',
        'contact_phone'=>'',
        'maket'=>'',
        'status'=>'',
        'status_call'=>'',
        'status_bid'=>'',
        'description'=>'',
        'id_tarif'=>'',
        'price'=>'',
        'go_pm'=>'',
        'date_call'=>'',
        'date_meet'=>''
        ]);
    }
}
