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
        $fotos = $request->fotos;

        $pamerans = Post::create([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'no_pengguna' => $user->no,
        ]);

        //penempatan foto pameran

        foreach($fotos as $foto) 
        {
            $lokasiFoto = Storage::disk('uploads')->put($user->email . '/karya' . $pamerans->no, $foto);
            PameranFoto::create([
                'deksripsi_foto' => $judul,
                'tempat_foto' => '/uploads/' . $lokasiFoto,
                'no_pameran' => $pamerans->no
            ]);
        }

        return response()->json(['error'=>false,'data'=>'$pamerans']);

    }

}
