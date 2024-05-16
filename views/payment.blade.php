<!DOCTYPE html>
<html lang="me">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="{{asset('images/icon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - MSC Online Payment System</title>
    <link rel="stylesheet" href="css/pay.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form class ="hello" action="">
          <div class="dashboard">
            <ul>
              <li><a href="home"><i class='bx bxs-home'>&nbsp;</i><b>Home</b></a></li> <br>
              <li><a href="notification"><i class='bx bxs-notification'></i>&nbsp;<b>Notification</b></a></li> <br>
              <li><a href="fees"><i class='bx bx-coin'>&nbsp;</i><b>Fees</b></a></li> <br>
              <li><a href="payment"><i class='bx bxs-receipt'>&nbsp;</i><b>Payment</b></a></li> <br>
              <li><a href="setting"><i class='bx bxs-cog'></i>&nbsp;<b>Settings</b></a></li> <br>
              <li><a href="logout"><i class='bx bx-log-in'></i>&nbsp;<b>Logout</b></a></li>
            </ul>
           </div>
           <div class="pay">
            <div class="bal">Outstanding Balance</div><br>
            <div class="method">
              <h3>Payment-method</h3>
                <div class="money">
                  <div><img src="images/gcash.png"></div>&nbsp;
                 <div><img src="images/paypal.png"></div>&nbsp;
                 <div><img src="images/credit card.png"></div>&nbsp;
                </div>     
                
            </div>
            
           </div>
        
        </form>
    </div>