(function () {
  'use strict';
  angular
    .module('MyApp', ['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
    .config(['$mdIconProvider', function ($mdIconProvider) {
      $mdIconProvider.icon('md-close', 'img/icons/ic_close_24px.svg', 24);
    }])
    .controller('MyBagCtrl', function ($scope, $mdDialog) {
      $scope.orders = [
        { name: 'Black Pepper Burger', addon: 'with Iced Tea', wanted: true },
        { name: 'Regular Burger', addon: 'with Iced Tea', wanted: true },
        { name: 'Beef Pizza Burger', addon: 'no drinks', wanted: true },
        { name: 'Cheese Burger', addon: 'no drinks', wanted: true },
      ];
    });

     
})();


/**
Copyright 2016 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
**/