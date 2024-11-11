<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    
    public function register(UserRegisterRequest $request)
    {
        return $this->authService->register($request->all());
    }

    public function login(UserLoginRequest $request)
    {
        return $this->authService->login($request->all());
    }
}
