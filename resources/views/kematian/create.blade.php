@extends('master.main')
@section('judul','Tambah Data Surat Kematian')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Surat Keterangan Kematian</b></h4>
            <p class="text-muted font-13 m-b-30">
                Masukkan data
            </p>
            <form data-parsley-validate method="POST" action="{{url('/pindah')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="col-md-6">
                    <div  class="form-group">
                        <label for="noSurat">Jenis Surat</label>
                        <input id="jenis" name="jenis" type="text" placeholder="Nomor Surat" required
                            class="form-control" disabled value="Surat Keterangan Kematian">
                    </div>
                    <div class="form-group">
                        <label class="control-label">NIK - Nama Jenazah</label>
                        <select class="form-control select2" placeholder="Nama" required id="nik" name="nik">
                        <option value="" disabled selected> Pilih nama penduduk </option>
                            @foreach ($penduduk as $pndk)
                            <option value="{{ $pndk->nik }}">{{ $pndk->nik}} - {{ $pndk->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="control-label">Pejabat Kelurahan (Yang bertanda tangan)</label>
                        <select name="tandatangan" id="tandatangan" class="form-control select2">
                            <option value="" disabled selected> Pilih orang yang bertanda tangan </option>
                            @foreach ($perangkat as $perangkat)
                            <option value="{{ $perangkat->idPerangkat }}">{{ $perangkat->detail}} - {{ $perangkat->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="noSurat">No Surat</label>
                        <input id="noSurat" name="noSurat" type="number" placeholder="Nomor Surat" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">NIK Ayah</label>
                        <input id="nikAyah" name="nikAyah" type="number" placeholder="Masukkan NIK Ayah Jenazah" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Nama Ayah</label>
                        <input id="namaAyah" name="namaAyah" type="text" placeholder="Masukkan Nama Ayah Jenazah" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Tanggal Lahir Ayah</label>
                        <input id="tanggalLahirAyah" name="tanggalLahirAyah" type="date" placeholder="dd/mm/yyyy" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Pekerjaan Ayah</label>
                        <input id="pekerjaanAyah" name="pekerjaanAyah" type="text" placeholder="Masukkan Pekerjaan Ayah Jenazah" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Alamat Ayah</label>
                        <input id="alamatAyah" name="alamatAyah" type="text" placeholder="Masukkan Alamat Ayah Jenazah" required
                            class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Saksi 1</label>
                            <select name="tandatangan" id="tandatangan" class="form-control select2">
                            <option value="" disabled selected> Pilih Saksi </option>
                            @foreach ($rt as $rt)
                            <option value="{{ $rt->idPerangkat }}">{{ $rt->detail}} - {{ $rt->nama }}
                            </option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Saksi 2</label>
                            <select name="tandatangan" id="tandatangan" class="form-control select2">
                            <option value="" disabled selected> Pilih Saksi</option>
                            @foreach ($rt2 as $rt2)
                            <option value="{{ $rt2->idPerangkat }}">{{ $rt2->detail}} - {{ $rt2->nama }}
                            </option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Sebab Kematian</label>
                            <input id="alasan" name="alasan" type="text" placeholder="Masukkan Sebab Kematian" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Yang Menerangkan</label>
                            <select name="yangMenerangkan" class="form-control select2">
                                <option value="" disabled selected>Pilih Yang Menerangkan</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
                                <option value="Kepolisian">Kepolisian</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Tanggal Kematian </label>
                            <input id="tanggalKematian" name="tanggalKematian" type="date" placeholder="dd/mm/yyyy" required
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Pukul Kematian</label>
                            <input id="pukulKematian" name="pukulKematian" type="time" required
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Tempat Kematian</label>
                        <input id="tempatKematian" name="tempatKematian" type="text" placeholder="Masukkan Tempat Kematian" required
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">NIK Ibu</label>
                        <input id="nikIbu" name="nikIbu" type="text" placeholder="Masukkan NIK Ibu Jenazah" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Nama Ibu</label>
                        <input id="namaIbu" name="namaIbu" type="text" placeholder="Masukkan Nama Ibu Jenazah" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Tanggal Lahir Ibu</label>
                        <input id="tanggalLahirIbu" name="tanggalLahirIbu" type="date" placeholder="dd/mm/yyyy" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Pekerjaan Ibu</label>
                        <input id="pekerjaanIbu" name="pekerjaanIbu" type="text" placeholder="Masukkan Pekerjaan Ibu" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Alamat Ibu</label>
                        <input id="alamatIbu" name="alamatIbu" type="text" placeholder="Masukkan Alamat Ibu Jenazah" required
                            class="form-control">
                    </div>
                </div>
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                        Simpan
                    </button>
                    <a href="/kematian" type="button" class="btn btn-warning btn-custom btn-rounded waves-effect waves-light">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
