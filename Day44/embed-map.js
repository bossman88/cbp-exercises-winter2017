window.addEventListener('load', function() {
    var uluru = {
       
        lat: 50.0755,  //50.078114
        lng: 14.4378   //14.427742
    };

    function initMap(point) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: point,
            MapTypeId : 'satellite'
        });

        
        var marker = new google.maps.Marker({
            position: point,
            map:map,
            lat: 50.078114,
            lng: 14.427742
            
        })
    }

    initMap(uluru);
});