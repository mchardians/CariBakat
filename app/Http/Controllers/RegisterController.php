<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SignUpRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RegisterController extends Controller
{
    public function index() {
        return view('pages.auth.signup');
    }

    public function store(SignUpRequest $request) {
        try {
            $data = $request->validated();
            $data['role_id'] = 1;

            $query = User::create($data);

            return response()->json([
                "statusCode" => 201,
                "data" => [
                    "code" =>"Success",
                    "message" => "User created successfully!",
                    "details" => null
                ]
            ], 201);
        } catch (HttpException $e) {
            return response()->json([
                "statusCode" => $e->getStatusCode(),
                "data" => [
                    "code" => get_class($e),
                    "message" => $e->getMessage(),
                    "details" => $e->getTraceAsString()
                ]
            ], $e->getStatusCode());
        }
    }
}
