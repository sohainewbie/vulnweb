
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="?pages=home.php">Home</a>
          <a class="p-2 text-muted" href="?pages=article.php">Article</a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
          <a class="p-2 text-muted" href="#"></a>
        </nav>
      </div>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="?pages=article.php" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
    </div>

    <main role="main" class="container">
        <?php
            $file = 'home.php';
            if(isset($_GET['pages'])){
                $file = $_GET['pages'];
            }
            include('pages/'.$file);
        ?>
    </main>

    <footer class="blog-footer">
      <p>Created by <a href="https://github.com/sohainewbie">@longcat</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  </body>
</html>
