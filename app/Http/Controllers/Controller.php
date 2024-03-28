<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Server(
 *      url="/api",
 *      description="Local server"
 * )
 * @OA\Info(
 *      version="1.0.0",
 *      title="API",
 *      description="Academy"
 * )
 * @OA\SecurityScheme(
 *      securityScheme="jwtAuth",
 *      in="header",
 *      name="Authorization",
 *      type="apiKey",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 * )
*/
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
