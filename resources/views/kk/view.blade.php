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
                        <th>Tambah Penduduk</th>
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
                            <button type="button" class="btn btn-warning btn-custom waves-effect waves-light col-md-8">Tambah Penduduk</button>

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
@endsection
