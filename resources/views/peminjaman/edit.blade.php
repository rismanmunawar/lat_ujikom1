@extends('layouts.layout')
@section('content')
    <main class="login-form">
        <section class="section" style="margin: 3rem">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Data Pinjaman</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pinjam.update', $pinjams->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mt-3">
                                    <label for="no_transaksi_pinjam" class="col-md-4 col-form-label text-right">No Transaksi
                                        Peminjaman</label>
                                    <div class="col-md-6">
                                        <input type="text" id="no_transaksi_pinjam" class="form-control"
                                            name="no_transaksi_pinjam" value="{{ $pinjams->no_transaksi_pinjam }}" required
                                            autofocus readonly>
                                        @if ($errors->has('no_transaksi_pinjam'))
                                            <span class="text-danger">{{ $errors->first('no_transaksi_pinjam') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="kd_anggota" class="col-md-4 col-form-label text-right">Kode Anggota</label>
                                    <div class="col-md-6">
                                        <select id="kd_anggota" class="form-control" name="kd_anggota" required autofocus>
                                            <option value="">Pilih Kode Anggota</option>
                                            @foreach ($anggotas as $anggota)
                                                <option value="{{ $anggota->kd_anggota }}"
                                                    {{ $anggota->kd_anggota == $pinjams->kd_anggota ? 'selected' : '' }}>
                                                    {{ $anggota->kd_anggota }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('kd_anggota'))
                                            <span class="text-danger">{{ $errors->first('kd_anggota') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="nm_anggota" class="col-md-4 col-form-label text-right">Nama Anggota</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nm_anggota" class="form-control" name="nm_anggota"
                                            value="{{ $pinjams->nm_anggota }}" required readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="tg_pinjam" class="col-md-4 col-form-label text-right">Tanggal
                                        Peminjaman</label>
                                    <div class="col-md-6">
                                        <input type="date" id="tg_pinjam" class="form-control" name="tg_pinjam"
                                            value="{{ $pinjams->tg_pinjam }}" required autofocus>
                                        @if ($errors->has('tg_pinjam'))
                                            <span class="text-danger">{{ $errors->first('tg_pinjam') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="tg_bts_kembali" class="col-md-4 col-form-label text-right">Tanggal
                                        Pemgembalian</label>
                                    <div class="col-md-6">
                                        <input type="date" id="tg_bts_kembali" class="form-control" name="tg_bts_kembali"
                                            value="{{ $pinjams->tg_bts_kembali }}" required autofocus>
                                        @if ($errors->has('tg_bts_kembali'))
                                            <span class="text-danger">{{ $errors->first('tg_bts_kembali') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="kd_koleksi" class="col-md-4 col-form-label text-right">Kode Koleksi</label>
                                    <div class="col-md-6">
                                        <select id="kd_koleksi" class="form-control" name="kd_koleksi" required autofocus>
                                            <option value="">Pilih Kode Koleksi</option>
                                            @foreach ($koleksis as $koleksi)
                                                <option value="{{ $koleksi->kd_koleksi }}"
                                                    {{ $koleksi->kd_koleksi == $pinjams->kd_koleksi ? 'selected' : '' }}
                                                    data-judul="{{ $koleksi->judul }}"
                                                    data-jns-bhn-pustaka="{{ $koleksi->jns_bhn_pustaka }}"
                                                    data-jns-koleksi="{{ $koleksi->jns_koleksi }}"
                                                    data-jns-media="{{ $koleksi->jns_media }}">
                                                    {{ $koleksi->kd_koleksi }} - {{ $koleksi->judul }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('kd_koleksi'))
                                            <span class="text-danger">{{ $errors->first('kd_koleksi') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="judul" class="col-md-4 col-form-label text-right">Judul</label>
                                    <div class="col-md-6">
                                        <input type="text" id="judul" class="form-control" name="judul"
                                            value="{{ $pinjams->judul }}" required readonly>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="jns_bhn_pustaka" class="col-md-4 col-form-label text-right">Jenis Bahan
                                        Pustaka</label>
                                    <div class="col-md-6">
                                        <input type="text" id="jns_bhn_pustaka" class="form-control"
                                            name="jns_bhn_pustaka" value="{{ $pinjams->jns_bhn_pustaka }}" required
                                            readonly>
                                        <input type="hidden" id="jns_bhn_pustaka_hidden" name="jns_bhn_pustaka_hidden">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="jns_koleksi" class="col-md-4 col-form-label text-right">Jenis
                                        Koleksi</label>
                                    <div class="col-md-6">
                                        <input type="text" id="jns_koleksi" class="form-control" name="jns_koleksi"
                                            value="{{ $pinjams->jns_koleksi }}" required readonly>
                                        <input type="hidden" id="jns_koleksi_hidden" name="jns_koleksi_hidden">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="jns_media" class="col-md-4 col-form-label text-right">Jenis Media</label>
                                    <div class="col-md-6">
                                        <input type="text" id="jns_media" class="form-control" name="jns_media"
                                            value="{{ $pinjams->jns_media }}" required readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('pinjam.index') }}" class="btn btn-danger mt-2">
                                        <i class="bi bi-x"></i>
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        document.getElementById('kd_koleksi').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var judulInput = document.getElementById('judul');
            var jnsBhnPustakaInput = document.getElementById('jns_bhn_pustaka');
            var jnsKoleksiInput = document.getElementById('jns_koleksi');

            // Ambil data dari atribut yang sesuai dari opsi yang dipilih
            var judul = selectedOption.getAttribute('data-judul');
            var jnsBhnPustaka = selectedOption.getAttribute('data-jns-bhn-pustaka');
            var jnsKoleksi = selectedOption.getAttribute('data-jns-koleksi');

            // Isi nilai ke input
            judulInput.value = judul;
            jnsBhnPustakaInput.value = jnsBhnPustaka;
            jnsKoleksiInput.value = jnsKoleksi;

            // Isi nilai ke input hidden
            document.getElementById('jns_bhn_pustaka_hidden').value = jnsBhnPustaka;
            document.getElementById('jns_koleksi_hidden').value = jnsKoleksi;
        });
    </script>
@endsection
