<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('berita')->get();
        return response()->json([
            'code'  => 200,
            'success'   => true,
            'message'   => 'List data berita',
            'metadata'  => $news,
        ], 200);
    }

    public function show($id)
    {
        $news = DB::table('berita')->where('id', $id)->first();
        return response()->json([
            'code'  => 200,
            'success'   => true,
            'message'   => 'List data berita',
            'metadata'  => $news,
        ], 200);
    }
}
