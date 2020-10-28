<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show</title>
  </head>
  <body>

    <ul>
      <li>{{$book->title}}</li>
      <li>{{$book->author}}</li>
      <li>{{$book->isbn}}</li>
      <li>{{$book->genre}}</li>
      <li>{{$book->edition}}</li>
      <li>{{$book->pages}}</li>
      <li>{{$book->year}}</li>
      <img src="{{$book->image}}" alt="copertina libro">
    </ul>

    <form action="{{route('books.destroy', $book)}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="Elimina">
    </form>

  </body>
</html>
