
<?php require APPROOT. '/views/inc/header.php' ; ?>
<body ng-app="BlankApp" ng-controller="AppCtrl" layout="column" style="height: 500px;" ng-cloak> 
<?php require APPROOT.'/views/inc/navbar.php'; ?>
  <md-content style="background-color:#FAFAFA">
    <!-- Content Division -->
    <div id="main-content" ng-controller="AppCtrl" layout="column" ng-cloak layout-align="center center">
      <!-- Header Section -->
      <md-card class="header1-cards md-whiteframe-10dp" md-theme-watch layout-align="center center">
        <md-card-title layout="column" layout-xs="column" layout-sm="column" id="card-titles" layout-align="center center">
          <md-card-title-media id="head-img" layout-padding layout-align="center start">
            <div class="md-media-lg card-media-1" id="card-images-head" layout-align="center start">
              
            </div>
          </md-card-title-media>
          <md-card-title-text layout="column">
            <span class="md-headline-1">Location of our branches.</span>
            <img class="line-separator" src="./img-assets/line-separator.jpg">
            <span class="md-subhead-1">Nearby Branches</span>
            <div class="map-details" layout="column" layout-xs="column" style="margin-top:0%" layout-align="start center">
                <form class="form" layout="column" layout-xs="column" style="margin-top:0%" id="calculate-route" name="calculate-route" action="#"
                  method="get">
                  <md-card-title-text  layout-align="center center">
                    <span class="map-header" style="font-weight: 300;font-size:14px;color: #424242;"> Enter your location and select the branch to get the direction of that branch.</span>
                  </md-card-title-text>
                  <div md-theme="altTheme" layout="center center">
                    <md-input-container md-theme="altTheme" class="md-block input-map" style="color:#F9A825" style="width:100%" flex-gt-sm layout="center center">
                      <label md-theme="altTheme">Your Location</label>
                      <input md-theme="altTheme" id="origin" ng-model="directions.origin" required="required" color="primary">
                    </md-input-container>
                  </div>
                  <div layout="center center" style="width:100%"  layout-align="column" flex-gt-sm ng-cloak>
                    <md-input-container class="dropdown" layout-align="center center" style="width:100%" flex-gt-sm >
                      <label>Branch</label>
                      <md-select  ng-model="directions.destination" layout-align="center center">
                        <md-option  name="to" id="destination" required="required" value="cvsu silang " selected>Silang Branch</md-option>
                        <md-option name="to" id="destination" required="required" value="dasmarinas,cavite " selected>Dasmarinas Branch</md-option>
                      </md-select>
                    </md-input-container>
                  </div>
                  <md-button align="center center" ng-click="getDirections()" class="md-raised" type="submit">get direction</md-button>
                </form>
              </div>
          </md-card-title-text>
        </md-card-title>
        <google-map control="map.control" center="map.center" zoom="map.zoom" id="map">
          <marker coords="marker.center"></marker>
        </google-map>
        <div class="md-whiteframe-10dp" id="directionsList" ng-show="directions.showList" class="right-panel panel panel-primary"></div>
      </md-card>
    </div>
    <!-- Header Fab Button -->
    <section hide-xs hide-sm class="header-fab" layout="row" layout-sm="column" layout-align-xs="center center" layout-align-sm="end center"
      layout-wrap>
      <md-button class="md-fab md-whiteframe-4dp" id="fab-header" aria-label="Eat cake" ng-href="home.html">
        <md-icon>
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="#ffffff" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
          </svg>
        </md-icon>
      </md-button>
    </section>
    <!-- End of Header Fab Button -->
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