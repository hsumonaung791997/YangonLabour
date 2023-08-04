<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffectedBodyPiece extends Model
{
    protected $table='affected_body_pieces';
    protected $fillable=['affected_body_code','peice_no','peice_name'];
}
