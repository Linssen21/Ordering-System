<!DOCTYPE html>
<html>

<head
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width">
  <!-- Chrome Browser therme color in Android -->
  <meta name="theme-color" content="#F9A825">
  <!-- Material Design Resource CSS (Icons, Fonts) -->
  <link href="<?php echo URLROOT; ?>/AdminPanel/public/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo URLROOT; ?>/AdminPanel/public/css/fonts.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/AdminPanel/public/css/ng-main-style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/AdminPanel/public/css/ng-home.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/AdminPanel/public/css/angular-material.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>

<body ng-app="Demo" ng-cloak layout="row">
  <!-- Toolbar Section -->
  <div layout="row" flex="25">
    <md-sidenav style="background-color:#F9A825;" class="md-sidenav-left  md-whiteframe-6dp" md-component-id="left" md-is-locked-open="$mdMedia('gt-md')">
      <div style="height:200px;background-color:#F9A825;align-items:center">
        <div  id="anim" style="margin-left:40px;margin-top:50px;width:200px;height:200px"></div>
        <md-chips>
          <md-chip class="md-whiteframe-4dp" layout-align="center center" style="background-color:#fff;align-self:center;margin-top:20px;margin-left:90px;">
            <center style="font-weight:400;font-size:12px;">Admin Panel</center>
          </md-chip>
        </md-chips>
      </div>
      <md-card layout-margin class="md-whiteframe-10dp" style="height:100%; margin-top:120px">
        <div layout="column" layout-xs="column" style="text-align:left" ng-init="style={'background-color' : '#ffffff', 'color':'#424242'}" ng-init="styles={'background-color' : '#F9A825', 'color':'#ffffff'}" ng-init="styless={'background-color' : '#F9A825', 'color':'#ffffff'}">
          <md-divider ng-if="!$last"></md-divider>
          <!-- Dashboard -->
          <md-button ng-click="style1=styles" ng-mouseover="style1=styles" ng-style="style1" class="focus" id="nav-btns1" href="<?php echo URLROOT; ?>/admin" layout="row" style="height:40px">
            <i id="nav-ic" class="zmdi zmdi-view-dashboard" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
            <h5 style="margin-left:20px">Dashboard</h5>
          </md-button>
          <!-- End of Dashboard -->
          <md-divider ng-if="!$last"></md-divider>
          <!-- Orders -->
          <md-button ng-click="style1=style"  id="nav-btns" href="<?php echo URLROOT; ?>/admin/orders" layout="row" style="height:40px">
            <i id="nav-ic" class="zmdi zmdi-star-outline" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
            <h5 style="margin-left:20px;" >Orders</h5>
          </md-button>

            <md-divider ng-if="!$last"></md-divider>
          <!-- Orders -->
          <md-button ng-click="style1=style"  id="nav-btns" href="<?php echo URLROOT; ?>/admin/customers" layout="row" style="height:40px">
            <i id="nav-ic" class="zmdi zmdi-star-outline" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
            <h5 style="margin-left:20px;" >Customers</h5>
          </md-button>

          <!-- End of Orders -->
          <md-divider ng-if="!$last"></md-divider>
          <!-- Orders -->
          <md-button ng-click="style1=style"  id="nav-btns"  href="<?php echo URLROOT; ?>/admin/branches" layout="row" style="height:40px">
            <i id="nav-ic" class="zmdi zmdi-gps-dot" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
            <h5 style="margin-left:20px">Branches</h5>
          </md-button>
          <!-- End of Branches -->
          <md-divider ng-if="!$last"></md-divider>
          <!-- Send Confirmation -->
          <md-button ng-click="style1=style"  id="nav-btns"  href="<?php echo URLROOT; ?>/admin/send" layout="row" style="height:40px">
            <i id="nav-ic" class="zmdi zmdi-email" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
            <h5 style="margin-left:20px">Send Confirmation</h5>
          </md-button>
          <!-- End of Send Confirmation -->
          <md-divider ng-if="!$last" style="width:100%"></md-divider>
          <!-- Logout -->
          <md-divider ng-if="!$last" style="width:100%;margin-top:70px"></md-divider>
          <div style="position:fixed;bottom:10px;margin:0px;padding:0px">
              
          <md-button ng-click="style1=style" href="<?php echo URLROOT; ?>/uadmin/adminlogout"  id="nav-btn"  layout="row" style="height:40px;width:140%">
              <i id="nav-ic" class="zmdi zmdi-power" style="font-size:24px;margin-top:0px;margin-left:10px;"></i>
              <h5 style="margin-left:20px;margin-right:30px">Sign Out</h5>
            </md-button>
            <!-- Logout --></div>
        </div>
      </md-card>
    </md-sidenav>
    <!-- End of SideNav -->
    <!-- Main Content -->
  </div>