<!doctype html>
<html>
<head>
        <title>Admin</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel= "stylesheet" href= "assets/css/style.css">
    
</head>
<body class="bg-primary">
<!-- Nav -->        
        
     <nav class="navbar navbar-expand-lg p10 py-0">
          <div class="container-fluid">

                <img src= "assets/img/logobanner.png">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
            </div>
          </div>
     </nav>
 
<!--Admin table-->        
        <?php ?>
<section class="container">
    <div class="container align-items-center">
        <h1>Admin</h1>
    </div>
        <hr>
        <table class="table table-bordered border-danger-subtle table-striped">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Event Date</th>
                <th>Order Type</th>
                <th>Selection</th>
                <th>Details</th>
            </tr>
   
           
        <?php
            
        $d = file_get_contents('data.json');
        $d = json_decode($d, true);
        //print_r( $d );
        
        foreach( $d as $k => $v ){
        echo '
            <tr>
                <td>'.$k.'</td>
                <td>'.$v['name'].'</td>
                <td>'.$v['email'].'</td>
                <td>'.$v['phone'].'</td>
                <td>'.$v['date'].'</td>
                <td>'.$v['ordertype'].'</td>
                <td>';
       foreach( $v['product'] as $p => $s ){         
       echo    $s."<br>" ;
       };
        echo '       
                </td>        
                
                <td>'.$v['details'].'</td>
            </tr>
          ';
        };
            
        ?>
            
        </table>
        <hr>
        <?php ?>
    </section>
   
     <!-- Copyright -->        
        <footer class= "tc">
            <div>
              <img src= "assets/img/logobanner.png">
            </div>
            <div>
                <p>&copy; 2023 Copyright. All rights reserved.</p>
            </div>

        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script src="assets/js/script.js"></script>   
</body>
</html>