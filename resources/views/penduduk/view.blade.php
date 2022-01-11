@extends('master.main')
@section('judul','Data Keluarga')
@section('content')
<div class="row">
    <div class="col-sm-9">
        <h4 class="page-title">Data Keluarga</h4>
        <p class="text-muted page-title-alt">Data keluarga dapat dilihat atau di-export pada tabel di bawah ini</p>
    </div>
    <div class="col-sm-3">
        <br>
        <a href="kk" type="button" class="btn btn-default btn-warning waves-effect waves-light">
            <span class="btn-label"><i class="fa fa-arrow-left"></i>
            </span>Kembali</a>
        <a href="penduduk/create" type="button" class="btn btn-default waves-effect waves-light">Tambah
            <span class="btn-label btn-label-right"><i class="fa fa-plus"></i>
            </span>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">


            <table id="datatable-buttons" class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Status Hubungan</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelamin</th>
                        <th>Agama</th>
                        <th>Status</th>
                        <th>Pekerjaan</th>
                        <th>Kewarganegaraan</th>
                        <th>Pendidikan</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ( $penduduk as $penduduk)
                    <tr>
                        <td>{{ $penduduk->nik }}</td>
                        <td>tes</td>
                        <td>{{ $penduduk->nama }}</td>
                        <td>{{ $penduduk->tempatLahir }}</td>
                        <td>{{ $penduduk->tanggalLahir }}</td>
                        <td>{{ $penduduk->kelamin }}</td>
                        <td>{{ $penduduk->agama }}</td>
                        <td>{{ $penduduk->status }}</td>
                        <td>{{ $penduduk->pekerjaan }}</td>
                        <td>{{ $penduduk->kewarganegaraan }}</td>
                        <td>{{ $penduduk->pendidikan }}</td>
                        <td>{{ $penduduk->namaAyah }}</td>
                        <td>{{ $penduduk->namaIbu }}</td>
                        <!-- <td>
                            <button type="button" class="btn btn-warning btn-custom waves-effect waves-light col-md-8">Keluarga</button>

                        </td> -->
                        <td>
                            <a href="/penduduk/{{ $penduduk->nik }}/edit" class="btn btn-icon waves-effect waves-light btn-primary col-md-5"> <i class="fa fa-wrench"></i></a>
                            <form action="/penduduk/{{ $penduduk->nik }}" method="post" class="d-inline">
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
