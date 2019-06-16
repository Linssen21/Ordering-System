angular.module('BlankApp', ['ngMaterial','ngMessages'])
  .controller('AppCtrl', function ($scope, $timeout, $mdSidenav, $mdDialog, $document) {

    $scope.status = '  ';
    $scope.customFullscreen = false;
    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');


    //card-headlines & sub-headlines//
    $scope.products = "Featured inspired products, served only for you.";
    $scope.prd1 = "Double grilled beef burger";
    $scope.prd2 = "Regular burger";
    $scope.prd3 = "Black pepper burger";
    $scope.prd4 = "Cheese burger";
    $scope.prd5 = "Ultimate beef bacon burger";
    $scope.prd6 = "Gourmet bacon burger";
    $scope.prd7 = "Chicken bbq burger";
    $scope.prd8 = "Signiture mouth melters burger";
    $scope.prd9 = "Bacon mushroom burger";


    $scope.products_content = "We believe in providing great-tasting, affordable products for customers “on-the-go”. By combining globally-sourced ingredients and world-class manufacturing practices, we guarantee that our products are among the best in its class.";
    $scope.prd1_content = "Regular prd5 with juicy burgerpatty, it is very affordable but wemake it so special for you.";
    $scope.prd2_content = "Regular cheese burger with real and big sized cheese inside.t";
    $scope.prd3_content = "A medium sized minute burger with juicy and big patty inside of it, Check it out now!";
    $scope.prd4_content = "Regular prd5 with juicy burger patty, it is very affordable but we make it so special for you.";
    $scope.prd5_content = "A burger inspired by hawaiian culture and has a very juicy beef patty inside of it.";
    $scope.prd6_content = "A great burger that will carry you in the European culture, take this moment and grab it now!";
    $scope.prd7_content = "Inspired by crispy and juicy chicken joy with white sour souce within it.";
    $scope.prd8_content = "Inspired by crispy and juicy chicken joy with white sour souce within it and a cheese addon.";
    $scope.prd9_content = "Inspired by crispy and juice chicken joy with white sour souce within it and doubled it for you.";
    $scope.about_content = "Mouth Melters Burger is an established food franchising company with over 26 years of expertise in the delivery of first-rate food products and food service operations. Since 1982, we have served millions of our one-of-a-kind, hearty, delicious burgers, in Minute Burger stores all over the Philippines. The company became more accessible to local consumers when the first set of franchisees joined its growing network of stores in 2003. To date, Minute Burger has over 130 franchisees that operate more than 350 locations nationwide. The continuously growing chain is indicative of its attractiveness as a franchising opportunity. We believe in providing great-tasting, affordable products for customers “on-the-go”. By combining globally-sourced ingredients and world-class manufacturing practices, we guarantee that our products are among the best in its class. Our franchise system is designed to simplify business for our franchise partners. With our automated supply chain software, you can focus on opening and operating multiple stores rather than worrying about keeping your stores stocked."

    //headlines & subheadlines binded in modals//

    //card-headlines & sub-headlines//
    products = "Featured inspired products, served only for you.";
    prd1 = "Double grilled beef burger";
    prd2 = "Regular burger";
    prd3 = "Black pepper burger";
    prd4 = "Cheese burger";
    prd5 = "Ultimate beef bacon burger";
    prd6 = "Gourmet bacon burger";
    prd7 = "Chicken bbq burger";
    prd8 = "Signiture mouth melters burger";
    prd9 = "Bacon mushroom burger";

    products_content = "We believe in providing great-tasting, affordable products for customers “on-the-go”. By combining globally-sourced ingredients and world-class manufacturing practices, we guarantee that our products are among the best in its class.";
    prd1_content = "Regular prd5 with juicy burgerpatty, it is very affordable but wemake it so special for you.";
    prd2_content = "Regular cheese burger with real and big sized cheese inside.t";
    prd3_content = "A medium sized minute burger with juicy and big patty inside of it, Check it out now!";
    prd4_content = "Regular prd5 with juicy burger patty, it is very affordable but we make it so special for you.";
    prd5_content = "A burger inspired by hawaiian culture and has a very juicy beef patty inside of it.";
    prd6_content = "A great burger that will carry you in the European culture, take this moment and grab it now!";
    prd7_content = "Inspired by crispy and juicy chicken joy with white sour souce within it.";
    prd8_content = "Inspired by crispy and juicy chicken joy with white sour souce within it and a cheese addon.";
    prd9_content = "Inspired by crispy and juice chicken joy with white sour souce within it and doubled it for you.";


    $scope.showprd1 = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(prd1)
          .textContent(prd1_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    $scope.showprd2 = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(prd2)
          .textContent(prd2_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    $scope.showprd3 = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(prd3)
          .textContent(prd3_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    $scope.showprd5 = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(prd5)
          .textContent(prd5_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    $scope.showChicken = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(chicken)
          .textContent(prd6_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    $scope.showprd7 = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(prd7)
          .textContent(prd7_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    $scope.showprd8 = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(prd8)
          .textContent(prd8_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    $scope.showprd9 = function (ev) {
      $mdDialog.show(
        $mdDialog.alert()
          .parent(angular.element(document.querySelector('#popupContainer')))
          .clickOutsideToClose(true)
          .title(prd9)
          .textContent(prd9_content)
          .ariaLabel('Alert Dialog Demo')
          .ok('Got it!')
          .targetEvent(ev)
      );
    };
    function buildToggler(componentId) {
      return function () {
        $mdSidenav(componentId).toggle();
      };
    }
  });