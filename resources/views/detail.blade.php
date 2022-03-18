<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<title>Detail Buku</title>
</head>
<body>

		<div class="container">
			<div class="row justify-content-center">
				<div class="">
				<h1 class="text-center mb-4">Detail Buku</h1>
				<center><a href="/book" type="button" class="btn btn-dark">Kembali</a></center>
				<br/><br/>
					<div class="card">
						<div class="card-body">
                            @foreach ($books as $row) <!--untuk menampilkan data-->
							@csrf	
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Judul</label>
                                <p>{{ $row->judul }}</p>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Penulis</label>
                                <p>{{ $row->penulis }}</p>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Sinopsis</label>
                                <p>{{ $row->sinopsis }}</p>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                                <p>{{ $row->penerbit }}</p>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Tebal Halaman</label>
                                <p>{{ $row->banyak_halaman }}</p>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Kelebihan</label>
                                <p>{{ $row->kelebihan }}</p>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Kekurangan</label>
                                <p>{{ $row->kekurangan }}</p>
							</div>
                            @endforeach
                        </div>
					</div>
				</div>
			</div>
		</div>
		

</body>
</html>