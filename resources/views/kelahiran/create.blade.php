@extends('master.main')
@section('judul','Tambah Data Surat Kelahiran')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Surat Keterangan Kelahiran</b></h4>
            <p class="text-muted font-13 m-b-30">
                Masukkan data
            </p>
            <form data-parsley-validate method="POST" action="{{url('/kelahiran')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="col-md-6">
                    <div  class="form-group">
                        <label for="noSurat">Jenis Surat</label>
                        <input id="jenis" name="jenis" type="text" placeholder="Nomor Surat" required
                            class="form-control" disabled value="Surat Keterangan Kelahiran">
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
                        <input id="noSurat" name="noSurat" type="text" placeholder="Nomor Surat" required
                            class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Saksi 1</label>
                            <select name="saksi1" id="saksi1" class="form-control select2">
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
                            <select name="saksi2" id="saksi2" class="form-control select2">
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
                            <label for="keperluan">Ayah</label>
                            <select class="form-control select2" placeholder="Nama Ayah" required id="ayah" name="ayah">
                            <option value="" disabled selected>Pilih Ayah </option>
                            @foreach ($ayah as $ayah)
                            <option value="{{ $ayah->nik }}">{{ $ayah->nik}} - {{ $ayah->nama }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Ibu</label>
                            <select class="form-control select2" placeholder="Nama Ibu" required id="ibu" name="ibu">
                                <option value="" disabled selected>Pilih Ibu </option>
                                @foreach ($ibu as $ibu)
                                <option value="{{ $ibu->nik }}">{{ $ibu->nik}} - {{ $ibu->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Tanggal Perkawinan </label>
                        <input id="tanggalPerkawinan" name="tanggalPerkawinan" type="date" placeholder="Masukkan Tanggal Perkawinan" required
                        class="form-control">
                    </div>
                    {{-- <div class="form-group">
                        <label class="control-label">Nama Anak</label>
                        <select class="form-control select2" placeholder="Nama" required id="nik" name="nik">
                        <option value="" disabled selected> Pilih nama penduduk </option>
                            @foreach ($penduduk as $pndk)
                            <option value="{{ $pndk->nik }}">{{ $pndk->nik}} - {{ $pndk->nama }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="noSurat">Nama Anak </label>
                        <input id="namaAnak" name="namaAnak" type="text" placeholder="Masukkan Nama Anak" required
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="noSurat">Tempat Kelahiran </label>
                        <input id="tempatKelahiran" name="tempatKelahiran" type="text" placeholder="Masukkan Tempat Kelahiran" required
                        class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Jenis Kelamin Anak</label>
                            <select name="kelaminAnak" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Jenis Kelamin Anak</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Tempat Dilahirkan</label>
                            <select name="tempatDilahirkan" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Yang Menerangkan</option>
                                <option value="RS/RB">RS/RB</option>
                                <option value="Puskesmas">Puskesmas</option>
                                <option value="Polindes">Polindes</option>
                                <option value="Rumah">Rumah</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keperluan">Hari Kelahiran </label>
                            <select name="hariLahirAnak" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Hari Lahir Anak</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Juma'at">Juma'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keperluan">Tanggal Lahir</label>
                            <input id="tanggalLahirAnak" name="tanggalLahirAnak" type="date" required
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keperluan">Pukul Kelahiran</label>
                            <input id="pukulKelahiran" name="pukulKelahiran" type="time" required
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keperluan">Jenis Kelahiran </label>
                            <select name="jenisKelahiran" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Jenis Kelahiran</option>
                                <option value="Tunggal">Tunggal</option>
                                <option value="Kembar 2">Kembar 2</option>
                                <option value="Kembar 3">Kembar 3</option>
                                <option value="Kembar 4">Kembar 4</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keperluan">Penolong Kelahiran</label>
                            <select name="penolongKelahiran" class="form-control select2" required>
                                <option value="" disabled selected>Pilih Jenis Kelahiran</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Bidan/Perawat">Bidan/Perawat</option>
                                <option value="Dukun">Dukun</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keperluan">Kelahiran ke</label>
                            <input id="kelahiranKe" name="kelahiranKe" type="number" required
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Berat Anak</label>
                            <input id="beratBayi" name="beratBayi" type="number" required
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Panjang Anak</label>
                            <input id="panjangBayi" name="panjangBayi" type="number" required
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="m-t-0 header-title" align="center" ><h4><b>---------------------------------------------------------------------------------------------  Data Pelapor  ---------------------------------------------------------------------------------------------</b></h4></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="noSurat">NIK Pelapor</label>
                            <input min="1111111111111111" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" id="nikPelapor" name="nikPelapor" type="number" placeholder="Masukkan NIK Pelapor"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Nama Pelapor</label>
                            <input id="namaPelapor" name="namaPelapor" type="text" placeholder="Masukkan Nama Pelapor" required
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="noSurat">Alamat Pelapor</label>
                            <input id="alamatPelapor" name="alamatPelapor" type="text" placeholder="Masukkan Alamat Pelapor"
                                class="form-control">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="noSurat">Tanggal Lahir Pelapor</label>
                                <input id="tanggalLahirPelapor" name="tanggalLahirPelapor" type="date" placeholder="Masukkan NIK Ibu Jenazah"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="noSurat">Pekerjaan Pelapor</label>
                                <input id="pekerjaanPelapor" name="pekerjaanPelapor" type="text" placeholder="Masukkan Pekerjaan Pelapor" required
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12">
                    <div class="m-t-0 header-title" align="center" ><h4><b>-------------------------------------------------------------------------------------  Data Orang Tua Jenazah  -------------------------------------------------------------------------------------</b></h4></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="noSurat">NIK Ayah</label>
                            <input id="nikAyah" name="nikAyah" type="number" placeholder="Masukkan NIK Ayah Jenazah"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Nama Ayah</label>
                            <input id="namaAyah" name="namaAyah" type="text" placeholder="Masukkan Nama Ayah Jenazah" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Tanggal Lahir Ayah</label>
                            <input id="tanggalLahirAyah" name="tanggalLahirAyah" type="date" placeholder="dd/mm/yyyy"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Pekerjaan Ayah</label>
                            <input id="pekerjaanAyah" name="pekerjaanAyah" type="text" placeholder="Masukkan Pekerjaan Ayah Jenazah"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Alamat Ayah</label>
                            <input id="alamatAyah" name="alamatAyah" type="text" placeholder="Masukkan Alamat Ayah Jenazah"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="noSurat">NIK Ibu</label>
                            <input id="nikIbu" name="nikIbu" type="text" placeholder="Masukkan NIK Ibu Jenazah"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Nama Ibu</label>
                            <input id="namaIbu" name="namaIbu" type="text" placeholder="Masukkan Nama Ibu Jenazah" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Tanggal Lahir Ibu</label>
                            <input id="tanggalLahirIbu" name="tanggalLahirIbu" type="date" placeholder="dd/mm/yyyy"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Pekerjaan Ibu</label>
                            <input id="pekerjaanIbu" name="pekerjaanIbu" type="text" placeholder="Masukkan Pekerjaan Ibu"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Alamat Ibu</label>
                            <input id="alamatIbu" name="alamatIbu" type="text" placeholder="Masukkan Alamat Ibu Jenazah"
                                class="form-control">
                        </div>
                    </div>
                </div> --}}
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                        Simpan
                    </button>
                    <a href="/kelahiran" type="button" class="btn btn-warning btn-custom btn-rounded waves-effect waves-light">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
