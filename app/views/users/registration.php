<?php require APPROOT. '/views/inc/header3.php' ; ?>
<body ng-controller="MyBagCtrl as ctrl" layout="column" ng-cloak="" class="chipsdemoBasicUsage" ng-app="MyApp" style="height: 500px;"
    ng-cloak>

    <!-- Main Content Section -->
    
      <!-- Main Content Section -->
    <md-content id="main-content">
        <!-- Orders Card Section -->
         <form action="<?php echo URLROOT; ?>/users/registration" method="post">
        <div ng-controller="MyBagCtrl as ctrl" layout="column" ng-cloak="" layout-align-xs="center center" layout-align-md="center center"  layout-align-lg="center center" layout-align-sm="center center" class="chipsdemoBasicUsage"
            ng-app="MyApp">

            <md-card class="header1-cards md-whiteframe-10dp" layout-align-xs="center center" layout-align-gt-md="center center" layout-align-sm="center center" layout-align-lg="center center" style="padding:50px;">

                <md-button ng-href="<?php echo URLROOT; ?>/users/login" style="margin-top:-30px;position: relative;align-self:flex-start;left:-40px" class="md-icon-button md-accent" aria-label="Favorite">
                    <md-icon><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#000000" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" />
                    </svg></md-icon>
                  </md-button>

                <h2 class="md-display-1" layout-align-xs="center center" layout-align-gt-md="center center" layout-align-sm="center center" layout-align-lg="center center">Register</h2>
                <h2 class="md-title" layout-align-xs="center center" layout-align-gt-md="center center" layout-align-sm="center center" layout-align-lg="center center">Fill up the following informations.
                </h2>
                <div>
                    <md-content class="md-no-momentum" layout="column" layout-xs="column" layout-align-md="center center" layout-align-lg="center center" layout-align="center center" layout-align-xs="center center" layout-align-sm="center center">
                        <div>
                            <md-input-container class="md-icon-float md-block">
                                <!-- Use floating label instead of placeholder -->
                                <label>Full Name</label>
                                <md-icon style="color:#FF6F00" md-svg-src="img/icons/ic_person_24px.svg" class="name"></md-icon>
                                <input required ng-model="user.name" name="name" type="text"><span><?php echo $data['name_err']; ?></span>
                            </md-input-container>

                            <md-input-container class="md-block">
                                <!-- Use floating placeholder instead of label -->
                                <md-icon style="color:#FF6F00" md-svg-src="img/icons/ic_email_24px.svg" class="email"></md-icon>
                                <input required ng-model="user.email" type="email" name="email" placeholder="Email (required)" ng-required="true"><span><?php echo $data['email_err']; ?></span>
                            </md-input-container>
                            
                        </div>
                        <div style="margin-top:-20px;">

                            <md-input-container class="md-block">
                                <md-icon> <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <md-button class="md-raised" id="card-button" style="background-color:#F9A825; color:white;width:200px">Sign Up</md-button>
                                    <path fill="#FF6F00" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z" />
                                </svg></md-icon>
                                <input  required ng-model="user.password" type="password" name="password" placeholder="Password" ng-required="true"><span><?php echo $data['password_err']; ?></span>
                            </md-input-container>

                            <md-input-container class="md-block">
                                <md-icon> <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#FF6F00" d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7</span>
                            </md-input-container> 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z" />
                                </svg></md-icon>
                                <input type="password" name="confirm_password" placeholder="Confirm Password" ng-required="true"><span><?php echo $data['confirm_password_err']; ?></span>
                            </md-input-container>

                                  <md-input-container class="md-block">
                                <!-- Use floating placeholder instead of label -->
                                <md-icon style="color:#FF6F00" md-svg-src="img/icons/ic_email_24px.svg" class="email"></md-icon>
                                <input type="text" name="address" placeholder="Address (required)" ng-required="true"><span><?php echo $data['address_err']; ?>

                        </div>
                    </md-content>
                </div>
                <div style="margin-top:10px" layout-align="column">
                    <md-button class="md-raised" id="card-button" type="submit" style="background-color:#F9A825; color:white;width:200px">Sign Up</md-button>
                </div>
            </md-card>
        </div>
    </form>
        <!-- End of Orders Card Section -->
    </md-content>
    <?php require APPROOT. '/views/inc/footer3.php' ; ?>