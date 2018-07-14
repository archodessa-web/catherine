<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LiqPay;

class LiqpayController extends Controller
{
    public function index() {
        $api = new LiqPay('i5203098268', 'gTw9UrvL90LDTjWgbnQRRYxrCBNU9xd2E4857eZP');
        $liqpay = $api->cnb_form(array(
            'action'         => 'pay',
            'amount'         => '150',
            'currency'       => 'UAH',
            'description'    => 'description text',
            'order_id'       => 'order_id_1',
            'version'        => '3',
            'sandbox'        => '1'
        ));
        return view('liqpay', compact('liqpay'));
    }

    public function wtf() {
        $api = new LiqPay('i5203098268', 'gTw9UrvL90LDTjWgbnQRRYxrCBNU9xd2E4857eZP');

        $hndl = fopen('shit.txt');

        fclose();
        fclose($hndl);
    }
}
