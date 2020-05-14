<!doctype html>
<html lang="en">
  <head>
    <title>corona HINT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
  </head>
  <body onload="fetch()">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #827397;">
        <div class="container">
          <a class="navbar-brand" href="index.html">COVID19 Tracker</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link px-3" href="">States <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="">Districts</a>
              </li>
              
              
            </ul>
            
          </div>
        </div> 
      </nav>
      <div class="py-5">
        
      </div>
      <div class="table-responsive container pt-5">
          <table class="table table-bordered table-striped text-center" id="fetchtable">
            <tr>
              <th style="background-color:#dae1e7 ">Last updated time</th>
              <th style="background-color:#dae1e7">State</th>
              <th style="background-color:#cc7b7e">Confirmed</th>
              <th style="background-color:#4cc5e0">Active</th>
              <th style="background-color:#7ca78f">Recovered</th>
              <th style="background-color:#a5ae9e">Deaths</th>

            </tr>
    <?php 
        $statedata = file_get_contents('https://api.covid19india.org/data.json');
        // $sumdata = file_get_content('https://api.covid19api.com/summary');
        //  echo ($sumdata);
        $livedata = json_decode($statedata, true);

        $numstates = count($livedata['statewise']);
        $i=1;
        while($i < $numstates){
    ?>
    <tr>
        <td> <?php echo $livedata['statewise'][$i]['lastupdatedtime'] ?></td>
        <td> <?php echo $livedata['statewise'][$i]['state'] ?></td>
        <td style='background-color:#f4a2a5'> <?php echo $livedata['statewise'][$i]['confirmed'] ?></td>
        <td style='background-color:#72dfee'> <?php echo $livedata['statewise'][$i]['active']  ?></td>
        <td style='background-color:#aad3bd'> <?php echo $livedata['statewise'][$i]['recovered'] ?></td>
        <td style='background-color:#cfd7c8'> <?php echo $livedata['statewise'][$i]['deaths'] ?></td>
    </tr>

    <?php
        $i++;
        }

    ?>

          </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
    <footer class="footer ">
      <div class="copy-right text-center py-3 border-top text-muted">
        <p>Made by Vasanth Desai &copy; 2020</p>
        <p>Thanks <a href=""></a>covid19india.org</p>
      </div>
    </footer>
  </body>
</html>