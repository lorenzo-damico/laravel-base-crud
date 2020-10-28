<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
  </head>
  <body>

    <form action="{{ route('books.store') }}" method="POST">
      @csrf
      @method('POST')

      <div>
        <label for="titolo">Titolo</label>
        <input type="text" name="title" id="titolo" placeholder="Titolo">
      </div>

      <div>
        <label for="autore">Autore</label>
        <input type="text" name="author" id="autore" placeholder="Autore">
      </div>

      <div>
        <label for="edition">Editore</label>
        <input type="text" name="edition" id="edition" placeholder="Editore">
      </div>

      <div>
        <label for="genre">Genere</label>
        <input type="text" name="genre" id="genre" placeholder="Genere">
      </div>

      <div>
        <label for="image">Immagine URL</label>
        <input type="text" name="image" id="image" placeholder="Immagine URL">
      </div>

      <div>
        <label for="year">Anno</label>
        <input type="date" name="year" id="year" placeholder="Anno">
      </div>

      <div>
        <label for=isbn"">ISBN</label>
        <input type="text" name="isbn" id="isbn" placeholder="isbn">
      </div>

      <div class="">
        <label for="pages">Numero pagine</label>
        <input type="number" name="pages" id="pages" placeholder="Numero pagine">
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
