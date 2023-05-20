@extends('dashboard.layouts.main')

@section('container')

<div class="main-content khusus">
		<div class="konten khusus2">
			<div class="konten_dalem khusus3 mt-5">

            <h1>Edit Mitra</h1>


            <div class="container">
                <form action="/dashboard/mitra/{{ $mitra->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-25">
                            <label for="name">Nama</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="name" name="name" required value="{{ old('name', $mitra->name) }}" placeholder="Namamu..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $mitra->alamat) }}" placeholder="Alamatmu..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="golongan">Golongan</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="golongan" name="golongan" value="{{ old('golongan', $mitra->golongan) }}" placeholder="Golongan..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="nama_rek">Nama Rekening</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="nama_rek" name="nama_rek" required value="{{ old('nama_rek', $mitra->nama_rek) }}" placeholder="Nama dalam Rekeningmu..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                                <label for="bank_id">Nama Bank</label>
                            </div>
                            <div class="col-75">
                                <select id="bank_id" name="bank_id">
                                    @foreach ($banks as $bank)
                                        @if (old('bank_id') == $bank->id)
                                            <option value="{{ $bank->id }} selected">{{ $bank->name }}</option>
                                        @else
                                            <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="nomor_rek">Nomor Rekening</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="nomor_rek" name="nomor_rek" required value="{{ old('nomor_rek', $mitra->nomor_rek) }}" placeholder="Nomor Rekeningmu..">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>

		</div>
	</div>
</div>
    @endsection