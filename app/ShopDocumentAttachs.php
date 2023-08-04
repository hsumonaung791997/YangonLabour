<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopDocumentAttachs extends Model
{
    protected $fillable=['ShopId','attach_path','OwnerSentNotice','WorkingTimeNotice','WorkStartInform','ec_contract','MICLicense','CompanyNrc','IndustryLicense','Import_Export_License','Municipal_License','other_license1','other_license2','other_license3','other_license4','other_license5','other_license6'];
}
