<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
            @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
        <div class="card mt-5">
        <div class="card-header">List of all Books</div>
        <div class="card-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th> 
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>

          </tr>
        </thead>
        <tbody>
            @forelse($books as $key => $book)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>
                    <img src="{{ Storage::url($book->image) }}" width="100">
                </td>
                <td>{{$book->name}}</td>             
                <td>{{$book->description}}</td>
                <td>{{$book->category}}</td>
                <td>
                    <a href="{{route('book.edit',[$book->id])}}">
                        <button class="btn btn-info">Edit</button>
                    </a>
                </td>

                <td>
                    <form action="{{route('book.destroy',$book->id)}}" method="POST">@csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr> 
              @empty
              <td>No any Books</td>  
            @endforelse
                      
        </tbody>
      </table>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>