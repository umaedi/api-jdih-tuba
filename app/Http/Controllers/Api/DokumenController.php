<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocumentResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $limit = $request->input('per_page', 10);
        $filter = $request->input('filter', "DESC");
        $skip = ($page - 1) * $limit;

        $documents = DB::table('document')
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->leftJoin('data_subyek', 'document.id', '=', 'data_subyek.id_dokumen')
        ->select(
            'document.id as sc_id',
            'document.tahun_terbit as sc_tahun',
            'document.tanggal_penetapan as sc_penetapan',
            'document.tanggal_pengundangan as sc_pengundangan',
            'document.jenis_peraturan as sc_jenis',
            'document.nomor_peraturan as sc_nomor',
            'document.judul as sc_judul',
            'document.nomor_panggil as sc_panggil',
            'document.singkatan_jenis as sc_singkatan',
            'document.tempat_terbit as sc_tempat',
            'document.penerbit as sc_penerbit',
            'document.deskripsi_fisik as sc_fisik',
            'document.sumber as sc_sumber',
            'data_subyek.subyek as sc_subyek',
            'document.isbn as sc_isbn',
            'document.status as sc_status',
            'document.bahasa as sc_bahasa',
            'document.bidang_hukum as sc_bidkum',
            'document.teu as sc_teu',
            'document.nomor_induk_buku as sc_nib',
            'data_lampiran.judul_lampiran as sc_lampiran',
            'data_lampiran.dokumen_lampiran as sc_url'
        )
        ->where('document.is_publish', 1)
        ->skip($skip)
        ->take($limit)
        ->orderBy('document.tanggal_pengundangan', $filter)
        ->get();

    $total = DB::table('document')
        ->where('document.is_publish', 1)
        ->count();
    $documents = $documents->map(function ($document) {
        return [
            'idData' => $document->sc_id,
            'tahun_pengundangan' => $document->sc_tahun,
            'tanggal_penetapan' => $document->sc_penetapan,
            'tanggal_pengundangan' => $document->sc_pengundangan,
            'jenis' => $document->sc_jenis,
            'noPeraturan' => $document->sc_nomor,
            'judul' => $document->sc_judul,
            'noPanggil' => $document->sc_panggil,
            'singkatanJenis' => $document->sc_singkatan,
            'tempatTerbit' => $document->sc_tempat,
            'penerbit' => $document->sc_penerbit,
            'deskripsiFisik' => $document->sc_fisik,
            'sumber' => $document->sc_sumber,
            'subjek' => $document->sc_subyek,
            'isbn' => $document->sc_isbn,
            'status' => $document->sc_status,
            'bahasa' => $document->sc_bahasa,
            'bidangHukum' => $document->sc_bidkum,
            'teuBadan' => $document->sc_teu,
            'nomorIndukBuku' => $document->sc_nib,
            'fileDownload' => $document->sc_lampiran,
            'urlDownload' => env('URL_DOCUMENT') . $document->sc_url,
            'urlDetailPeraturan' => 'https://jdih.tulangbawangkab.go.id/dokumen/view?id=' . $document->sc_id,
            'operasi' => '4',
            'display' => '1'
        ];
    });

    return $this->responseWithPaginate('Data semua notifikasi', $documents, $page, $limit, $total);
    }

    public function show($id)
    {
        $document = DB::table('document')
        ->join('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->where('document.id', $id)
        ->first();
        return response()->json([
            'success' => true,
            'message' => 'Detail dokumen',
            'metadata' => $document
        ]);
    }
}
