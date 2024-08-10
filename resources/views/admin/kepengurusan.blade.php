@extends('layouts.admin')

@section('title', 'Kepengurusan')

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
                    <a href="{{ route('kepengurusanadd') }}" class="btn btn-primary btn-sm ms-auto">Tambah Kepengurusan</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">List
                                        Kepengurusan
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Jabatan</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kepengurusan as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    @if ($item->cover != '')
                                                        <img src="{{ asset('storage/cover/' . $item->cover) }}"
                                                            alt="" class="avatar avatar-sm me-3">
                                                    @else
                                                        <img src="{{ asset('img/foto-not-font.jpeg') }}" alt=""
                                                            class="avatar avatar-sm me-3">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->nama }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->jabatan }}</p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="kepengurusanedit/{{ $item->slug }}"
                                                class=" btn btn-info font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="kepengurusanhapus/{{ $item->slug }}" class="btn btn-danger font-weight-bold text-xs"
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
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Menghapus Data
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="kepengurusanhapus/{{ $item->slug }}" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
