<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KepengurusanController extends Controller
{
    public function show()
    {
        $kepengurusan = Kepengurusan::all();
        return view('admin.kepengurusan', ['kepengurusan' => $kepengurusan]);
    }

    public function tambah()
    {
        
        return view('admin.kepengurusanAdd');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'jabatan' => 'required|max:100',
        ]);

        $newName = '';
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        
        $request['cover'] = $newName;
        $kepengurusan = Kepengurusan::create($request->all());
        return redirect('admin/kepengurusan')->with('status', 'Kepengurusan Berhasil di Tambahkan');
    }

    public function edit($slug)
    {
        $kepengurusan = Kepengurusan::where('slug', $slug)->first();
        return view('admin.kepengurusanEdit ',  compact('slug'), ['kepengurusan' => $kepengurusan]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'jabatan' => 'required|max:100',
        ]);

        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $kepengurusan = Kepengurusan::where('slug', $slug)->firstOrFail();

        if ($request->nama !== $kepengurusan->nama) {
            $newSlug = Str::slug($request->nama);
            $request['slug'] = $newSlug;
        }

        $kepengurusan->update($request->all());

        return redirect('admin/kepengurusan')->with('status', 'Kepengurusan Berhasil di Update');
    }

    public function delete($slug)
    {
        $kepengurusan = Kepengurusan::where('slug', $slug)->first();
        $kepengurusan->delete();
        return redirect('admin/kepengurusan')->with('status', 'Kepengurusan Berhasil di Hapus');
    }
}
