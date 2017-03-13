window.addEventListener('load', function(){
        if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(location) {
        console.log(location);
    }, function(error) {
        console.error(error);
    });
}

});
