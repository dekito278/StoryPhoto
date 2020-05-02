<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Post;
use app\PostImage;
use auth;
use storage;
class PameranController extends Controller
{
    public function AmbilDataPameran()
    {
        $pamerans = Post::with('pameran_fotos')->orderBy('created_at', 'desc')->get();
        return response()->json(['error' => false, 'data' => $pamerans]);
    }
    public function MembuatPameran(Request $request)
    {
        $user = auth::user();
        $judul = $request->judul;
        $deskripsi = $request->deskripsi;
        $foto = $request->foto;

    }

}
