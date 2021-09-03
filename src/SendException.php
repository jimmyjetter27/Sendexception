<?php


namespace Jimmyjetter\Sendexception;


use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class SendException
{
    public function notifyUser($exception_stack, $exception_code = null)
    {
        $endpoint = config('exception-config.cred.endpoint');
        $username = config('exception-config.cred.username');
        $token = config('exception-config.cred.token');


        try {

            return Http::post($endpoint, [
                'token' => $token,
                'exception_code' => $exception_code,
                'exception_stack' => $exception_stack,
            ]);
        } catch (RequestException $e) {
        }
    }

}
