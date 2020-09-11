<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class Donor_Accounts extends Model
{
        use Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'donor_name',	'donor_location',	'tel_no',	'donor_email',	'donor_product',
        ];
}
    

