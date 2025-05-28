<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
abstract class Controller
{
    protected function responseWithPaginate($message, $data, $page, $limit, $total)
    {
        return response()->json([
            'success'   => true,
            'message'   => $message,
            'metadata' => $data,
            'metapage' => [
                'current_page' => $page,
                'per_page' => $limit,
                'total' => $total,
                'last_page' => ceil($total / $limit),
            ],
        ], Response::HTTP_OK);
    }
}
