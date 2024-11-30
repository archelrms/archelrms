<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;

class BooksImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'tittle'=> $row ['tittle'],
            'author'=> $row ['author'],
            'year'=> $row ['year'],
            'publisher'=> $row ['publisher'],
            'city'=> $row ['city'],
            'cover'=> 'null',
            'bookshelf_id'=> $row ['bookshelf_id'],
        ]);
    }
}
