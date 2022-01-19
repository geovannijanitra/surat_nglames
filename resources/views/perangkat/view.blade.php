@extends('master.main')
@section('judul','Data Perangkat Desa')
@section('content')
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Data Perangkat Desa</h4>
        <p class="text-muted page-title-alt">Data perangkat desa dapat dilihat atau di-export pada tabel di bawah ini</p>
    </div>
    <div class="col-sm-2">
        <br>
        <a href="perangkat/create" type="button" class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Tambah
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
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th>Detail</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ( $perangkat as $perangkat)
                    <tr>
                        <td>{{ $perangkat->nama }}</td>
                        <td>{{ $perangkat->tanggalLahir }}</td>
                        <td>{{ $perangkat->jabatan }}</td>
                        <td>{{ $perangkat->detail }}</td>
                        <td>{{ $perangkat->alamat }}</td>

                        <td>
                            <a href="/perangkat/{{ $perangkat->idPerangkat }}/edit" class="btn btn-icon waves-effect waves-light btn-primary col-md-5"> <i class="fa fa-edit"></i></a>
                            <form action="/perangkat/{{ $perangkat->idPerangkat }}" method="post" class="d-inline">
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
                <h4 class="modal-title">Tambahkan Data Perangkat Desa</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">

                            <form data-parsley-validate method="POST" action="{{url('/perangkat')}}" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama*</label>
                                    <input type="text" name="nama" parsley-trigger="change" required placeholder="Masukkan Nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tanggalLahir">Tanggal Lahir*</label>
                                    <input type="date" name="tanggalLahir" parsley-trigger="change" required placeholder="dd/mm/yyyy" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for='jabatan'>Jabatan*</label>
                                    <select name="jabatan" class="form-control">
                                        <option value="Pejabat Kelurahan">Pejabat Kelurahan</option>
                                        <option value="Ketua RT atau RW">Ketua RT atau RW</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="detail">Detail*</label>
                                    <input id="detail" name="detail" type="text" placeholder="Masukkan Detail Jabatan" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat*</label>
                                    <input id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat" required class="form-control">
                                </div>


                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                                        Simpan
                                    </button>
                                    <button type="reset" class="btn btn-default btn-custom btn-rounded waves-effect waves-light m-l-5">
                                        Hapus
                                    </button>
                                    <a href="/perangkat" type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
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
