@extends('master.main')
@section('judul','Tambah Data Surat Keterangan Pindah')
@section('content')
{{-- header --}}
<div class="row">
    <div class="col-sm-10">
        <h4 class="page-title">Tambah Data Surat Keterangan Pindah</h4>
        <p class="text-muted page-title-alt">Masukkan Data</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <form data-parsley-validate method="POST" action="{{url('/pindah')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="col-md-6">
                    <div  class="form-group">
                        <label for="noSurat">Jenis Surat</label>
                        <input id="jenis" name="jenis" type="text" placeholder="Nomor Surat" required
                            class="form-control" disabled value="Surat Keterangan Pindah">
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
                    <div class="form-group">
                        <label class="control-label">NIK - Nama</label>
                        <select class="form-control select2" placeholder="Nama" required id="nik" name="nik">
                        <option value="" disabled selected> Pilih nama penduduk </option>
                            @foreach ($penduduk as $pndk)
                            <option value="{{ $pndk->nik }}">{{ $pndk->nik}} - {{ $pndk->nama }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keperluan">Alasan Pindah</label>
                        <input id="alasan" name="alasan" type="text" placeholder="Masukkan Alasan Pindah" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Tanggal Pindah</label>
                        <input id="tanggalPindah" name="tanggalPindah" type="date" placeholder="Masukkan Tanggal Pindahan" required
                            class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keperluan">Pindah ke Desa/Kelurahan</label>
                            <input id="desaKe" name="desaKe" type="text" placeholder="Masukkan Desa/Kelurahan Pindahan" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Pindah ke Kecamatan</label>
                            <input id="kecamatanKe" name="kecamatanKe" type="text" placeholder="Masukkan Kecamatan Pindahan" required
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="keperluan">Pindah ke Kabupaten/Kota</label>
                            <input id="kotaKe" name="kotaKe" type="text" placeholder="Masukkan Kabupaten/Kota Pindahan" required
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Pindah ke Propinsi</label>
                            <input id="propinsiKe" name="propinsiKe" type="text" placeholder="Masukkan Propinsi Pindahan" required
                                class="form-control">
                        </div>

                    </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                <div class="child-repeater-table table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Status</th>
                                <th>Pendidikan</th>
                                <th>NIK</th>
                                <th>Ket</th>
                                <th><a href="javascript:void(0)" class="btn btn-default addRow2"><i class="fa fa-plus"></i></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><input name="nomer[]" id="nomer[]" type="string" class="form-control col-lg-3" placeholder='No' > </td>
                                <td><input name="nama[]" id="nama[]" type="text" class="form-control col-lg-3" placeholder='Nama'> </td>
                                <td><input name="kelamin[]" id="kelamin[]" type="text" class="form-control col-lg-3" placeholder='Jenis Kelamin'> </td>
                                <td><input name="umurpengikut[]" id="umurpengikut[]" type="text" class="form-control col-lg-3" placeholder='Umur'> </td>
                                <td><input name="status[]" id="status[]" type="text" class="form-control col-lg-3" placeholder='Status Perkawinan'> </td>
                                <td><input name="pendidikan[]" id="pendidikan[]" type="text" class="form-control col-lg-3" placeholder='Pendidikan Terakhir'> </td>
                                <td><input name="nikpengikut[]" id="nikpengikut[]" type="string" class="form-control col-lg-3" placeholder='NIK'> </td>
                                <td><input name="ket[]" id="ket[]" type="text" class="form-control col-lg-3" placeholder='Keterangan'> </td>
                                {{-- <td><input name="progres[]" id="progres[]" type="number" class="form-control col-lg-3" placeholder="%"> </td>
                                <td><input type="text" id="tahapan[]" name="tahapan[]" class="form-control" placeholder="Tahapan"></td> --}}
                                <th><a href="javascript:void(0)" class="btn btn-danger deleteRow2"><i class="fa fa-minus"></i></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                </div>
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                        Simpan
                    </button>
                    <a href="/pindah" type="button" class="btn btn-warning btn-custom btn-rounded waves-effect waves-light">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
