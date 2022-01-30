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
        <a href="kk/create" type="button" class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Tambah
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
                        <th>Alamat</th>
                        <th>Jumlah Keluarga</th>
                        <th>Keluarga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ( $kk as $kk)
                    <tr>
                        <td>{{ $kk->noKk }} </td>
                        <td>{{ $kk->alamat }} RT.{{ $kk->RT }} RW.{{ $kk->RW }}</td>
                        <td>{{ count($kk->penduduk)}} Orang</td>

                        <td>
                            <a href="/penduduk/{{ $kk->noKk }}/keluarga" type="button" class="btn btn-warning btn-custom waves-effect waves-light col-md-8">Lihat</a>
                        </td>
                        <td>
                            <a href="/kk/{{ $kk->noKk }}/edit" class="btn btn-icon waves-effect waves-light btn-primary col-md-5"> <i class="fa fa-edit"></i></a>
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

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Tambahkan Data Kartu Keluarga</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">

                            <form data-parsley-validate method="POST" action="{{url('/kk')}}" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label for="noKk">No KK*</label>
                                    <input type="number" min="1111111111111111" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" name="noKk" parsley-trigger="change" required placeholder="Masukkan No KK" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat*</label>
                                    <input type="text" name="alamat" parsley-trigger="change" required placeholder="Masukkan Alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="rt">RT*</label>
                                    <input id="rt" name="RT" type="number" placeholder="Masukkan RT" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="rw">RW*</label>
                                    <input id="rw" name="RW" type="number" placeholder="Masukkan RT" required class="form-control">
                                </div>


                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                                        Simpan
                                    </button>
                                    <button type="reset" class="btn btn-default btn-custom btn-rounded waves-effect waves-light m-l-5">
                                        Hapus
                                    </button>
                                    <a href="/kk" type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                        Batal
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
@endsection
