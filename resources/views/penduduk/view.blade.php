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
        <a href="/kk" type="button" class="btn btn-default btn-warning waves-effect waves-light">
            <span class="btn-label"><i class="fa fa-arrow-left"></i>
            </span>Kembali</a>
        <a href="create" type="button" class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal">Tambah
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
                        <th>TTL</th>
                        <th>Kelamin</th>
                        <th>Agama</th>
                        <th>Status</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ( $penduduk as $penduduk)
                    <tr>
                        <td>{{ $penduduk->nik }}</td>
                        <td>{{ $penduduk->statushubungan}}</td>
                        <td>{{ $penduduk->nama }}</td>
                        <td>{{ $penduduk->tempatLahir }}, {{ $penduduk->tanggalLahir }}</td>
                        <td>{{ $penduduk->kelamin }}</td>
                        <td>{{ $penduduk->agama }}</td>
                        <td>{{ $penduduk->status }}</td>
                        <td>{{ $penduduk->pekerjaan }}</td>
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

<div id="full-width-modal" data-animation="fadein" data-plugin="custommodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="full-width-modalLabel">Tambah Anggota Keluarga</h4>
            </div>
            <div class="modal-body">
                <form method="POST" class="form-horizontal" role="form" action="{{url('/penduduk')}}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">No KK</label>
                            <div class="col-md-10">
                                <input type="number" name="no_kk" class="form-control" placeholder="Masukkan NIK" readonly value={{ $kk->noKk }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">NIK</label>
                            <div class="col-md-10">
                                <input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama</label>
                            <div class="col-md-10">
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status Hubungan</label>
                            <div class="col-md-10">
                                <select class="form-control" name="statushubungan">
                                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                                    <option value="Suami">Suami</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Menantu">Menantu</option>
                                    <option value="Cucu">Cucu</option>
                                    <option value="Orang Tua">Orang Tua</option>
                                    <option value="Mertua">Mertua</option>
                                    <option value="Famili Lain">Famili Lain</option>
                                    <option value="Pembantu">Pembantu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tempat Lahir</label>
                            <div class="col-md-10">
                                <input type="text" name="tempatLahir" class="form-control" placeholder="Masukkan Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tanggal Lahir</label>
                            <div class="col-md-10">
                                <input type="date" class="form-control" name="tanggalLahir" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <select name="kelamin" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Agama</label>
                            <div class="col-md-10">
                                <select name="agama" class="form-control">
                                    <option value="islam">Islam</option>
                                    <option value="protestan">Protestan</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghuchu">Khonghuchu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <select name="status" class="form-control">
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Janda / Duda">Janda/Duda</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Pekerjaan</label>
                            <div class="col-md-10">
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Warga Negara</label>
                            <div class="col-md-10">
                                <select class="form-control" name="kewarganegaraan">
                                    <option value="WNI">Warga Negara Indonesia</option>
                                    <option value="WNA">Warga Negara Asing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Pendidikan Terakhir</label>
                            <div class="col-md-10">
                                <select class="form-control" name="pendidikan">
                                    <option value="belum sekolah">TIDAK / BELUM SEKOLAH</option>
                                    <option value="belum tamat SD">BELUM TAMAT SD / SEDERAJAT </option>
                                    <option value="tamat SD">TAMAT SD / SEDERAJAT</option>
                                    <option value="SMP">SLTP / SEDERAJAT</option>
                                    <option value="SMA">SLTA / SEDERAJAT</option>
                                    <option value="D1/D2">DIPLOMA I / II</option>
                                    <option value="D3">AKADEMI / DIPLOMA III / S. MUDA</option>
                                    <option value="D4/S1">DIPLOMA IV/ STRATA I</option>
                                    <option value="S2">STRATA II</option>
                                    <option value="S3">STRATA III</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama Ayah</label>
                            <div class="col-md-10">
                                <input type="text" name="namaAyah" class="form-control" placeholder="Masukkan Nama Ayah" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama Ibu</label>
                            <div class="col-md-10">
                                <input type="text" name="namaIbu" class="form-control" placeholder="Masukkan Nama Ibu" required>
                            </div>
                        </div>
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
