
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

<link href="/csss/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/csss/bootstrap.min.css" rel="stylesheet">
        <link href="/csss/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      
      <form method="post" class="form-signin" action="{{route('category.store')}}">
        <h2 class="form-signin-heading">Add Category</h2>

        {{csrf_field()}}
        <label>Category Name</label>
        <label for="inputPassword" class="sr-only">Category Name</label>
        <input type="categoryName" id="inputCategory" name="categoryName" class="form-control" placeholder="Category Name" required autofocus><br> 

                                
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
