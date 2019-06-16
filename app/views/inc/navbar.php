 <md-toolbar class="toolbar md-whiteframe-6dp">
        <div class="md-toolbar-tools" fixed-toolbar>
          <md-button class="md-icon-button" aria-label="Settings" ng-click="toggleLeft()">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="#fff" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
            </svg>
          </md-button>
          <h2 flex md-truncate>Mouth Melters</h2>
          <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>">Home</md-button>
          <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>/pages/menu">Menu</md-button>
         <!--  <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>/pages/directions">Location</md-button> -->

          <?php if(isset($_SESSION['user_id'])) : ?>
          <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>/bags">My Bag</md-button>
          <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>/orders/orderlist">Orders</md-button>
          <md-button style="margin-right:-10px" hide-xs><?php echo $_SESSION['user_name']; ?></md-button>
          <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>/users/logout">Logout</md-button>
         
        <?php else: ?>
           <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>/users/login">Login</md-button>
            <md-button style="margin-right:-10px" hide-xs ng-href="<?php echo URLROOT; ?>/users/registration">Register</md-button>
        <?php endif; ?>

          <md-button class="md-icon-button" aria-label="Settings" ng-click="toggleLeft()">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="#fff" d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z"
              />
            </svg>
          </md-button>
        </div>
      </md-toolbar>
    <!-- End of Toolbar Section -->

    <!-- SideNav Section -->
    <md-sidenav class="md-sidenav-left" style="bottom:0px" md-component-id="left" md-whiteframe="4">
        <md-toolbar fixed-toolbar>
            <h1 class="md-toolbar-tools">McMenu</h1>
        </md-toolbar>
        <md-content layout-margin>
            <div layout="column" layout-xs="column" style="text-align:left">
                <p style="margin-left:8px">
                    List of menu's.
                </p>
                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons">
                    <p id="menu-text">Home</p>
                </md-button>

                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons">
                    <p id="menu-text">Menu</p>
                </md-button>

                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons">
                    <p id="menu-text">My Bag</p>
                </md-button>

                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons">
                    <p id="menu-text">Account</p>
                </md-button>
                <md-divider ng-if="!$last"></md-divider>
                <md-button id="nav-buttons" ng-click="showAlert($event)">
                    <p id="menu-text">About</p>
                </md-button>
            </div>
        </md-content>
    </md-sidenav>
    <!-- End of SideNav Section -->