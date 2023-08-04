<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseOpen extends Model
{
    protected $table='cases';
    protected $primaryKey='caseid';
    protected $fillable=['createdate','FromUserId','ToUserID','ToTownship','ToDistrictUser','ToDistrict','ToRegionUser','ToRegion','Tominister','Inspectedate','LastInspectedate','documentId1','documentId2','documentId3','documentId4','documentId5','documentId6','documentId7','documentId8','documentId9','Status','checkid','FromTownshipid','FromDistrictid'];


  }
