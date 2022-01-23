@extends('master.main')
@section('judul','Rekapitulasi Data Penduduk')
@section('content')
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Rekapitulasi Penduduk</h4>
        <p class="text-muted page-title-alt">Data Rekapitulasi penduduk dapat dilihat pada tabel dibawah ini</p>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>TTL</th>
                        <th>Agama</th>
                        <th>Pendidikan</th>
                        <th>Alamat</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ( $penduduk as $penduduk)
                    <tr>
                        <td>{{ $penduduk->nama }}</td>
                        <td>{{ $penduduk->nik }}</td>
                        <td>{{ $penduduk->kelamin }}</td>
                        <td>{{ $penduduk->tempatLahir }} - {{ $penduduk->tanggalLahir }}</td>
                        <td>{{ $penduduk->agama }}</td>
                        <td>{{ $penduduk->pendidikan }}</td>
                        <td>{{ $penduduk->kk['alamat'] }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
