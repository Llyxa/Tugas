@if (session('success'))
<div class="alert-success">
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
@endif

@extends('layouts.main')
@section("container")

<body>
    {{-- <center><h3>Daftar Buku</h3></center>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    <table class="table">
      <thead>
        <tr>
          <th scope="col"></th> <!-- judul buku -->
          <th scope="col"></th> <!-- opsi -->
        </tr>
      </thead>
      @foreach($books as $book)
      <tbody>
        <tr>
          <td>{{ $book->id }}</td>
          <td>
            <a href="list/{{ $book->id}}/add" class="">Add</a>
            <a href="list/{{ $book->id}}/detail" class="">Detail Buku</a>
            <a href="list/{{ $book->id}}/edit" class="btn btn-warning">Edit</a>
            <a href="list/hapus/{{ $book->id }}">Hapus</a>
          </td>
        </tr>
      </tbody>
      @endforeach
   
    </table> --}}
    @endsection
</body>