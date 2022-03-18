<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<title>Tambah Buku</title>
</head>
<body>

		<div class="container">
			<div class="row justify-content-center">
				<div class="">
				<h1 class="text-center mb-4">Tambah Data Buku</h1>
				<center><a href="/book" type="button" class="btn btn-dark">Kembali</a></center>
				<br/><br/>
					<div class="card">
						<div class="card-body">
							<form action="{{url('book')}}" method="post" enctype="multipart/form-data">
							@csrf	
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Judul</label>
								<input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Buku">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Penulis</label>
								<input name="penulis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Penulis Buku">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Sinopsis</label>
								<textarea name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Penerbit</label>
								<input name="penerbit" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Penerbit Buku">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Tebal Halaman</label>
								<input name="banyak_halaman" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tebal Halaman Buku">
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Kelebihan</label>
								<textarea name="kelebihan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div><br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Kekurangan</label>
								<textarea name="kekurangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div><br>
								<button type="submit" class="btn btn-dark">Tambah</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

</body>
</html>