<?php

namespace Cashier;

use Illuminate\Support\Facades\Facade;

class CashierFacade extends Facade{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadesAccessor(){
        
        return CashierClient::class;
    }
}