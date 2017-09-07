<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUniqueIds($prefix, $lastId)
    {
        if(!$lastId || $lastId < 0){
           return  $prefix.'001';
        }
        else{
         $idWithPad = str_pad($lastId+1,3, 0, STR_PAD_LEFT);
         return $prefix.$idWithPad;
        }
    }
}
