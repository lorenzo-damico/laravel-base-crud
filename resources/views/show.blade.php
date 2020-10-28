<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show</title>
  </head>
  <body>

    <div>
      <img src="{{$book->image}}" alt="copertina libro">
    </div>

    <table>
      <thead>
        <tr>
          <th>Titolo</th>
          <th>Autore</th>
          <th>Genere</th>
          <th>Edizione</th>
          <th>Pagine</th>
          <th>Anno</th>
          <th>ISBN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$book->title}}</td>
          <td>{{$book->author}}</td>
          <td>{{$book->genre}}</td>
          <td>{{$book->edition}}</td>
          <td>{{$book->pages}}</td>
          <td>{{$book->year}}</td>
          <td>{{$book->isbn}}</td>
          <td><a href="{{ route('books.edit', $book) }}">Modifica</a></td>
          <td><a href="{{ route('books.index') }}">Indice</a></td>
        </tr>
      </tbody>
    </table>


    <form action="{{route('books.destroy', $book)}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="Elimina">
    </form>


  </body>
</html>
