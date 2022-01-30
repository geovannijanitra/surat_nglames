@extends('master.main')
@section('judul','Data Surat Keterangan Kelahiran')
@section('content')
{{-- header --}}
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Data Surat Keterangan Kelahiran</h4>
        <p class="text-muted page-title-alt">Data Surat Keterangan Kelahiran dapat ditambahkan dan dilihat pada tabel di bawah ini</p>
    </div>
    <div class="col-sm-2">
        <br>
        <a href="kelahiran/create" type="button" class="btn btn-default waves-effect waves-light">Tambah
            <span class="btn-label btn-label-right"><i class="fa fa-plus"></i>
            </span>
        </a>
    </div>
</div>
{{-- add --}}

{{-- table --}}
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Nama Anak</th>
                        <th>Ayah</th>
                        <th>Ibu</th>
                        <th>Pelapor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $kelahiran as $kelahiran)
                    <tr>
                        <td>{{ $kelahiran->noSurat }}</td>
                        <td>{{ $kelahiran->tanggalSurat }}</td>
                        <td>{{ $kelahiran->namaAnak }}</td>
                        <td>{{ $kelahiran->detailAyah['nama']}}</td>
                        <td>{{ $kelahiran->detailIbu['nama']}}</td>
                        <td>{{ $kelahiran->namaPelapor }}</td>
                        <td>
                            <a href="/kelahiran/{{ $kelahiran->idKelahiran }}/printKelahiran" class="btn btn-icon waves-effect waves-light btn-warning col-md-5"> <i class="md md-print"></i></a>
                            <form action="/kelahiran/{{ $kelahiran->idKelahiran
                             }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data ini?')" class="btn btn-icon waves-effect waves-light btn-danger col-md-5"> <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
