@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('beritastore') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="example-text-input" class="form-control-label">Judul</label>
                                    <input class="form-control" type="text" name="judul" placeholder="masukkan judul">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Sub Judul</label>
                                    <input class="form-control" type="text" name="subjudul" placeholder="masukkan subjudul">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Foto Utama</label>
                                    <input class="form-control" type="file" name="image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanggal</label>
                                    <input class="form-control" type="date" name="tanggal" placeholder="masukkan tanggal">
                                </div>
                            </div>
                            <div class="col-md-13">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                    <input class="form-control" type="hidden" name="article" id="article">
                                    <trix-editor input="article"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Type</label>
                                    <input class="form-control" type="text" name="type" placeholder="masukkan type">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('berita') }}" class="btn btn-danger btn-sm ms-auto m-2">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm m-2">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
@endsection

@section('scripts')
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endsection
