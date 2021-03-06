@extends('master.main')
@section('judul','Tambah Data Keluarga')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Data Anggota Keluarga</b></h4>
            <p class="text-muted m-b-30 font-13">
                Masukkan data
            </p>


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
                            <input min="1111111111111111" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" required>
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
                            <input placeholder="dd/mm/yyyy" type="date" class="form-control" name="tanggalLahir">
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
    </div>
</div>
@endsection
