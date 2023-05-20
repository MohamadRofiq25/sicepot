@extends('dashboard.layouts.main')

@section('container')
<div class="main-content khusus">
		<div class="konten khusus2">
			<div class="konten_dalem khusus3 mt-5">
					<h2 class="heade" style="color: #4b4f58;">Master Kegiatan</h2>
					<hr style="margin-top: -2px;">
					
					<!-- bagian isi tabel -->
					<div class="headline">
						<h5>master Kegiatan</h5>
					</div>
                
                @if (session()->has('success'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="container" id="container">

        <div class="row">
            
                <div class="col-md-2">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Bulan</option>
                        <option value="1">Januari 2023</option>
                        <option value="2">Februari 2023</option>
                        <option value="3">Maret 2023</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <form action="/dashboard/master_kegiatan/daftar">
                                <select id="kegiatan_id" name="kegiatan_id" class="form-select"
                                    aria-label="Default select example" required>
                                </select>
                    </form>
                </div>

                <div class="col-md-3">
                    <form action="/dashboard/master_kegiatan/daftar">
                        <select id="mitra_id" name="mitra_id" class="form-select" aria-label="Default select example" required>
                        </select>
                    </form>
                </div>
                <div class="col">
                <button class="btn btn-primary btn2" type="submit"><i class="fa-solid fa-magnifying-glass"></i>  Search</button>
                </div>

            <div class="col">
                <button type="button" class="btn btn-success btn2" data-toggle="modal" data-target="#exampleModalCenter">
                <a class="text-white" style="text-decoration: none;"href="/dashboard/master_kegiatan/tambah"> <i class="fa-solid fa-circle-plus"></i> Tambah </a>
                </button>
            </div>
        </div>

            <div class="row tampil" id="row">
				<div class="col-md-12">
					<div class="table-responsive">
            <table class="table table-sm table-hover table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Bulan Kegiatan</th>
                        <th>Mitra</th>
                        <th>Uraian Kegiatan</th>
                        <th>Tgl Mulai</th>
                        <th>Tgl Selesai</th>
                        <th>Volume</th>
                        <th>Harga Satuan</th>
                        <th>Nilai Perjanjian</th>

                        <th colspan="2">Actions</th>
                    </tr>

                @foreach ($master_kegiatans as $key => $master_kegiatan)
                    <tr>
                        <td style="text-align: center;">{{ $master_kegiatans->firstItem() + $key }}</td>
                        <td>{{ $master_kegiatan->bulan }}</td>
                        <td>{{ $master_kegiatan->mitra->name }}</td>
                        <td>{{ $master_kegiatan->kegiatan->name }}</td>
                        <td>{{ $master_kegiatan->mulai }}</td>
                        <td>{{ $master_kegiatan->selesai }}</td>
                        <td>{{ $master_kegiatan->volume }}</td>
                        <td>@currency($master_kegiatan->kegiatan->harga)</td>
                        <td>@currency($master_kegiatan->volume * $master_kegiatan->kegiatan->harga)</td>
                        <td>
                            <a href="/dashboard/master_kegiatan/{{ $master_kegiatan->id }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/master_kegiatan/{{ $master_kegiatan->id }}" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
                                            data-feather="trash-2"></i></span></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
            </div>
                </div>
            </div>
        </div>
					<!-- bagian isi tabel -->	
		</div>
	</div>
            <div class="page-nav d-flex justify-content-center">
                {{ $master_kegiatans->links() }}
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
