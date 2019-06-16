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
        <h2 style="font-weight:400;margin-left:5px;color:black">Orders</h2>
      </h3>
       <md-button target="_blank" href="<?php echo URLROOT; ?>/reports/report1" class="md-raised" style="background-color:#F9A825;color:white; margin-top:0; margin-left:80%; ">PRINT</md-button>
    </div>
    
     
    
  </md-toolbar>
  <md-content class="md-padding">

    <md-card>
        <div layout="column" style="width:100%">
            <div class="md-padding">
              <md-title>List of Orders</md-title>
              <div style="background-color:#F9A825;height:4px;width:40px;margin-top:5px;margin-bottom:5px"></div>
            </div>
            <div layout="column">
              <md-list style="margin-top:-20px">
                
                <md-list-item ng-click="null">
                  <div style="max-height:40px" layout="row">
                    <md-icon style="margin-top:12px;margin-left:10px">
                      <svg style="width:10px;height:10px" viewBox="0 0 24 24">
                        <path fill="#00C853" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                      </svg>
                    </md-icon>
                    <h4 style="font-weight:400;margin:0px" layout-align="center center">Customer Name</h4>
                    <h4 style="font-weight:400;margin:0px;margin-left:90px" layout-align="center center">Order Name</h4>
                    <h4 style="font-weight:400;margin:0px;margin-left:45%;" layout-align="center center">Quantity</h4>
                    <h4 style="font-weight:400;margin:0px;margin-left:30%" layout-align="center center">Price</h4>
                     <h4 style="font-weight:400;margin:0px;margin-left:20%" layout-align="center center">Status</h4>
                   
                  </div>
                  <md-divider></md-divider>
                </md-list-item>
                <md-divider></md-divider>

                <?php foreach($data['report'] as $report): ?>
                  <md-list-item style="padding-left: 54px;">
                  <div style="max-height:40px" layout="row">
                   
                    <h4 style="font-weight:400;margin:20px; margin-top: 0;" layout-align="center center"><?php echo $report->Customer; ?></h4>
                    <h4 style="font-weight:400;margin:60px;margin-top: 0;" layout-align="center center"><?php echo $report->OrderName;?></h4>
                    <h4 style="font-weight:400;margin:80px;margin-top: 0;" layout-align="center center"><?php echo 'x'.$report->Quantity; ?></h4>
                    <h4 style="font-weight:400;margin:90px;margin-top: 0;" layout-align="center center"><?php echo $report->Price; ?></h4>
                    <h4 style="font-weight:400;margin:70px;margin-top: 0;" layout-align="center center"><?php echo $report->Status; ?></h4>
                    <?php if ($report->Status == 'Processing'): ?>
                       <md-button  href="<?php echo URLROOT; ?>/admin/status/<?php echo $report->id ?>" class="md-raised" style="background-color:#F9A825;color:white; margin-top:0; ">Deliver</md-button>
                     <?php else: ?>
                        <div style="padding: 50px;"></div>
                    <?php endif; ?>
                
                  </div>
                </md-list-item>
              <?php endforeach; ?>
              </md-list>

            </div>
          </div>
    </md-card>
    
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