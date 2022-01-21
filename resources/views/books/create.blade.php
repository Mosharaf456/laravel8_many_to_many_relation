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
        <h2>Books Create</h2>
        <form action="/books/create" method= "POST" >
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            {{-- isbn --}}
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="" cols="10" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="isbn">Publication</label>
                <input type="text" name="isbn" class="form-control">
            </div>

            <div class="form-group">
                <label for="isbn">Book Author</label>
                <select name="authors[]" id="authors" class="form-control" multiple>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id}}">{{ $author->name}}</option>    
                    @endforeach

                </select>
            </div>

            <button type="submit"  class="btn btn-primary">Create Book</button>

        </form>
    </div>

</body>
</html>