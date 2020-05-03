<?PHP
include 'initSesh.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script>
        $(function () {
            $("#includedContent").load("https://www.ironsky-app.com/navbarclient.php");
        });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">

    <link href="css/memberships.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
  <body style="background-color:#1E4072;">
      <!-- START OF NAVIGATION BAR -->

      <div id="includedContent"></div>
      <!-- END OF NAVIGATION BAR -->
      <div class="form-gap">
          <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
      </div>
      <div class="container">

          
          <div class="row">

              <div class="col-lg-6 mx-auto">  
                   <h2 style="font-size:30;"><u>Monthly Memberships</u></h2>   
                    <br>
                  <div class="card text-white bg-danger mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="col-lg-7 card-title" style="font-size:20;">Unlimited test &#8364;0.01</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="6SKFHR39AXKFS">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
              <div class="card text-white bg-primary mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title col-lg-7" style="font-size:20;">Unlimited &#8364;85</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="2TVJM3CX94Q2E">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
              <div class="card text-white bg-warning mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title col-lg-7" style="font-size:20;">3 Sessions per Week &#8364;75</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="8UWFGBGWCXU4N">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div> 
              <div class="card text-white bg-warning mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title col-lg-7" style="font-size:20;">Open Gym &#8364;70</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="989C9KJURHY52">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>


                      </div>
                  </a>
              </div> 
                 <h2 style="font-size:20;">Specialty Classes</h2>   
                    <br>
                    <div class="card text-white bg-danger mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="col-lg-7 card-title" style="font-size:20;">Grow Strong &#8364;55</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7YZKJ54BBFPMG">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
              <div class="card text-white bg-primary mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title col-lg-7" style="font-size:20;">We Move &#8364;55</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="989C9KJURHY52">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-6 mx-auto">
               <h2 style="font-size:30;"><u>3-Month Memberships</u></h2>
                <br>
                <div class="card text-white bg-danger mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="col-lg-7 card-title" style="font-size:20;">Unlimited &#8364;220</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7ZGNLANLT74CE">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
              <div class="card text-white bg-primary mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title col-lg-7" style="font-size:20;">3 Sessions per week &#8364;200</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="5HULE4JVZUBW8">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
              <div class="card text-white bg-warning mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title col-lg-7" style="font-size:20;">Open Gym &#8364;190</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="CVLUHZZZT4A2U">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div> 
                 <h2 style="font-size:20;">Specialty Classes</h2>   
                    <br>
                    <div class="card text-white bg-danger mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="col-lg-7 card-title" style="font-size:20;">Grow Strong &#8364;150</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="Z886U9CJBKRJY">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
              <div class="card text-white bg-primary mb-3 ">
                      <div class="row mx-auto card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title col-lg-7" style="font-size:20;">We Move &#8364;150</h5>
                          
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="JM2N2P7CW3PYQ">
                            <input type="hidden" name="custom" value="<?=$_SESSION['email'];?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>

                      </div>
                  </a>
              </div>
                  
          </div>
          <br><br><br>

          <br>
          <p style="font-size:10; color:white;">*After your payment the new plan will be activated upon the expiration of your current membership subscription.</p>
      </div>
  </body>
</html>
