// Code goes here
// Instantiate the app, the 'myApp' parameter must 
// match what is in ng-app
var myApp = angular.module('myApp', []);

// Create the controller, the 'ToddlerCtrl' parameter 
// must match an ng-controller directive
myApp.controller('Yolo', function ($scope,$http) {
  
   $http.get('task.json').success(function (data){
        $scope.tasks = data;
    });
    
    $scope.add= function(){
      
       $scope.bla="sijs";
        $scope.tasks.push({ name:$scope.Name, location:$scope.location, phone:$scope.phone });
    }
    $scope.delete=function(){
        var result=confirm('Are you sure?');
        if(result==true)
        {
            var index=this.$index;
            $scope.tasks.splice(index,1);
        }
    }
    $scope.edit=function(name)
    {
        var index=this.$index;
        var product=$scope.tasks[index];
        $scope.Name=product.name;
        $scope.location=product.location;
        $scope.phone=product.phone;
    }
    $scope.save=function()
    {
        var index=getindex($scope.Name);
        $scope.tasks[index].name=$scope.Name;
        $scope.tasks[index].location=$scope.location;
        $scope.tasks[index].phone=$scope.phone;
    }
    function getindex(name)
    {
        for(var i=0;i<$scope.tasks.length;i++)
        if($scope.tasks[i].name==name)
        return i;
        return -1;
    }
 
  
});