<?php

namespace App\Repositories\AuthRepository;

use App\Repositories\BaseRepository;

class AuthRepository extends BaseRepository
{
    /**
     * Get token from session
     * 
     * @return array|string
     */
    public function getToken(?string $type = null) : array|string|null{
        
        $token = [
            'token' => session('token'),
            'expiry_time' => session('expiry_time')
        ];

        if($type != null){

            return isset($token[$type]) ? $token[$type] : null;
        }

        return $token;
    }
}
