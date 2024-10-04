<<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <form action="{{url('/')}}/register" method="POST">
    @csrf 
    <div class="container" >  
   <div class="form-group ">
     <label for="">Name</label>
     <input type="text" name="name" id="" class="form-control" placeholder="yourname" aria-describedby="helpId">
   </div>
   <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" id="" class="form-control" placeholder="Mailid" aria-describedby="helpId">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" id="" class="form-control" placeholder="password" aria-describedby="helpId">
  </div>
<button class="btn btn-primary">
    Submit
</button>
    </div>
   </form>
  </body>
</html>