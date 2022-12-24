<?php

namespace App\Http\Controllers\Api;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\Api\LoginRequest;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * Login with username and password
     *
     * @OA\Post(
     *     path="/api/login",
     *     tags={"Authentication"},
     *     @OA\Parameter(
     *          in="query",
     *          name="email",
     *          required=true,
     *          @OA\Schema(
     *            type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          in="query",
     *          name="password",
     *          required=true,
     *          @OA\Schema(
     *            type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Diaries",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *     )
     * )
     *
     * @return ColumnResource
     */
    public function login(LoginRequest $request)
    {
        $data = Config::get('services.passport') + [
            'username' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $request = Request::create('/oauth/token', 'POST', $data);

        return App::handle($request);
    }

    /**
     * Revoke the access token from the authenticated user.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        return response()->json(['success' => $request->user()->token()->revoke()]);
    }
}
