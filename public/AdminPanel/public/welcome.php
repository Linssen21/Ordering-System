<html>

<head <meta charset="UTF-8">
    <title>Welcome Admin</title>
    <meta name="viewport" content="width=device-width">
    <!-- Chrome Browser therme color in Android -->
    <meta name="theme-color" content="#F9A825">
    <!-- Material Design Resource CSS (Icons, Fonts) -->
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="css/ng-main-style.css">
    <link rel="stylesheet" href="css/ng-home.css">
    <link rel="stylesheet" href="css/angular-material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>

<body ng-app="Demo">
    <md-content>
        <md-card class="header1-cards md-whiteframe-10dp" layout-align-xs="center center" layout-align-md="center center" layout-align-sm="center center"
            layout-align-lg="center center" style="height:500px;padding:50px;margin-left:15%;margin-right:15%;margin-top:5%;height:500px;">
            <div id="anim" style="width:200px;height:200px"> </div>
            <h2 style="margin-top:50px" class="md-display-1" layout-align-xs="center center" layout-align-sm="center center" layout-align-md="center center"
                layout-align-lg="center center">You've Just Signed In!</h2>
            <h2 class="md-title" layout-align-xs="center center" layout-align-sm="center center" layout-align-md="center center" layout-align-lg="center center"
                style="font-weight:400;font-size:18px;text-align:center;margin-top:-20px;width:50%;">Manage customer orders, view branches and access your admin account here.
            </h2>
            <div style="margin-top:10px" layout-align="column">
                <md-button class="md-raised" id="card-button" style="background-color:#F9A825; color:white" ng-href="index.html">Go to dashboard</md-button>
                <md-button class="md-raised" id="card-button" style="background-color:#F9A825; color:white">signout</md-button>
            </div>
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

    <script src="app.1.js"></script>
    <script src="js/motion.js"></script>

    <script>
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('anim'),
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: '/images/data.json'
        })
    </script>
</body>

</html>