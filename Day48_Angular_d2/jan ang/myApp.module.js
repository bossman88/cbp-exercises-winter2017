angular.module('myApp', ['ngRoute']);


angular.module('myApp').directive('navigation', function(){
    return {
        templateUrl: 'navigation.html'
    };
});




angular.module('myApp').component('greetUser', {
    template: 'Hello, {{$ctrl.user}}!',
    controller: function () {
      this.user = 'world';
    }

  });