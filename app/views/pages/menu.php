
<?php require APPROOT. '/views/inc/header.php' ; ?>
<body ng-app="BlankApp" ng-controller="AppCtrl" layout="column" style="height: 500px;" ng-cloak> 
<?php require APPROOT.'/views/inc/navbar.php'; ?>
    <!-- Toolbar Section -->
     <!-- Main Content Section -->
  <md-content style="background-color:#FAFAFA">
    <!-- Content Division -->
    <div ng-controller="AppCtrl" layout="column" ng-cloak>
      <!-- Header Section -->
      <md-card-title-text layout-padding layout="column" layout-align="center center" style="text-align:center">
        <span class="md-base-headline-1"><?php echo "ONLINE ORDERING"; ?></span>
        <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator.jpg" layout-align="center center">
        <span class="md-base-subhead-1" >Check out our special prd4 made for you that was 
          inspired by different cultures of different countries!</span>
      </md-card-title-text>
      <div class="md-padding">
      <md-card class="header1-cards md-whiteframe-3dp" md-theme-watch>
        <md-card-title layout="row" layout-xs="column" layout-sm="row" id="card-titles">
          <md-card-title-media id="head-img" layout-padding>
            <div class="md-media-lg card-media-1" id="card-images-head">
              <img class="card-img-1" src="<?php echo URLROOT; ?>/img-assets/raw/fast-food.png" id="card-images-head" >
            </div>
          </md-card-title-media>
          <md-card-title-text layout-padding>
            <span class="md-headline-1" ng-bind="products">{{products}}</span>
            <img class="line-separator" src="<?php echo URLROOT; ?>/img-assets/line-separator.jpg">
            <span class="md-subhead-1" ng-bind="products_content">{{products_content}}</span>
          </md-card-title-text>
        </md-card-title>
      </md-card>
      </div>
      <!-- Header Fab Button -->
      <section class="header-fab" layout="row" layout-sm="column" layout-align-xs="center center" layout-align="end center" layout-wrap>
        <md-button class="md-fab md-whiteframe-4dp" id="fab-header" aria-label="Eat cake" ng-href="#great-deals-header">
          <md-icon>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="#fff" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
            </svg>
          </md-icon>
        </md-button>
      </section>
      <!-- End of Header Fab Button -->

      <div id="great-deals-header">
        <h1 class="md-display-3" id="h1-header-main" style="color: #616161;">Check out this great deals!</h1>
      </div>

      <!-- Content Cards (Top) -->
      <md-content class="md-padding card-parent" layout="column" layout-xs="column" layout-sm="row" layout-md="row"  layout-align="center center">
        <div class="header-card-div" layout="row" layout-xs="column" layout-sm="column" layout-align="center center">

          <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd1 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/double-grilled-beef.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd1" >{{prd1}}</span>
                
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Double Grilled Beef">
                <input type="hidden" name="order_id" value="DGB">
                <input type="hidden" name="order_price" value="55">
                <span class="md-subhead" ng-bind="prd1_content">{{prd1_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd1($event)" ng-model="name" id="btnTxt">View Details</md-button>
              <md-button id="card-button" type="submit" data-name ="wwew2">Order Now</md-button>
            </md-card-actions>
          </md-card>
          </form>

          <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd2 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/regular.png" width="200px" style="width:100%">
                </div>

              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd2" name="order_name">{{prd2}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Regular Burger">
                 <input type="hidden" name="order_id" value="REG">
                <input type="hidden" name="order_price" value="45">
                <span class="md-subhead" ng-bind="prd2_content">{{prd2_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd2($event)">View Details</md-button>
              <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>

        <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd4 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/black-pepper-1.png" width="200px" style="width:100%">
                </div>
                
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd3" name="order_name">{{prd3}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                 <input type="hidden" name="order_name" value="Black Pepper Burger">
                  <input type="hidden" name="order_id" value="BP">
                <input type="hidden" name="order_price" value="50">
                <span class="md-subhead" ng-bind="prd3_content">{{prd3_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd3($event)">View Details</md-button>
             <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>

        <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd4 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/cheese.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd4" name="order_name">{{prd4}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                 <input type="hidden" name="order_name" value="Cheese Burger">
                  <input type="hidden" name="order_id" value="CHE">
                <input type="hidden" name="order_price" value="50">
                <span class="md-subhead" ng-bind="prd4_content">{{prd4_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd4($event)">View Details</md-button>
              <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>

        <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd4 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/ultimate-beef.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd5" name="order_name">{{prd5}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Ultimate Beef Bacon Burger">
                 <input type="hidden" name="order_id" value="UBB">
                <input type="hidden" name="order_price" value="55">
                <span class="md-subhead" ng-bind="prd5_content">{{prd5_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd5($event)">View Details</md-button>
              <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>
        </div>
        <!-- End of Content Cards (Top) -->

        <!-- Content Cards (Bottom) -->
        <div layout="row" layout-xs="column" layout-sm="column" layout-align="center center">
          <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd6 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/gourmet.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd6" name="order_name">{{prd6}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Gourmet Bacon Burger">
                 <input type="hidden" name="order_id" value="GB">
                <input type="hidden" name="order_price" value="50">
                <span class="md-subhead" ng-bind="prd6_content">{{prd6_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd6($event)">View Details</md-button>
               <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>

        <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd7 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/chicken-bbq.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd7" name="order_name">{{prd7}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Chicken BBQ Burger">
                 <input type="hidden" name="order_id" value="CB">
                <input type="hidden" name="order_price" value="55">
                <span class="md-subhead" ng-bind="prd7_content">{{prd7_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd7($event)">View Details</md-button>
                <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>

        <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd8 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/mouth-melters.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd8" name="order_name">{{prd8}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Signiture Mouth Melters Burger">
                 <input type="hidden" name="order_id" value="SMM">
                <input type="hidden" name="order_price" value="55">
                <span class="md-subhead" ng-bind="prd8_content">{{prd8_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd8($event)">View Details</md-button>
               <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form> 

        <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd9 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/bacon-cheese.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd9" name="order_name">{{prd9}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Bacon Mushroom Burger">
                 <input type="hidden" name="order_id" value="BM">
                <input type="hidden" name="order_price" value="50">
                <span class="md-subhead" ng-bind="prd9_content">{{prd9_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd9($event)">View Details</md-button>
                <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>

        <form action="<?php echo URLROOT; ?>/bags/add" method="POST">
          <!-- Mcprd4 Card -->
          <md-card class="header-cards md-whiteframe-3dp" md-theme-watch>
            <md-card-title layout="column" id="card-titles">
              <md-card-title-media layout-padding>
                <div class="md-media-lg card-media" id="card-images" style="width:100%">
                  <img class="card-img" src="<?php echo URLROOT; ?>/img-assets/raw/ultimate-beef.png" width="200px" style="width:100%">
                </div>
              </md-card-title-media>
              <md-card-title-text layout-padding>
                <span class="md-headline" ng-bind="prd4" name="order_name">{{prd4}}</span>
                <img class="line-separator-1" src="<?php echo URLROOT; ?>/img-assets/line-separator-short.jpg" width="100px" style="margin-top:-10px">
                <input type="hidden" name="order_name" value="Cheese Burger">
                 <input type="hidden" name="order_id" value="CHE">
                <input type="hidden" name="order_price" value="50">
                <span class="md-subhead" ng-bind="prd4_content">{{prd4_content}}</span>
              </md-card-title-text>
            </md-card-title>
            <md-card-actions id="header-card-actions" layout="row" layout-align="end center">
              <md-button id="card-button" ng-click="showprd4($event)">View Details</md-button>
                <md-button id="card-button" type="submit">Order Now</md-button>
            </md-card-actions>
          </md-card>
        </form>
        </div>
      </md-content>
      <!-- End of Content Cards (Bottom) -->

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
      <!-- End of Content Footer (Top-Social Media Links) -->
      <!-- Content Footer (More Info Links) -->
  <?php require APPROOT. '/views/inc/footer.php'; ?>
