<html>
        <head
        <meta charset="UTF-8">
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width">
        <!-- Chrome Browser therme color in Android -->
        <meta name="theme-color" content="#F9A825">
        <!-- Material Design Resource CSS (Icons, Fonts) -->
        <link href="<?php echo URLROOT; ?>/AdminPanel/public/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/AdminPanel/public/css/fonts.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/AdminPanel/public/css/ng-main-style.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/AdminPanel/public/css/ng-home.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/AdminPanel/public/css/angular-material.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
      
      </head>
    <body ng-app="Demo" >
        <md-content >
        <md-card  class="header-cards md-whiteframe-10dp md-padding" style="background-image:url(<?php echo URLROOT; ?>/AdminPanel/public/img-assets/admin-graphics.png);padding-left:90px;padding-top:40px;margin-left:15%;margin-right:15%;margin-top:5%;height:500px;">
            <h2 class="md-display-1" style="text-align:left">Admin Account Login</h2>
            <h2 class="md-title" layout-align-xs="center center" style="text-align:left;margin-top:-20px;width:50%;font-weight:400;font-size:18px">Enter your admin credential to access the administrative tools.
            </h2>
               <span><?php echo $data['password_err']; ?></span>
                       <span><?php echo $data['email_err']; ?></span>
            <form action="<?php echo URLROOT; ?>/uadmin/login" method="post">
            <div style="width:400px;margin-top:50px">
                <md-content style="width:100%" class="md-no-momentum" layout="column" layout-align="start start">
                    <div layout="row">
                        <md-icon>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#FF6F00" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                            </svg>
                        </md-icon>
                        <md-input-container class="md-block" style="margin-left:5px">
                            <!-- Use floating placeholder instead of label -->
    
                            <input required ng-model="user.email" name="email" type="email" placeholder="Username (required)" ng-required="true">
                        </md-input-container>
                    </div>
                    <div layout="row">
                        <md-icon>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#FF6F00" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z" />
                            </svg>
                        </md-icon>
                        <md-input-container class="md-block" style="margin-left:5px">
                            <!-- Use floating placeholder instead of label -->
                            <input  name="password" type="password" placeholder="Password (required)" ng-required="true">
                        </md-input-container>
                    </div>
                </md-content>
            </div>
            
            <div style="margin-top:10px" layout-align="column">
                <md-button  class="md-raised" type="submit" id="card-button" style="background-color:#F9A825; color:white;margin-left:0px">Login</md-button>
            </div>
            </form>
        </md-card>
        <!-- End of Orders Card Section -->
        <div layout="row" style="margin-left:14%">
            <md-button style="font-size:10px">Privacy</md-button>
            <md-button style="font-size:10px">Terms and Condition</md-button>
            <md-button style="font-size:10px">Help</md-button>
        </div>
        
    </md-content>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.11.0/angular-material.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/angularjs//1.4.8/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

    <script src="<?php echo URLROOT; ?>/AdminPanel/public/app.1.js"></script>
</body>
</html>