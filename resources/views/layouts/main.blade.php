<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootsrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Daftar Buku Perpustakaan</title>
    </head>

    <body>
        
        <br>
        <h1 class="text-center mb-4">Daftar Buku</h1>

        @yield('container') <!-- container berfungsi untuk memposisikan isi body/div/lainnya ke tengah-->
        
        <div class="container">
        <a href="/tambah" class="btn btn-dark">Tambah +</a><br><br>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($books as $row) <!--untuk menampilkan data-->
                  <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->penulis }}</td>
                    <td>
                        <a href="/detail/{{ $row->id }}" type="button" class="btn btn-dark">Detail</a>
                        <a href="/edit/{{ $row->id }}" type="button" class="btn btn-dark">Edit</a>

                        @csrf
                        @method("destroy")
                        <a href="/destroy/{{ $row->id }}" type="button" class="btn btn-dark">Hapus</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>

    </body>
</html>