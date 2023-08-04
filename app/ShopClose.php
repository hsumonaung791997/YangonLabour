<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopClose extends Model
{
    protected $table = 'shop_closes';
    protected $fillable=['shop_id','ShopAddress','totalWorker','NoticeDate','CloseDate','DesCloseShop','attachfile'];
}
