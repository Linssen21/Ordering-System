angular.module('BlankApp', ['ngMaterial','google-maps'])
  .controller('AppCtrl', function ($scope, $timeout, $mdSidenav,$mdDialog, $document) {
    

    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    
    
    function buildToggler(componentId) {
      return function() {
        $mdSidenav(componentId).toggle();
      };
    }
   
         
      
    
      // map object
      $scope.map = {
        control: {},
        center: {
            latitude: 14.240676,
            longitude: 120.9790667,
            

        },
        zoom: 17

      };
      
      // marker object
      $scope.marker = {
        center: {
            latitude: 14.240676,
            longitude: 120.9790667
        },
      }
    
      
      // instantiate google map objects for directions
      var directionsDisplay = new google.maps.DirectionsRenderer();
      var directionsService = new google.maps.DirectionsService();
      var geocoder = new google.maps.Geocoder();
      // directions object -- with defaults
      $scope.directions = {
        origin: origin,
        destination: destination,
        showList: true,
        gestureHandling: 'greedy'
      }
      
      
      // get directions using google maps api
      $scope.getDirections = function () {
        var request = {
          origin: $scope.directions.origin,
          destination: $scope.directions.destination,
          travelMode: google.maps.DirectionsTravelMode.DRIVING
          
        };
        directionsService.route(request, function (response, status) {
          
          if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            directionsDisplay.setMap($scope.map.control.getGMap());
            directionsDisplay.setPanel(document.getElementById('directionsList'));
            $scope.directions.showList = true;
            
          } else {
            alert('Google route unsuccesfull!');
          }
        });
      }
       
  });