<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial=scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <div cladd="card">
                    <div cladd="card-header">Create a new book</div>
                    <div class="card-body">
<form action="{{route('book.store')}}" method="POST">@csrf
    <label>Name of book</label>
    <input type="text" name="name" class="form-control" placeholder="name of book">
    <br>
    <label>Description of book</label>
    <textarea name="description" class="form-control"></textarea>
    <br>
    <label>Category</label>
    <select name="category"class="form-control" >
        <option value="">select</option>
        <option value="frictional">Frictional Book</option>
        <option value="biography">Biography Book</option>
        <option value="comdey">Comdey Book</option>
        <option value="eductional">Eductional</option>
    </select>
    <br>
    <input type="submit" value="submit" class="btn btn-primary">
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>>

