<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeraturanResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    public function index()
    {
        $peraturans = DB::table('data_lampiran')->latest()->paginate(12);
        return new PeraturanResource(true, 'List data peraturan', $peraturans);
    }
}
