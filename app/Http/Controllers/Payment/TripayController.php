<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripayController extends Controller
{
    public function getPaymentChannels(){
        
        
        $apiKey = 'DEV-4jt6q1zCCeiIwGfUu6ApPMrUgE26Zdn2wiudpYPC';
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/merchant/payment-channel',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));
        
        $response = curl_exec($curl);
        $error = curl_error($curl);
        
        curl_close($curl);
        
        return $response ? $response : $error;
        
    }
    
    public function requestTransaction(){
        

        $apiKey       = 'DEV-4jt6q1zCCeiIwGfUu6ApPMrUgE26Zdn2wiudpYPC';
        $privateKey   = 'bd3xS-Em8Cn-DYSoT-0C8pu-h9mvW';
        $merchantCode = 'T27840';
        $merchantRef  = 'nomor referensi merchant anda'; // Anda perlu mengganti ini dengan nilai yang valid
        $amount       = 100000;
        
        $data = [
            'method'         => 'BRIVA',
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => 'Nama Pelanggan',
            'customer_email' => 'emailpelanggan@domain.com',

            'order_items'    => [
                [
                    'sku'         => 'FB-06',
                    'name'        => 'Nama Produk 1',
                    'price'       => 500000,
                    'quantity'    => 1,
                   
                ],
                [
                    'sku'         => 'FB-07',
                    'name'        => 'Nama Produk 2',
                    'price'       => 500000,
                    'quantity'    => 1,
                ]
            ],
            'return_url'   => 'https://domainanda.com/redirect',
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$amount, $privateKey)
        ];
            
        $curl = curl_init();
            
        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);
            
        $response = curl_exec($curl);
        $error = curl_error($curl);
            
        curl_close($curl);
            
        echo empty($error) ? $response : $error;
            
            
    }
        
        
}
