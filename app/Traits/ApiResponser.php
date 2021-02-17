<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser {
    
    public function successResponse($data, $message, $code = Response::HTTP_OK) {
        return \response()->json(['message' => $message, 'data' => $data, 'code' => $code ], $code);

    }

    public function errorResponse($message, $code) {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}