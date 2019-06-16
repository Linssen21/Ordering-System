var app = angular.module("Demo", ['ngRoute','ngMaterial','ngMessages']);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl :"views/dashboard.html"
    })
    .when("/dashboard", {
        templateUrl :"views/dashboard.html"
    })
    .when("/orders", {
        templateUrl : "views/orders.html"
    })
    .when("/branches", {
        templateUrl : "views/branches.html"
    })
    .when("/send", {
        templateUrl : "views/send.html"
    })
    .when("/register", {
        templateUrl : "views/registration.html"
    })
    .when("/login", {
        templateUrl : "views/login.html"
    })
    .when("/acc-info", {
        templateUrl : "views/account-info.html"
    })
    document.getElementById('nav-btns1').focus();
});
 