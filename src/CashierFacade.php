<?php

namespace Cashier;

use Illuminate\Support\Facades\Facade;

class CashierFacade extends Facade{

    protected static function getFacadesAccessor(){
        
        return CashierClient::class;
    }
}