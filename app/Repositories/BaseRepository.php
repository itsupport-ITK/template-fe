<?php

namespace App\Repositories;

use App\Services\ApiService;

class BaseRepository{

    protected $client;

    /**
     * client API getter
     * @param  string  $type
     */
    public function client(string $type = ApiTypeEnum::MAIN)
    {
        $this->client = new ApiService($type);

        return $this->client;
    }

}