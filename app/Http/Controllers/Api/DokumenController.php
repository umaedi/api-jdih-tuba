<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocumentResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index()
    {
        $documents = DB::table('document')
        ->join('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->where('is_publish', 1)
        ->orderByDesc('document.created_at')->paginate(10);

        // Manipulasi data menggunakan map
        $documents->getCollection()->transform(function ($document) {
            $document->dokumen_lampiran = env('URL_DOCUMENT'). $document->dokumen_lampiran;
            return $document;
        });

        return new DocumentResource(true, 'List dokumen', $documents);
    }

    public function show($id)
    {
        $document = DB::table('document')
        ->join('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->where('document.id', $id)
        ->get();
        return new DocumentResource(true, 'Detail dokumen', $document);
    }
}
