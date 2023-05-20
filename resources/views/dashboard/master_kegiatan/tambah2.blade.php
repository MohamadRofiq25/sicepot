@extends('dashboard.layouts.main')

@section('container')
<div class="main-content khusus">
		<div class="konten khusus2">
			<div class="konten_dalem khusus3 mt-5">

            <h1>Tambah Kegiatan</h1>


            <div class="container">
                <form action="/dashboard/master_kegiatan" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-25">
                            <label for="bulan">Bulan</label>
                        </div>
                        <div class="col-75">
                            <input class="form-control-sm" type="text" id="bulan" name="bulan" required placeholder="ex: Januari 2023"
                                value="{{ old('bulan') }}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="mitra_id">Mitra</label>
                        </div>
                        <div class="col-75">
                            <select id="mitra_id" name="mitra_id" class="form-select" aria-label="Default select example" required>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="kegiatan_id">Kegiatan</label>
                        </div>
                        <div class="col-75">
                            <select id="kegiatan_id" name="kegiatan_id" class="form-select" aria-label="Default select example" required>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="mulai">Mulai Kegiatan</label>
                        </div>
                        <div class="col-75">
                        <input type="date" id="mulai" name="mulai" required value="{{ old('mulai') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="selesai">Selesai Kegiatan</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="selesai" name="selesai" required value="{{ old('selesai') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="volume">Volume Kegiatan</label>
                        </div>
                        <div class="col-75">
                        <input type="number" id="volume" name="volume" required placeholder="Volume..."
                                value="{{ old('volume') }}">
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#mitra_id").select2({
                placeholder: 'Pilih Mitra',
                ajax: {
                    url: "{{ route('mitra.index') }}",
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.id,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });

            $("#kegiatan_id").select2({
                placeholder: 'Pilih Kegiatan',
                ajax: {
                    url: "{{ route('kegiatan.index') }}",
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.id,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
        })
    </script>

    @endsection