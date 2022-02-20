<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use function auth;
use function config;
use function response;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ClientException|GuzzleException
     */
    public function login(Request $request): JsonResponse
    {
        try {
            $client = new Client();

            $response = $client->post(config('services.passport.endpoint'), [
                'form_params' => [
                    'grant_type'    => 'password',
                    'client_id'     => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                    'username'      => $request->username,
                    'password'      => $request->password
                ]
            ]);

            return response()->json([
                'success' => true,
                'message' => 'You have been successfully logged.',
                'data'    => json_decode($response->getBody()->getContents())
            ]);
        } catch (ClientException $exception) {
            if ($exception->getCode() === 400) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid request. Please enter a valid username and password.',
                    'data'    => null,
                ], $exception->getCode());
            } else if ($exception->getCode() === 401) {
                return response()->json([
                    'success' => false,
                    'message' => 'Your login details are incorrect. Please try again.',
                    'data'    => null
                ], $exception->getCode());
            }

            return response()->json([
                'success' => false,
                'message' => 'Internal error.',
                'data'    => $exception->getMessage()
            ], $exception->getCode());
        }
    }

    /**
     * Logout
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->user()->token()->delete();

        return response()->json([
            'success' => true,
            'message' => 'You have been successfully logged out.',
            'data'    => null
        ]);
    }
}
