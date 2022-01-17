<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponder
{
    /**
     * Return a success JSON response.
     *
     * @param array $data
     * @param int $code
     * @return JsonResponse
     */
    protected function success(array $data, int $code = 200): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ], $code);
    }

    /**
     * Return an error JSON response.
     *
     * @param array $errors
     * @param int $code
     * @return JsonResponse
     */
    protected function error(array $errors, int $code = 400): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'errors' => $errors
        ], $code);
    }
}
