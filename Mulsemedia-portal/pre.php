<?php
if(!empty($_REQUEST['id']))
{
  $id=$_REQUEST['id'];
  if($id=="rose")
  {
    $ptitle="Rosemary";
    $htitle="About Rosemary and Medical Benefits";
    $preassessment_link="https://forms.gle/ZihMbWt6oDhvqyBLA/";//Rosemary Pre Assessment Link

    //next show
    $idn="thunder";
    $wvn="Physics";
  }
  else if($id=="thunder")
  {
    $ptitle="Thunderstorm and Lightning";
    $htitle="The Science Behind Thunder and Lightning";
    $preassessment_link="https://forms.gle/JAnMMazsoSgDXGELA/";//Thunderstorm Pre Assessment Link

    //next show
    $idn="rose";
    $wvn="Biology";
    
  }

//video watch count check
  if(empty($_REQUEST['wvc']))
  {
    $wvc=1;
  }
  else
  {
    $wvc=$_REQUEST['wvc'];
  }
  if(!empty($_REQUEST['nwvc']))
  {
    $nwvc=$_REQUEST['nwvc'];
  }
  else
  {
    $nwvc="";
  }
  $wvnd="";
  if($wvc==1)
  {
    $wvnd='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?id='.$id.'&wvc=2&nwvc='.$nwvc.'" class="btn btn-warning btn-lg">Pre Assessment</a>';
  }
  else
  {
    echo "<script>window.open('".$preassessment_link."', '_blank');</script>";
    $wvnd='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="watch.php?id='.$id.'&wvc='.$nwvc.'" class="btn btn-primary btn-lg">Next to watch video</a>';
  }
 
    

  

}
else
{
  ?>
<script>window.location.href="index.php";</script>
  <?php
}

?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php echo $ptitle;?></title>
	  <!-- Bootstrap CSS File -->
	  <link href="bootstrap.min.css" rel="stylesheet">
    
  
   <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #F7E8D5;
      }
      
      header {
        background-color: #4C2B1D;
        color: #FFF;
        padding: 20px;
        text-align: center;
        animation: color-change 10s infinite;
      }
      
      h1 {
        margin: 0;
        font-size: 48px;
        text-shadow: 2px 2px #333;
      }
      
      #video-container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #FFF;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px #333;
      }
      
      #video-container video {
        width: 100%;
        height: auto;
      }
      
      .content {
        max-width: 800px;
        margin: 20px auto;
        background-color: #FFF;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px #333;
      }
      
      h2 {
        font-size: 36px;
        margin-top: 0;
        color: #4C2B1D;
        animation: shake 0.5s infinite;
      }
      
      p {
        line-height: 1.5;
        margin-bottom: 20px;
      }
      
      .button {
        display: inline-block;
        background-color: #4C2B1D;
        color: #FFF;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.2s;
      }
      
      .button:hover {
        background-color: #8C5245;
      }
      
      footer {
        background-color: #3E231A;
        color: #FFF;
        padding: 10px;
        text-align: center;
      }
      
      /* CSS Animation */
      @keyframes color-change {
        0% {
          background-color: #4C2B1D;
        }
        50% {
          background-color: #C6895A;
        }
        100% {
          background-color: #4C2B1D;
        }
      }
      
      @keyframes shake {
        0% {
          transform: translateX(0);
        }
        25% {
          transform: translateX(-10px);
        }
        50% {
          transform: translateX(0);
        }
        75% {
          transform: translateX(10px);
        }
        100% {
          transform: translateX(0);
        }
      }
    </style>
  </head>
  <body>
    <header><h1><?php echo $htitle;?></h1></header>

    <div class="container">
      <div class="row">

        <div class="col-md-12 text-center">
            <br /><br /><br />
            
             <?php echo $wvnd;?>
        </div>
      </div>
    </div>


  
    
  </body>
</html>


