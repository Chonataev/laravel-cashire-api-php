<?php

namespace Cashier;

class CashierClient{

    public function __cunstruct(){
    //
    }

    public function responseError($message)
    {
        $result['error']['message'] = $message;

        return $result;
    }

    public function responseOK($message)
    {
        $result['result']['message'] = $message;

        return $result;
    }

    public function getSing($amount,$order_id,$shop_id,$currency,$test,$secret){
        if(!isset($test)){
            $test = null;
        }
        $data = array(
            'amount'=>$amount,
            'order_id'=>$order_id,
            'shop_id'=>$shop_id,
            'currency'=>$currency,
            'test' =>$test,
        );
        ksort($data);
        $hashstr = http_build_query($data);
        return md5($hashstr . $secret);
    }
    public function catchSing(array $params,$secret){
        ksort($params);
        unset($params['sing']);
        $hashstr = http_build_query($params);
        $sing = md5($hashstr . $secret);
        return [
            'sing'=> $sing, 
            'id' => $params['order_id']
        ];
    }

    public function responseStatus(){
        $this->catchSing['sing'] == $this->getSing ? $temp = true : $temp = false;
        return $temp;
    }
}
