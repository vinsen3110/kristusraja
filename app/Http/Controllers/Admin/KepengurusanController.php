<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;

class KepengurusanController extends Controller
{
    public function show()
    {
        return view('admin.kepengurusan');
    }

    public function add()
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
        $book = Kepengurusan::create($request->all());
        return redirect('admin/kepengurusan')->with('status', 'Articel Berhasil di Tambahkan');
    }
}
