<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style='margin-left:200px;'>
            <img src='tmdb.svg' width = '154' height = '20'/>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="bai_thuc_hanh3.php?cat=Now Playing">Now Playing</a>
            <a class="nav-link active" href="bai_thuc_hanh3.php?cat=Popular">Popular</a>
            <a class="nav-link active" href="bai_thuc_hanh3.php?cat=Top Rated">Top Rated</a>
            <a class="nav-link active" href="bai_thuc_hanh3.php?cat=Upcoming">Upcoming</a>
        </div>
        </div>
    </div>
    </nav>
    <center>
    <div>
        
            <?php if(isset($_GET["cat"]))
            {
                
            }
           
            ?>
            
    </div>
    </center>
  

   
    </body>
</html>