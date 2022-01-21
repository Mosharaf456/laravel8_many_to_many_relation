<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- css only of bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Authors Create</title>
</head>
<body>
    <div class="container">
        <h2>Authors Create</h2>
        <form action="/authors/create" method= "POST" >
            @csrf

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <button type="submit"  class="btn btn-primary">Create Author</button>

        </form>
    </div>

</body>
</html>