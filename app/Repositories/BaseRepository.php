<?php

namespace App\Repositories;

use App\Services\ApiService;

class BaseRepository{

    protected $client;

    /**
     * client API getter
     * @param  string  $type
     */
    public function client()
    {
        $this->client = new ApiService();

        return $this->client;
    }

}