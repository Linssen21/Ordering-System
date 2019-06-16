<?php require APPROOT. '/views/inc/adminheader.php' ; ?>
  <md-content layout="column" style="width:100%">
    <md-toolbar class="toolbar fixed-toolbar md-sticky md-whiteframe-2dp">
      <div class="md-toolbar-tools" fixed-toolbar style="color:#000000">
        <h2 flex md-truncate>Mouth Melters Burger</h2>
        <md-button class="md-icon-button" aria-label="Settings" ng-href="#acc-info">
            <md-icon>
                <i id="n-ic" class="zmdi zmdi-info-outline" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
              
            </md-icon>
        </md-button>
        <md-button class="md-icon-button" aria-label="Settings" style="margin-right:15px">
          <md-icon>
              <i id="n-ic" class="zmdi zmdi-open-in-new" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
          </md-icon>
        </md-button>
        
      </div>
    </md-toolbar>
    <md-content>
      <div class="text-center">
  <md-toolbar class="md-whiteframe-6">
    <div class="md-toolbar-tools " md-whiteframe="6" style="background-color:#E0E0E0">
      <h3>
        <h2 style="font-weight:400;margin-left:5px;color:black">Send Confirmation</h2>
      </h3>
    </div>
  </md-toolbar>
  <md-content class="md-padding">
    <md-card  class="header1-cards md-whiteframe-10dp" layout-align-xs="center center" layout-align-md="center center" layout-align-sm="center center"
        layout-align-lg="center center" style="height:500px;padding:50px;">
        <h2 class="md-display-1" layout-align-xs="center center" layout-align-sm="center center" layout-align-md="center center"
            layout-align-lg="center center">Send Email to Customers</h2>
        <h2 class="md-title" layout-align-xs="center center" layout-align-sm="center center" layout-align-md="center center" layout-align-lg="center center"
            style="text-align:center;margin-top:-20px;width:50%;">Send email confirmation to customers that have placed their orders and delivery details.
        </h2>
        <div style="margin-top:10px" layout-align="column">
            <md-button class="md-raised" id="card-button" style="background-color:#F9A825; color:white" ng-href="#dashboard">More info</md-button>
            <md-button class="md-raised" id="card-button" style="background-color:#F9A825; color:white">Go to Gmail</md-button>
        </div>
    </md-card>
            </md-content>
        </div>
        
    <!-- End of Orders Card Section -->
</md-content>
</div>
    </md-content>
  </md-content>


  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.11.0/angular-material.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/angularjs//1.4.8/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>


  <script src="<?php echo URLROOT; ?>/AdminPanel/public/app.js"></script>
  <script src="<?php echo URLROOT; ?>/AdminPanel/public/js/motion.js"></script>

  <script>
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('anim'),
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: '<?php echo URLROOT; ?>/AdminPanel/public/img-assets/dashboard.json'
    })
</script>
</body>

</html>