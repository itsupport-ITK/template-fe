<?php

namespace App\Http\Controllers;

use App\Enums\StatusMessageEnum;
use App\Services\ApiService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;

abstract class Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public $client;

    /**
     * client API getter
     * @param  string  $type
     */
    public function client(string $type = 'main')
    {
        $this->client = new ApiService($type);

        return $this->client;
    }

    /**
     * return back with error, custom message and custom error key
     * @param  string $message
     * @param  \Illuminate\Contracts\Support\MessageProvider|array|string $errors
     */
    public function backWithError(Request $request, string $message, mixed $data, string $key = 'default'){
        
        if(!empty($data['errors'])){

            return back()->with(StatusMessageEnum::DANGER, $message)->withInput(
                $request->except('password')
            )->withErrors($data['errors'], $key);
        }

        return back()->with(StatusMessageEnum::DANGER, $message);
    }
}
