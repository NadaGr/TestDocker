<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

class Controller extends BaseController
{
    /**
     *      @OA\Info(version="0.1",title="Test Docker API"),
     *      @OA\Contact(email="garrab.nada@gmail.com)
     *
     * */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
