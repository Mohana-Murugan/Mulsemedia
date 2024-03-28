<?php

$qoe_link="https://forms.gle/Qz7n8sXPAcgLp3MeA/";//QOE Link
if(!empty($_REQUEST['id']))
{
  $id=$_REQUEST['id'];
  if($id=="rose")
  {
    $ptitle="Rosemary";
    $htitle="About Rosemary and Medical Benefits";
    $video_url="Rosemary.mp4";
    $assessment_link="https://forms.gle/VQL1EmuzntGVRmKi6/";//Rosemary Assessment Link

    //next show
    $idn="thunder";
    $wvn="Physics";
  }
  else if($id=="thunder")
  {
    $ptitle="Thunderstorm and Lightning";
    $htitle="The Science Behind Thunder and Lightning";
    $video_url="Thunderstorm.mp4"; 
    $assessment_link="https://forms.gle/kSyPDmuWQct1vxgw8/";//Thunderstorm Assessment Link

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
  $wvnd="";
  if($wvc==1)
  {
    $wvnd='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="pre.php?id='.$idn.'&nwvc=2" class="btn btn-danger btn-lg">Next to '.$wvn.'</a>';
  }
  else
  {
    $wvnd='<br /><br /><a href="'.$qoe_link.'" class="btn btn-success btn-lg">Assess your Experience ( QOE )</a>'; 
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
        <div class="col-md-12">
            <div id="video-container">
              <video src="<?php echo $video_url;?>" controls></video>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <a href="<?php echo $assessment_link;?>" target="_blank" class="btn btn-primary btn-lg">Post Assessment</a>
            
             <?php echo $wvnd;?>
        </div>
      </div>
    </div>


  
    
  </body>
</html>


