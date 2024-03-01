@extends('layouts.layout')
@section('content')
    <main class="login-form">
        <section class="section" style="margin: 3rem">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Tambah Koleksi</div>
                        <div class="card-body">
                            <form action="{{ route('koleksi.store') }}" method="POST">
                                @csrf
                                {{-- <div class="form-group row mt-3">
                                    <label for="kd_koleksi" class="col-md-4 col-form-label text-right">Kode Koleksi</label>
                                    <div class="col-md-6">
                                        <input type="text" id="kd_koleksi" class="form-control" name="kd_koleksi"
                                            required autofocus>
                                        @if ($errors->has('kd_koleksi'))
                                            <span class="text-danger">{{ $errors->first('kd_koleksi') }}</span>
                                        @endif
                                    </div>
                                </div> --}}
                                <div class="form-group row mt-3">
                                    <label for="kd_koleksi" class="col-md-4 col-form-label text-right">Kode Koleksi</label>
                                    <div class="col-md-6">
                                        <input type="text" id="kd_koleksi" class="form-control" name="kd_koleksi"
                                            value="{{ $nextKode }}" required autofocus readonly>
                                        @if ($errors->has('kd_koleksi'))
                                            <span class="text-danger">{{ $errors->first('kd_koleksi') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="judul" class="col-md-4 col-form-label text-right">Judul Koleksi</label>
                                    <div class="col-md-6">
                                        <input type="text" id="judul" class="form-control" name="judul" required
                                            autofocus>
                                        @if ($errors->has('judul'))
                                            <span class="text-danger">{{ $errors->first('judul') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="jns_bhn_pustaka" class="col-md-4 col-form-label text-right">Jenis Bahan
                                        Pustaka</label>
                                    <div class="col-md-6">
                                        <input type="text" id="jns_bhn_pustaka" class="form-control"
                                            name="jns_bhn_pustaka" required autofocus>
                                        @if ($errors->has('jns_bhn_pustaka'))
                                            <span class="text-danger">{{ $errors->first('jns_bhn_pustaka') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="jns_koleksi" class="col-md-4 col-form-label text-right">Jenis
                                        Koleksi</label>
                                    <div class="col-md-6">
                                        <input type="text" id="jns_koleksi" class="form-control" name="jns_koleksi"
                                            required autofocus>
                                        @if ($errors->has('jns_koleksi'))
                                            <span class="text-danger">{{ $errors->first('jns_koleksi') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="jns_media" class="col-md-4 col-form-label text-right">Media</label>
                                    <div class="col-md-6">
                                        <input type="text" id="jns_media" class="form-control" name="jns_media" required
                                            autofocus>
                                        @if ($errors->has('jns_media'))
                                            <span class="text-danger">{{ $errors->first('jns_media') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="pengarang" class="col-md-4 col-form-label text-right">Pengarang</label>
                                    <div class="col-md-6">
                                        <input type="text" id="pengarang" class="form-control" name="pengarang" required
                                            autofocus>
                                        @if ($errors->has('pengarang'))
                                            <span class="text-danger">{{ $errors->first('pengarang') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="penerbit" class="col-md-4 col-form-label text-right">Penerbit</label>
                                    <div class="col-md-6">
                                        <input type="text" id="penerbit" class="form-control" name="penerbit" required
                                            autofocus>
                                        @if ($errors->has('penerbit'))
                                            <span class="text-danger">{{ $errors->first('penerbit') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="tahun" class="col-md-4 col-form-label text-right">Tahun</label>
                                    <div class="col-md-6">
                                        <input type="number" id="tahun" class="form-control" name="tahun" required
                                            autofocus>
                                        @if ($errors->has('tahun'))
                                            <span class="text-danger">{{ $errors->first('tahun') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="cetakan" class="col-md-4 col-form-label text-right">Cetakan</label>
                                    <div class="col-md-6">
                                        <input type="text" id="cetakan" class="form-control" name="cetakan" required
                                            autofocus>
                                        @if ($errors->has('cetakan'))
                                            <span class="text-danger">{{ $errors->first('cetakan') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="edisi" class="col-md-4 col-form-label text-right">Edisi</label>
                                    <div class="col-md-6">
                                        <input type="text" id="edisi" class="form-control" name="edisi" required
                                            autofocus>
                                        @if ($errors->has('edisi'))
                                            <span class="text-danger">{{ $errors->first('edisi') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="status" class="col-md-4 col-form-label text-right">Status</label>
                                    <div class="col-md-6">
                                        <select class="form-select" id="status" name="status" aria-label="status">
                                            <option value="">Choose</option>
                                            <option value="Tersedia">Tersedia</option>
                                            <option value="Dipinjam">Dipinjam</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
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
