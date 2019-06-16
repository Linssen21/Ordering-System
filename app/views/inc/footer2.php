 <md-content class="card-parent" id="mc-footer-bottom" layout="column" layout-xs="column" style="width:100%">
            <div class="footer-bottom" layout="row" layout-xs="row" layout-align="start center" style="width:100%">
                <div id="footer-links-div-parent" layout="row" layout-xs="row" layout-align="start center">
                    <div id="footer-links-div" layout="column" layout-xs="column" layout-align="start center">
                        <md-button id="footer-links-start">About</md-button>
                        <md-button id="footer-links-start">Charity</md-button>
                        <md-button id="footer-links-start">Careers</md-button>
                    </div>
                    <div id="footer-links-div" layout="column" layout-xs="column" layout-align="start center">
                        <md-button id="footer-links">Press Centre</md-button>
                        <md-button id="footer-links">Gallery</md-button>
                        <md-button id="footer-links">Business Opportunities</md-button>
                    </div>
                    <div id="footer-links-div" layout="column" layout-xs="column" layout-align="start center">
                        <md-button id="footer-links-end">Customer Care</md-button>
                        <md-button id="footer-links-end">Terms & Condition</md-button>
                        <md-button id="footer-links-end">Privacy & Policy</md-button>
                    </div>
                </div>
                <div hide-sm layout="row" layout-xs="row" layout-align="end center">
                    <img src="<?php echo URLROOT; ?>/img-assets/delivery_logo.png" width="400px;">
                  </div>
            </div>

        </md-content>
        <md-content class="md-padding card-parent" id="mc-footer-copyright" layout="column" layout-xs="column" layout-align="center center">
            <div layout="row" layout-xs="row" layout-align="start center">
                <div layout-align="center center">
                    <p id="footer-copyright" style="text-align:center">Copyrights &copy; 2018 NG Group</p>
                </div>
            </div>
        </md-content>
        <!-- End of Content Footer (More Info Links) -->
        </div>
        <!-- End Content Division -->
    </md-content>
    <!-- End of Main Content Section -->
  <!-- Angular Material requires Angular.js Libraries -->

    <script src="<?php echo URLROOT; ?>/ng-js-lib/angular.min.js"></script>
    <script src="<?php echo URLROOT; ?>/ng-js-lib/angular-animate.min.js"></script>
    <script src="<?php echo URLROOT; ?>/ng-js-lib/angular-aria.min.js"></script>
    <script src="<?php echo URLROOT; ?>/ng-js-lib/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="<?php echo URLROOT; ?>/ng-js-lib/angular-material.min.js"></script>

    <!-- Web Page Script -->
    <script src="<?php echo URLROOT; ?>/js/ng-main-js.js"></script>
    

    <!-- Firebase Integration -->
    <script src="<?php echo URLROOT; ?>/firebase-js-lib/firebase-integration.js"></script>
    
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCkUOkmSXIIn9twR_svLqyNwO0VGL0rA80",
            authDomain: "mcdelivery-webservice.firebaseapp.com",
            databaseURL: "https://mcdelivery-webservice.firebaseio.com",
            projectId: "mcdelivery-webservice",
            storageBucket: "mcdelivery-webservice.appspot.com",
            messagingSenderId: "225941647678"
        };
        firebase.initializeApp(config);
    </script>
    <script src='<?php echo URLROOT; ?>/ng-js-lib/angular.js'></script>

  <script src='<?php echo URLROOT; ?>/ng-js-lib/angular-route.min.js'></script>
  <script src='<?php echo URLROOT; ?>/ng-js-lib/angular-aria.min.js'></script>
  
  <script src='<?php echo URLROOT; ?>/ng-js-lib/svg-assets-cache.js'></script>
  <script src='<?php echo URLROOT; ?>/ng-js-lib/angular-material.js'></script>
  <script src='<?php echo URLROOT; ?>/js/ng-my-bag-list.js'></script>
  <script src="<?php echo URLROOT; ?>/js/ng-theme-provider.js"></script>


 
  
  

 
</body>

</html>
<!-- Copyright 2016 Gene Rodriguez. All Rights Reserved. -->
