<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Tripay\Main;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    protected $tripay;

    public function __construct(){
        $this->tripay = new Main(
            'DEV-4jt6q1zCCeiIwGfUu6ApPMrUgE26Zdn2wiudpYPC',
            'bd3xS-Em8Cn-DYSoT-0C8pu-h9mvW',
            'T27840',
            'sandbox' // fill for sandbox mode, leave blank if in production mode
        );
    }
}
