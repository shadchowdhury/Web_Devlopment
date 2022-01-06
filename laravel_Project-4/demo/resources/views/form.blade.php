<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Input Form</title>
  </head>
  <body>
    <div class="container"><h1>Please, Give us your informations.</h1></div>
    
    <div class="container">
      <!-- @if($errors->any())
        <div class="alert alert-danger">
          <ul>
             @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
               @endforeach
          </ul>
        </div>
       @endif -->
        <form action="{{url('form-submit')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control">
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your email" class="form-control">
                @error('email')
                  <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            <input type="submit" class="btn btn-primary my-3" value="Submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>