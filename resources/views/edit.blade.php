{{-- @extends('layouts.main')
@section("container")
<div class="col-lg-4">
    @if (session('success'))
    <div class="alert-success">
        <p>{{session('success')}}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert-danger">
        <p>{{session('success')}}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <h1>Edit Data Buku</h1>
	<a href="/book" type="button" class="btn btn-dark">Kembali</a>
	
	<br/>
	<br/>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<form action="/update/{{ $book->id }}" method="post" enctype="multipart/form-data">
							@csrf	
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Judul</label>
								<input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Buku" value="{{ $book->$judul }}">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Penulis</label>
								<input name="penulis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Penulis Buku" value="{{ $book->$penulis }}">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Sinopsis</label>
								<textarea name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $book->$sinopsis }}"></textarea>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Penerbit</label>
								<input name="penerbit" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Penerbit Buku" value="{{ $book->$penerbit }}">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Tebal Halaman</label>
								<input name="banyak_halaman" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tebal Halaman Buku" value="{{ $book->$banyak_halaman }}">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Kelebihan</label>
								<textarea name="kelebihan" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $book->$kelebihan }}"></textarea>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Kekurangan</label>
								<textarea name="kekurangan" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $book->$judul }}"kekurangan></textarea>
							</div><br>
							<button type="submit" class="btn btn-dark">Tambah</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
    
</div>
@endsection