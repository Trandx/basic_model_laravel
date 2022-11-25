<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;
/**
* @OA\Info(title="API  de OZ STREAM", version="3.0.0")
* @OA\Server(
*    url="http://localhost:8001/",
*    description="OZ STREAM "
* )
* @OA\Schemes(format="http")
* @OA\SecurityScheme(
*      securityScheme="bearerAuth",
*      in="header",
*      name="bearerAuth",
*      type="http",
*      scheme="bearer",
*      bearerFormat="JWT",
* )
*/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
