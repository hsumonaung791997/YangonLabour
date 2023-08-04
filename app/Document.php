<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table='documents';
    protected $fillable=['Factory_Type','documentId',
        'documentfileName',
        'FactoryID',
        'check_id',
        'create_date',
        'documentTitle',
        'creator',
        'FromDepartment',
        'entrydate',
        'documenttype',
        'documentReferenceNo',
        'instructionid'];
}

      
        
  
