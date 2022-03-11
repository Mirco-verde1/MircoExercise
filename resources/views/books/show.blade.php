<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dettagli Libro</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Anno</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descrizione</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$book->title}}</td>
            <td>{{$book->author->fullname}}</td>
            <td>{{$book->itDate}}</td>
            <td>{{$book->category}}</td>
            <td>{{$book->description}}</td>

          </tr>
        </tbody>
      </table>
</body>
</html>
