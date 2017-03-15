
//retrieve the module
var module = angular.module('myApp');

//create a controller (just a function which prepare data)
module.controller('studentList', function($scope) {
    console.log($scope)     //scope represents all the variables within this controller scope
//set color to green
    $scope.color = 'pink';     //when u use this controller , in html will be this color


    $scope.total_students = 16;
  
    $scope.present_students = 15;

    $scope.countMissingStudents = function() {

        return $scope.total_students - $scope.present_students;
    }
    //this.property_of_the_controller = " lol"

    $scope.students = [
        {
            name: 'Kosta',
            present : true
        },
        {
            name: 'OG',
            present : true
        },
        {
            name: 'Kristina',
            present : false
        }
    ];


});


