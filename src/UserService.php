<?php

namespace Rhko\UserBridge;

class UserService extends ApiService {
    public function __construct() {
        $this->endpoint = env('AUTH_MS') . '/api';
    }
}