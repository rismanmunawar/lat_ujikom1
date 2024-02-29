@extends('layouts.layout')
@section('content')
    <section class="section" style="margin: 3rem">
        <div class="row" id="table-responsive">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Peminjaman</h5>
                    </div>
                    <div class="card-content">
                        <!-- table responsive -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Kode Anggota</th>
                                        <th>No. Pinjam</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Tgl Kembali</th>
                                        <th>Judul</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
