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
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-2 control-label">NIK</label>
                            <div class="col-md-10">
                                <input type="number"  class="form-control" placeholder="Masukkan NIK" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status Hubungan</label>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>Kepala Keluarga</option>
                                    <option>Suami</option>
                                    <option>Istri</option>
                                    <option>Anak</option>
                                    <option>Menantu</option>
                                    <option>Cucu</option>
                                    <option>Orang Tua</option>
                                    <option>Mertua</option>
                                    <option>Famili Lain</option>
                                    <option>Pembantu</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tempat Lahir</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tanggal Lahir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Agama</label>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>Islam</option>
                                    <option>Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Khonghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>Kawin</option>
                                    <option>Belum Kawin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Pekerjaan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Masukkan Pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Warga Negara</label>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>Warga Negara Indonesia</option>
                                    <option>Warga Negara Asing</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Pendidikan Terakhir</label>
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>TIDAK / BELUM SEKOLAH</option>
                                    <option>BELUM TAMAT SD / SEDERAJAT </option>
                                    <option>TAMAT SD / SEDERAJAT</option>
                                    <option>SLTP / SEDERAJAT</option>
                                    <option>SLTA / SEDERAJAT</option>
                                    <option>DIPLOMA I / II</option>
                                    <option>AKADEMI / DIPLOMA III / S. MUDA</option>
                                    <option>DIPLOMA IV/ STRATA I</option>
                                    <option>STRATA II</option>
                                    <option>STRATA III</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama Ayah</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Masukkan Nama Ayah" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama Ibu</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Masukkan Nama Ibu" required>
                            </div>
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                                Simpan
                            </button>
                            <button type="reset" class="btn btn-default btn-custom btn-rounded waves-effect waves-light m-l-5">
                                Hapus
                            </button>
                            <a href="/penduduk" type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
