angular.module('MyApp', ['ngMaterial'])
.controller('AppCtrl', function($scope, $mdDialog) {
  $scope.orders = [
    { name: 'Black Pepper Burger',addon: 'with Iced Tea', wanted: true },
    { name: 'Regular Burger',addon: 'with Iced Tea', wanted: true },
    { name: 'Beef Pizza Burger',addon: 'no drinks', wanted: true },
    { name: 'Cheese Burger',addon: 'no drinks', wanted: true },
  ];

});
/**
Copyright 2016 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
**/