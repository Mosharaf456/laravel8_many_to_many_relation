<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Show Books</title>
</head>
<body>
    <div class="container">
        <h1>Book Lists </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>@Id</th>
                    <th>Name</th>
                    <th>description</th>
                    <th>isbn</th>
                    <th>Created on</th>
                    <th>Updated on</th>
                    <th>Authors</th>
                    <th>Actions</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                   <tr>
                       <td> {{ $book->id }} </td>
                       <td> {{ $book->name }} </td>
                       <td> {{ $book->description }} </td>
                       <td> {{ $book->isbn }} </td>
                       <td> {{ $book->created_at->diffForHumans() }} </td>
                       <td> {{ $book->updated_at->format('y - m - d') }} </td>
                    {{--  --}}  
                    <td>
                        @foreach ($book->authors as $author)
                            <li>{{ $author->name }}</li>
                        @endforeach
                    </td> 
                    <td>
                        <a href="/books/{{$book->id}}/edit" class="btn btn-danger btn-sm">Edit</a>
                    </td> 
                 </tr>
                @endforeach
            </tbody>
    </div>
</body>
</html>
