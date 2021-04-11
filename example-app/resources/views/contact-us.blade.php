<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Contact Form</title>
</head>
<body>
<style>
body {
    background-color: #456;
}
</style>
    <section style="padding-top: 60px;">
    <div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="card">
      <div class="card-header">
      <h1>Contact Form</h1>
          @if(Session::get('msg_sent'))
            <div class="alert alert-success">
              {{Session::get('msg_sent')}}
            </div>
            @endif
       <form action="{{ route('sent-email') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
           <label for="name">Name</label>
           <input type="text" name="name" class="form-control">
         </div> 
         <div class="form-group">
           <label for="email">Email</label>
           <input type="email" name="email" class="form-control">
         </div> 
         <div class="form-group">
           <label for="name">Phone</label>
           <input type="text" name="phone" class="form-control">
         </div> 
         <div class="form-group">
           <label for="msg">Message</label>
           <input type="text" name="msg" class="form-control">
         </div> 
         <button class="btn btn-primary">Submit</button>
       </form>
      </div>
    </div>
    </div>
    </div>
    </div>
    </section>
</body>
</html>