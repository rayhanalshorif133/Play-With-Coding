<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionHandleController extends Controller
{
    public function subAndUnSubNotification(Request $request){
        $data = [
            'msisdn' => $request->msisdn,
            'opr' => 'GP',
            'service' => $request->service_key,
            'sub_service' => null,
            'channel' => 'yznx',	
            'push_date' => '2023-10-21',	
            'next_date' => '2023-10-22',	
            'next_content_push_date' => '2023-10-22',	
            'counter' => 0,
            'counter_reset_date' => '2023-09-01'
        ];
        return $this->respondWithSuccess("data", $data);
    }

}
