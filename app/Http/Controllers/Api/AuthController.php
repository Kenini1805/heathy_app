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
     * Login with email and password
     *
     * @OA\Post(
     *     path="/api/login",
     *     tags={"Authentication"},
     *     @OA\Parameter(
     *          in="query",
     *          name="username",
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
     *         description="Success",
     *         @OA\JsonContent(
     *                  @OA\Property(property="token_type", type="string"),
     *                  @OA\Property(property="expires_in", type="integer"),
     *                  @OA\Property(property="access_token", type="string"),
     *                  @OA\Property(property="refresh_token", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found"
     *     ),
     *     @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *     ),
     * )
     * 
     * @return ColumnResource
     */
    public function login(LoginRequest $request)
    {
        $data = Config::get('services.passport') + [
            'username' => $request->input('username'),
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
