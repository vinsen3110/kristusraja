@extends('layouts.admin')

@section('title', 'Berita')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-header pb-0">
                    <a href="{{ route('tambahberita') }}" class="btn btn-primary btn-sm ms-auto">Tambah Berita</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Judul
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Subjudul
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sampul
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        article
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $item)
                                    <tr>
                                        <td align="center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->subjudul }}</td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    @if ($item->foto_utama != '')
                                                        <img src="{{ asset('storage/cover/' . $item->foto_utama) }}"
                                                            alt="" class="avatar avatar-sm me-3">
                                                    @else
                                                        <img src="{{ asset('img/foto-not-font.jpeg') }}" alt=""
                                                            class="avatar avatar-sm me-3">
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {!! Str::limit($item->article, 40) !!}
                                        </td>
                                        <td class="align-middle ">
                                            <a href="beritaedit/{{ $item->slug }}"
                                                class=" btn btn-info font-weight-bold text-xs mx-2" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="beritahapus/{{ $item->slug }}" class="btn btn-danger font-weight-bold text-xs"
                                            onclick="return confirm('Are you sure?')">Hapus</a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
