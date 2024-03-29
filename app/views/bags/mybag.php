<?php require APPROOT. '/views/inc/header2.php' ; ?>
<body ng-controller="AppCtrl as ctrl" layout="column" ng-cloak="" class="chipsdemoBasicUsage" ng-app="MyApp" style="height: 500px;"
  ng-cloak>
  <?php require APPROOT.'/views/inc/navbar.php'; ?>
 
  <!-- Main Content Section -->
  <md-content ng-app="MyApp">
    <!-- Orders Card Section -->
    <div ng-controller="AppCtrl as ctrl" layout="column" ng-cloak="" layout-align="center center" class="chipsdemoBasicUsage">
      <md-card class="header1-cards md-whiteframe-10dp" layout-align="start start" style="padding:50px;">
        <h2 class="md-display-4">My Bag</h2>
        <img class="line-separator" src="<?php echo URLROOT; ?>/img-assets/line-separator.jpg">
        <h2 class="md-display-1">Congrats! You have now placed your order in your bag, proceed to checkout if you are finished in selecting what you
          want!
        </h2>
        <h2 class="md-title">This is the list of products that you have selected.</h2>
        

        <!-- Orders List View -->
        <?php $count = ''; ?>
       <?php foreach($data['bag'] as $bag):?>
        <?php $count++ ?>
        <md-list-item >
          <div style="padding-right: 60px;"> 
          <md-button href="<?php echo URLROOT; ?>/bags/remove/<?php echo $bag->id; ?>" class="md-raised" style="background-color:#F9A825;color:white; min-width: 100%;">X</md-button>
          </div>
           <div style="padding-right: 15px;"> 
          <md-button href="<?php echo URLROOT; ?>/bags/incquantity/<?php echo $bag->id; ?>" class="md-raised" style="background-color:#F9A825;color:white; min-width: 100%;">+</md-button>
          </div>
          <div style="padding-right: 60px;"> 
          <md-button href="<?php echo URLROOT; ?>/bags/decquantity/<?php echo $bag->id; ?>" class="md-raised" style="background-color:#F9A825;color:white; min-width: 100%;">-</md-button>
          </div>
          <p style="padding-right: 30px;"><?php echo $bag->quantity; ?>x</p>
          <p  class="amber checks" value="<?php echo $bag->order_name; ?>"></p>
          <p><?php echo $bag->order_name; ?> <i style="font-weight:300">Iced Tea</i></p>
          <p style="padding-left: 30px;">₱<?php echo $bag->total_price; ?></p>

        </md-list-item>
     <?php endforeach; ?>

        <div style="margin-top:10px" layout-align="column">
          <?php if($count > 0): ?>
            <div>
              <h3>Total Amount: ₱<?php echo $data['total']->total_price; ?></h3> 
            </div>
          <md-button href="<?php echo URLROOT; ?>/orders/order" id="btnCheckout" style="background-color:#F9A825; color:white">Proceed to Checkout</md-button>

        <?php else: ?>
          <h2 class="md-display-1" >EMPTY BAG.</h2>
        <?php endif; ?>
          <md-button href="<?php echo URLROOT; ?>/pages/menu" id="card-button" style="background-color:#F9A825; color:white">Place More Order</md-button>
          
        </div>
      </md-card> 
    </div>
    <!-- End of Orders Card Section -->
    <!-- Content Footer (Top-Social Media Links) -->

    <md-content class="md-padding card-parent" id="mc-footer" layout="column" layout-xs="column" layout-align="center center">
      <div layout="row" layout-xs="row" layout-align="start center">
        <md-button class="md-fab" id="footer-fab">
          <md-icon>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="#F9A825" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
            </svg>
          </md-icon>
        </md-button>
        <md-button class="md-fab" id="footer-fab">
          <md-icon>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="#F9A825" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"
                />
              </svg>
            </svg>
          </md-icon>
        </md-button>
        <md-button class="md-fab" id="footer-fab">
          <md-icon>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="#F9A825" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"
                />
              </svg>
            </svg>
          </md-icon>
        </md-button>
      </div>
    </md-content>
    <!-- End of Content Footer (More Info Links) -->
 
  <!-- End Main Content -->
    <!-- End of Content Footer (Top-Social Media Links) -->
    <!-- Content Footer (More Info Links) -->
 

   <?php require APPROOT. '/views/inc/footer2.php' ; ?>