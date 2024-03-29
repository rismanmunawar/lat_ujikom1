@extends('layouts.layout')
@section('content')
    <main class="login-form">
        <section class="section" style="margin: 3rem">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Add Anggota</div>
                        <div class="card-body">
                            <form action="{{ route('anggota.store') }}" method="POST">
                                @csrf
                                {{-- <div class="form-group row mt-3">
                                    <label for="kd_anggota" class="col-md-4 col-form-label text-right">Kode Anggota</label>
                                    <div class="col-md-6">
                                        <input type="text" id="kd_anggota" class="form-control" name="kd_anggota"
                                            required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div> --}}
                                <div class="form-group row mt-3">
                                    <label for="kd_anggota" class="col-md-4 col-form-label text-right">Kode Anggota</label>
                                    <div class="col-md-6">
                                        <input type="text" id="kd_anggota" class="form-control" name="kd_anggota"
                                            value="{{ $nextKode }}" required autofocus readonly>
                                        @if ($errors->has('kd_anggota'))
                                            <span class="text-danger">{{ $errors->first('kd_anggota') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="nm_anggota" class="col-md-4 col-form-label text-right">Nama Anggota</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nm_anggota" class="form-control" name="nm_anggota"
                                            required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="jk" class="col-md-4 col-form-label text-right">Jenis
                                        Kelamin</label>
                                    <div class="col-md-6">
                                        <select class="form-select" id="jk" name="jk" aria-label="jk">
                                            <option value="">Choose</option>
                                            <option value="L">Laki Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        @if ($errors->has('jk'))
                                            <span class="text-danger">{{ $errors->first('jk') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="tp_lahir" class="col-md-4 col-form-label text-right">Tempat Lahir</label>
                                    <div class="col-md-6">
                                        <input type="text" id="tp_lahir" class="form-control" name="tp_lahir" required
                                            autofocus>
                                        @if ($errors->has('tp_lahir'))
                                            <span class="text-danger">{{ $errors->first('tp_lahir') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="tg_lahir" class="col-md-4 col-form-label text-right">Tanggal
                                        Lahir</label>
                                    <div class="col-md-6">
                                        <input type="date" id="tg_lahir" class="form-control" name="tg_lahir" required
                                            autofocus>
                                        @if ($errors->has('tg_lahir'))
                                            <span class="text-danger">{{ $errors->first('tg_lahir') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="alamat" class="col-md-4 col-form-label text-right">Alamat</label>
                                    <div class="col-md-6">
                                        <input type="text" id="alamat" class="form-control" name="alamat" required
                                            autofocus>
                                        @if ($errors->has('alamat'))
                                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="no_hp" class="col-md-4 col-form-label text-right">No Handphone</label>
                                    <div class="col-md-6">
                                        <input type="number" id="no_hp" class="form-control" name="no_hp" required
                                            autofocus>
                                        @if ($errors->has('no_hp'))
                                            <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="jns_anggota" class="col-md-4 col-form-label text-right">Jenis
                                        Anggota</label>
                                    <div class="col-md-6">
                                        <select class="form-select" id="jns_anggota" name="jns_anggota"
                                            aria-label="jns_anggota">
                                            <option value="">Choose</option>
                                            <option value="admin">Administrator</option>
                                            <option value="anggota">Anggota</option>
                                        </select>
                                        @if ($errors->has('jns_anggota'))
                                            <span class="text-danger">{{ $errors->first('jns_anggota') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                    <button class="btn btn-danger mt-2" onclick="history.back()">
                                        Cancel
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
