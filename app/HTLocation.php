<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HTLocation extends Model
{
    // Table Name
    protected $table = 'ht_locations';

    // Primary Key
   	public $primaryKey = 'id';

   	// Timestamps
   	public $timestamps = true;
}
