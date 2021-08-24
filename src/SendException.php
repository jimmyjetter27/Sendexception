<?php


namespace Jimmyjetter\Sendexception;


use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class SendException
{
    public function notifyUser($exception)
    {
        $endpoint = config('exception-config.cred.endpoint');
        $username = config('exception-config.cred.username');
        $token = config('exception-config.cred.token');


        try {
            return Http::withBody($exception, 'application/json')
                ->post($endpoint, [
                    'username' => $username,
                    'token' => $token,
                ]);
        } catch (RequestException $e) {
        }
    }

}
