<?php

namespace App\Http\Controllers;

use App\Models\Book; //akan error jika tidak ada ini (import dari book)
use Illuminate\Http\Request;

class BookController extends Controller
{
     
    public function index()
    {
        $books = Book::all(); //$books sebagai variabel. Book::all() artinya memanggil semua data dari Book
        return view("book", compact('books'));
    }

    public function create()
    {
        $books = Book::all();
        return view("book", ["books"=>$books]); 
    }

    public function store(Request $request) //untuk tambah data
    {
        // $books = $request->except(['_token']);
        // return redirect ('/');

        // Book::create($request->all());

        // return redicted()->route('book')->with('success', ' Daftar buku baru berhasil dibuat. ');

        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'sinopsis' => 'required',
            'penerbit' => 'required',
            'banyak_halaman' => 'required',
            'kelebihan' => 'required',
            'kekurangan' => 'required'
        ]);
    
        $book = Book::create([
            'judul'     => $request->judul,
            'penulis' => $request->penulis,
            'sinopsis' => $request->sinopsis,
            'penerbit' => $request->penerbit,
            'banyak_halaman' => $request->banyak_halaman,
            'kelebihan' => $request->kelebihan,
            'kekurangan' => $request->kekurangan
        ]);
    
        if($book){
            //redirect dengan pesan sukses
            return redirect()->route('book')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('book')->with(['error' => 'Data Gagal Disimpan!']);
        }
    
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view("edit", ["book"=>$book]);
    }

    public function update(Request $request, $id) //untuk update data
    {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect('book')->with('success', ' Data telah berhasol diperbaharui.');
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        $book->delete();
        return redirect()->route('book')->with('success', ' Penghapusan berhasil.');
    }

    public function tambah(){
        return view('tambah');
    }
}
