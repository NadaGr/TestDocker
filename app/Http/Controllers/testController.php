<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use OpenApi\Annotations as OA;

class testController extends Controller
{
    /**
     * @OA\Get(
     *      path="/testDocker",
     *      operationId="testDocker",
     *      tags={"Tests"},
     *      summary="Get Data",
     *      description="Get Data",
     * * @OA\Parameter(
     *    description="input 2",
     *    in="path",
     *    name="input2",
     *    @OA\Schema(
     *       type="String"
     *    )
     * ),
     * * @OA\Parameter(
     *    description="input 3",
     *    in="path",
     *    name="input3",
     *    @OA\Schema(
     *       type="String"
     *    )
     * ),
     * * @OA\Parameter(
     *    description="input 4",
     *    in="path",
     *    name="input4",
     *    @OA\Schema(
     *       type="String"
     *    )
     * ),
     * * @OA\Parameter(
     *    description="input 5",
     *    in="path",
     *    name="input5",
     *    @OA\Schema(
     *       type="String"
     *    )
     * ),
     *     @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function testDocker(Request $request)
    {
        $input1 = $request->input1;
        $input2 = $request->input2;
        $input3 = $request->input3;
        $input4 = $request->input4;
        $input5 = $request->input5;
        $strArr1 = explode("-", $input1);
        $word1 = "";
        foreach ($strArr1 as $w) {
            $word1 .= mb_substr($w, 0, 1);
        }
        $strArr2 = explode("-", $input2);
        $words2 = "";
        $string = "";
        foreach ($strArr2 as $w) {
            $words2 .= mb_substr($w, 0, 1);
            $string = $w;
        }
        // return $string;
        // $first = substr($input1, -2);
        // $second = preg_replace('/[^A-Za-z0-9\-]/','', $input2);
        // $third = preg_replace('/[^A-Za-z0-9\-]/','', $input3);
        $expression = $word1 . "." . $words2 . preg_replace('/[^A-Za-z0-9\-]/', '', $string) . substr("testers", -2) . "@" . $input3 . "." . preg_replace('/[^A-Za-z0-9\-]/', '', $input4);
        $result = Str::lower($expression);
        $data = [
            'id' => $result,
            "value" => $result
        ];
        return response()->json(['data' => $data]);
    }
}
