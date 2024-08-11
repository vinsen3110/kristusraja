@extends('layouts.admin')

@section('title', 'Tambah Kepengurusan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('kepengurusanstore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Profile</p>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" placeholder="Yanto Saputra">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan" placeholder="CEO PT.Berkah">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Foto</label>
                                    <input class="form-control" type="file" name="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card m-2">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('kepengurusan') }}" class="btn btn-danger btn-sm ms-auto m-2">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm m-2">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
