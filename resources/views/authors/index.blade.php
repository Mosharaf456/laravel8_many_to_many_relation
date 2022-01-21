<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Show Authors</title>
</head>
<body>
    <div class="container">
        <h1>Author List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>@Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created on</th>
                    <th>Updated on</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                   <tr>
                       <td> {{ $author->id }} </td>
                       <td> {{ $author->name }} </td>
                       <td> {{ $author->email }} </td>
                       <td> {{ $author->created_at->diffForHumans() }} </td>
                       <td> {{ $author->updated_at->format('y - m - d') }} </td>
                    {{--  --}}    
                   </tr>
                @endforeach
            </tbody>
    </div>
</body>
</html>
