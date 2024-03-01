@extends('layouts.layout')
@section('content')
    <section class="section" style="margin: 3rem">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    @if (session('success'))
                        <div id="success-alert" class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    {{-- <div class="card-header">{{ __('Ini Table Anggota') }}</div> --}}
                    <div class="card-body">
                        <a href="{{ route('koleksi.create') }}" class="btn btn-sm btn-secondary">
                            Tambah Koleksi
                        </a>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Koleksi</th>
                                    <th scope="col">Judul Koleksi</th>
                                    <th scope="col">Jenis Koleksi</th>
                                    <th scope="col">Pengarang</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Edisi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach ($koleksis as $row)
                                    <?php $no++; ?>
                                    <tr>
                                        <th scope="row">{{ $no }}</th>
                                        <td>{{ $row->kd_koleksi }}</td>
                                        <td>{{ $row->judul }}</td>
                                        <td>{{ $row->jns_koleksi }}</td>
                                        <td>{{ $row->pengarang }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td>{{ $row->edisi }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>
                                            <a href="{{ route('koleksi.edit', $row->id) }}" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="{{ route('koleksi.show', $row->id) }}" class="btn btn-sm btn-info">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <form action="{{ route('koleksi.destroy', $row->id) }}" method="POST"
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
    </section>
    <script>
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 3000); // Waktu dalam milidetik (di sini 3 detik)
    </script>
@endsection
