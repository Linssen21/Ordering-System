<?php require APPROOT. '/views/inc/header.php' ; ?>
<!-- Body -->
<body ng-app="BlankApp" ng-controller="AppCtrl" layout="column" style="height: 500px;" ng-cloak>
    <!-- Toolbar Section -->
   <?php require APPROOT.'/views/inc/navbar.php'; ?>
    <!-- End of Toolbar Section -->
    <!-- SideNav Section -->
    <md-sidenav class="md-sidenav-left" style="bottom:0px" md-component-id="left" md-whiteframe="4">
        <md-toolbar fixed-toolbar>
            <h1 class="md-toolbar-tools">Menu</h1>
        </md-toolbar>
        <md-content layout-margin>
            <div layout="column" layout-xs="column" style="text-align:left">
                <p style="margin-left:8px">
                    List of menu's.
                </p>
                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons" ng-href="directions.html">
                    <p id="menu-text">Nearby Branches</p>
                </md-button>
                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons" ng-href="online-ordering.html">
                    <p id="menu-text">Online Ordering</p>
                </md-button>
                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons" ng-href="my-bag.html">
                    <p id="menu-text">My Bag</p>
                </md-button>
                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons">
                    <p id="menu-text">Contact Us</p>
                </md-button>
                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons" ng-href="about.html">
                    <p id="menu-text">About</p>
                </md-button>
            </div>
        </md-content>
    </md-sidenav>
    <!-- End of SideNav Section -->
    <!-- Main Content Section -->
    <md-content style="background-color:#FAFAFA">
        <!-- Content Division -->
        <div ng-controller="AppCtrl" layout="column" ng-cloak>
            <div class="home-sections" id="home-header-1"></div>
            <div class="home-sections" id="home-header-2" layout="row" layout-align="end end">
                <md-button id="header-btn-1" class="md-raised">Learn More</md-button>
            </div>
            <div class="home-sections" id="home-header-3" layout="row" layout-align="start end">
                <md-button id="header-btn-2" class="md-raised" ng-href="directions.html">Learn More</md-button>
            </div>
            <div class="home-sections" id="home-header-4" layout="row" layout-align="end end">
                <md-button id="header-btn-3" class="md-raised" ng-href="online-ordering.html">Learn More</md-button>
            </div>
            <div class="home-sections" id="home-header-5" layout="row" layout-align="start end">
                <md-button id="header-btn-4" class="md-raised">Learn More</md-button>
            </div>
        </div>
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
        <?php require APPROOT. '/views/inc/footer.php'; ?>