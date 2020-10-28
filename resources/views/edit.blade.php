<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>

    <form action="{{ route('books.update', $book) }}" method="POST">
      @csrf
      @method('PUT')

      <div>
        <label for="titolo">Titolo</label>
        <input type="text" name="title" id="titolo" placeholder="Titolo" value="{{$book->title}}">
      </div>

      <div>
        <label for="autore">Autore</label>
        <input type="text" name="author" id="autore" placeholder="Autore" value="{{$book->author}}">
      </div>

      <div>
        <label for="edition">Editore</label>
        <input type="text" name="edition" id="edition" placeholder="Editore" value="{{$book->edition}}">
      </div>

      <div>
        <label for="genre">Genere</label>
        <input type="text" name="genre" id="genre" placeholder="Genere" value="{{$book->genre}}">
      </div>

      <div>
        <label for="image">Immagine URL</label>
        <input type="text" name="image" id="image" placeholder="Immagine URL" value="{{$book->image}}">
      </div>

      <div>
        <label for="year">Anno</label>
        <input type="date" name="year" id="year" placeholder="Anno" value="{{$book->year}}">
      </div>

      <div>
        <label for=isbn"">ISBN</label>
        <input type="text" name="isbn" id="isbn" placeholder="isbn" value="{{$book->isbn}}">
      </div>

      <div class="">
        <label for="pages">Numero pagine</label>
        <input type="number" name="pages" id="pages" placeholder="Numero pagine" value="{{$book->pages}}">
      </div>

      <input type="submit" value="Salva">

    </form>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
      </div>
    @endif

  </body>
</html>
