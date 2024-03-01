@extends('layouts.layout')
@section('content')
    <section class="section" style="margin: 3rem">
        <div class="row" id="table-responsive">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Peminjaman</h5>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div id="success-alert" class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <a href="{{ route('pinjam.create') }}" class="btn btn-sm btn-secondary">
                            Tambah Peminjaman
                        </a>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>No. Trs Peminjaman</th>
                                        <th>Nama Anggota</th>
                                        <th>Kode Koleksi</th>
                                        <th>Judul</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Tgl Kembali</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach ($pinjams as $row)
                                        {{-- Untuk Mengatur Format date agar d/m/y --}}
                                        <?php
                                        $no++;
                                        $tg_pinjam = \Carbon\Carbon::parse($row->tg_pinjam)->format('d/m/Y');
                                        $tg_bts_kembali = \Carbon\Carbon::parse($row->tg_bts_kembali)->format('d/m/Y');
                                        ?>
                                        <tr>
                                            <th scope="row">{{ $no }}</th>
                                            <td>{{ $row->no_transaksi_pinjam }}</td>
                                            <td>{{ $row->nm_anggota }}</td>
                                            <td>{{ $row->kd_koleksi }}</td>
                                            <td>{{ $row->judul }}</td>
                                            <td>{{ $tg_pinjam }}</td>
                                            <td>{{ $tg_bts_kembali }}</td>
                                            <td>
                                                <a href="{{ route('pinjam.edit', $row->id) }}"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a href="{{ route('pinjam.show', $row->id) }}" class="btn btn-sm btn-info">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <form action="{{ route('pinjam.destroy', $row->id) }}" method="POST"
                                                    style="display: inline"
                                                    onsubmit="return confirm('Do you really want to delete {{ $row->name }}?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
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
    </section>
@endsection
