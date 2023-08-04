<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempShopInspectionInform extends Model
{
    protected $table = 'temp_shop_inspection_informs';
	
    protected $fillable = ['inspectorrank','inspection_name','id','shop_inspection_inform_id','user_id','inspectiondate','lastinspectiondate', 'ShopId','inspectedtime', 'inspection_type', 'shopname', 'shopaddress', 'property', 'ownername', 'owneraddress', 'workcategory', 'managername', 'manageraddress', 'intervieweename', 'intervieweenamerank', 'above18m', 'above15m', 'above13m', 'totalm', 'above18f', 'above15f', 'above13f','totalf'];

}
