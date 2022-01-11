@extends('master.main')
@section('judul','Data KK')
@section('content')
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Data Kartu Keluarga</h4>
        <p class="text-muted page-title-alt">Data keluarga dapat dilihat atau di-export pada tabel di bawah ini</p>
    </div>
    <div class="col-sm-2">
        <br>
        <a href="kk/create" type="button" class="btn btn-default waves-effect waves-light">Tambah
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
                        <th>No KK</th>
                        <th>Kepala Keluarga</th>
                        <th>Alamat</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Keluarga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ( $kk as $kk)
                    <tr>
                        <td>{{ $kk->noKk }}</td>
                        <td>tes</td>
                        <td>{{ $kk->alamat }}</td>
                        <td>{{ $kk->RT }}</td>
                        <td>{{ $kk->RW }}</td>
                        <td>
                            <a href="/penduduk" type="button" class="btn btn-warning btn-custom waves-effect waves-light col-md-8">Keluarga</a>
                            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal">Full width Modal</button>
                        </td>
                        <td>
                            <a href="/kk/{{ $kk->noKk }}/edit" class="btn btn-icon waves-effect waves-light btn-primary col-md-5"> <i class="fa fa-wrench"></i></a>
                            <form action="/kk/{{ $kk->noKk }}" method="post" class="d-inline">
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

<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="full-width-modalLabel">Data Anggota Keluarga</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-9">

                        <p class="text-muted page-title-alt">Data anggota keluarga dapat dilihat pada tabel di bawah ini</p>
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


                            <table id="datatable-colvid" class="table table-striped table-bordered">

                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Status Hubungan</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>Kelamin</th>
                                        <th>Agama</th>
                                        <th>Pekerjaan</th>
                                        <th>Pendidikan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ( $penduduk as $penduduk)
                                    <tr>
                                        <td>{{ $penduduk->nik }}</td>
                                        <td>tes</td>
                                        <td>{{ $penduduk->nama }}</td>
                                        <td>{{ $penduduk->tempatLahir }}, {{ $penduduk->tanggalLahir }}</td>
                                        <td>{{ $penduduk->kelamin }}</td>
                                        <td>{{ $penduduk->agama }}</td>
                                        <td>{{ $penduduk->pekerjaan }}</td>
                                        <td>{{ $penduduk->pendidikan }}</td>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
