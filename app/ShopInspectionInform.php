<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopInspectionInform extends Model
{
    public $table = "shop_inspection_informs";
    protected $fillable = ['inspectionid','inspectorrank','inspection_name','id', 'ShopId','inspectiondate','lastinspectiondate','inspectedtime', 'inspection_type', 'shopname', 'shopaddress', 'property', 'ownername', 'owneraddress', 'workcategory', 'managername', 'manageraddress', 'intervieweename', 'intervieweenamerank', 'above18m', 'above15m', 'above13m', 'totalm', 'above18f', 'above15f', 'above13f','totalf', 'created_at', 'updated_at'];
}
