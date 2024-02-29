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
                        <a href="{{ route('anggota.create') }}" class="btn btn-sm btn-secondary">
                            Tambah Anggota
                        </a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Anggota</th>
                                    <th scope="col">Nama Anggota</th>
                                    <th scope="col">Jk</th>
                                    <th scope="col">Tmpt Lahir</th>
                                    <th scope="col">Tgl Lahir</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Jns Anggota</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Jml Pinjam</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                @foreach ($anggotas as $row)
                                    <?php $no++; ?>
                                    <tr>
                                        <th scope="row">{{ $no }}</th>
                                        <td>{{ $row->kd_anggota }}</td>
                                        <td>{{ $row->nm_anggota }}</td>
                                        <td>{{ $row->jk }}</td>
                                        <td>{{ $row->tp_lahir }}</td>
                                        <td>{{ $row->tg_lahir }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->no_hp }}</td>
                                        <td>{{ $row->jns_anggota }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>{{ $row->jml_pjm }}</td>
                                        <td>
                                            <a href="{{ route('anggota.edit', $row->id) }}" class="btn btn-sm btn-warning">
                                                Edit
                                            </a>
                                            <form action="{{ route('anggota.destroy', $row->id) }}" method="POST"
                                                style="display: inline"
                                                onsubmit="return confirm('Do you really want to delete {{ $row->name }}?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><span
                                                        class="text-muted">
                                                        Delete
                                                    </span></button>
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
