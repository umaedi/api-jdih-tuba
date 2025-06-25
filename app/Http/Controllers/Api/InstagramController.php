<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
           $response = Http::get('http://192.168.11.2:9913/api/instagram');
            $responseData = $response->json()['metadata'];

            // Filter hanya media_type yang bukan VIDEO
            $filtered_posts = array_filter($responseData, function ($post) {
                return $post['media_type'] == 'CAROUSEL_ALBUM';
            });

            // Ambil hanya 4 data pertama dari hasil filter
            $post_instagram = array_slice(array_values($filtered_posts), 0, 6);
            return response()->json([
                'message' => 'Instagram posts fetched successfully',
                'metadata' => $post_instagram
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Failed to fetch Instagram posts',
                'error' => $th->getMessage()
            ], 500);
        }
        
    }
}
