@extends('layouts.admin')

@section('title', 'Edit Kepengurusan')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('kepengurusanupdate',$kepengurusan->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
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
                                    <label class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" id="nama"
                                        value="{{ $kepengurusan->nama }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan" id="nama"
                                        value="{{ $kepengurusan->jabatan }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Foto</label>
                                    <input class="form-control" type="file" name="image">

                                </div>
                                <div class=" mt-5">
                                    <div class="avatar avatar-xl position-relative">
                                        @if ($kepengurusan->cover != '')
                                            <img src="{{ asset('storage/cover/' . $kepengurusan->cover) }}" alt=""
                                                >
                                        @else
                                            <img src="{{ asset('img/foto-not-font.jpeg') }}" alt=""
                                                >
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header pb-0">
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
