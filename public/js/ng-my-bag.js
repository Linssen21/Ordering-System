(function () {
  'use strict';
  angular
      .module('MyApp', ['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
      .config(['$mdIconProvider', function($mdIconProvider) {
        $mdIconProvider.icon('md-close', 'img/icons/ic_close_24px.svg', 24);
      }])
      .controller('MyBagCtrl', DemoCtrl);

  function DemoCtrl ($timeout, $q) {
    var self = this;

    self.readonly = false;

    self.tags = [];
    self.vegObjs = [
      {
        'name' : 'Black Pepper Burger',
        'type' : 'with Iced Tea'
      },
      {
        'name' : 'Regular Burger',
        'type' : 'no drinks'
      },
      {
        'name' : 'Cheese Burger',
        'type' : 'with Iced Tea'
      }
    ];

  }
  
})();


/**
Copyright 2016 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
**/