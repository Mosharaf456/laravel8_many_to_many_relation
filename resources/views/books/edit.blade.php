<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Books Create</title>
</head>
<body>
    <div class="container">
        <h2>Books Edit</h2>
        <form action="/books/{{$book->id}}/edit" method= "POST" >
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$book->name}}">
            </div>
            {{-- isbn --}}
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="" cols="10" rows="5"> {{$book->description}} </textarea>
            </div>
            <div class="form-group">
                <label for="isbn">Publication</label>
                <input type="text" name="isbn" value="{{$book->isbn}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="authors">Book Authors::</label>
                @foreach ($book->authors as $author)
                    <li>{{ $author->name }}</li>
                @endforeach
                <select name="authors[]" id="authors" class="form-control" multiple>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id}}">{{ $author->name}}</option>    
                    @endforeach

                </select>
            </div>

            <button type="submit"  class="btn btn-primary">Update Book</button>

        </form>
    </div>

</body>
</html>