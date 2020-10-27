<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    @foreach ($books as $book)

      <div>
        <h2>{{$book->title}}</h2>
        <h3>{{$book->author}}</h3>
        <small>{{$book->edition}}</small>
        <img src="{{$book->image}}" alt="copertina libro">
      </div>

    @endforeach

  </body>
</html>
