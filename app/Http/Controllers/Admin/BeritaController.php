<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Helpers\TextHelper;


class BeritaController extends Controller
{
    public function show()
    {
        $berita = Berita::all();
        return view('admin.berita', ['berita' => $berita]);
    }

    public function add()
    {
        return view('admin.beritaadd');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'subjudul' => 'required|max:100',
            'article' => 'required',
        ]);
        
        $newName = '';
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->subjudul.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        
        $request['foto_utama'] = $newName;

        $berita = Berita::create($request->all());
        return redirect('admin/berita')->with('status', 'Kepengurusan Berhasil di Tambahkan');
        
    }

    public function edit($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('admin.beritaEdit', ['berita' => $berita]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'judul' => 'required',
            'subjudul' => 'required|max:100',
            'article' => 'required',
        ]);

        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['foto_utama'] = $newName;
        }

        $berita = Berita::where('slug', $slug)->firstOrFail();

        if ($request->nama !== $berita->nama) {
            $newSlug = Str::slug($request->nama);
            $request['slug'] = $newSlug;
        }

        $berita->update($request->all());

        return redirect('admin/berita')->with('status', 'Berita Berhasil di Update');
    }

    public function delete($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $berita->delete();
        return redirect('admin/berita')->with('status', 'Berita Berhasil di Hapus');
    }
}
