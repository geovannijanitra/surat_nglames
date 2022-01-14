@extends('master.main')
@section('judul','Data Surat')
@section('content')
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Data Surat</h4>
        <p class="text-muted page-title-alt">Data Surat yang pernah dibuat dan dikeluarkan oleh kelurahan</p>
    </div>
    <div class="col-sm-2">
        <br>
        <a href="#" type="button" class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Tambah
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
                        <th>No Surat</th>
                        <th>Pemohon</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    <!-- @foreach ( $kk as $kk)
                    <tr>
                        <td>{{ $kk->noKk }}</td>
                        <td>{{ $kk->alamat }} RT.{{ $kk->RT }} RW.{{ $kk->RW }}</td>
                        <td>{{ count($kk->penduduk)}} Orang</td>

                        <td>
                            <a href="/penduduk/{{ $kk->noKk }}/keluarga" type="button" class="btn btn-warning btn-custom waves-effect waves-light col-md-8">Lihat</a>
                        </td>
                        <td>
                            <a href="/kk/{{ $kk->noKk }}/edit" class="btn btn-icon waves-effect waves-light btn-primary col-md-5"> <i class="fa fa-wrench"></i></a>
                            <form action="/kk/{{ $kk->noKk }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data ini?')" class="btn btn-icon waves-effect waves-light btn-danger col-md-5"> <i class="fa fa-trash"></i></button>
                            </form>
                        </td> -->
                    <!-- </tr> -->
                    <!-- @endforeach -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
