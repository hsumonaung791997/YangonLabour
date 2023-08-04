<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactoryClose extends Model
{
    protected $fillable=['factory_id','FactoryAddress','totalWorker','NoticeDate','CloseDate','DesCloseFactory','attachfile'];

}
