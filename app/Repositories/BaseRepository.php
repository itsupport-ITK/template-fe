<?php

namespace App\Repositories;

use App\Services\ApiService;

class BaseRepository{

    protected $client;


    /**
 * BaseRepository constructor.
 * 
 * @param ApiService $client
 */
    public function __construct(ApiService $client)
    {
        $this->client = $client;
    }

    /**
     * Get the API client instance.
     * 
     * @return ApiService
     */
    public function client()
    {
        return $this->client;
    }

}