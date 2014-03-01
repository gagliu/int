// GOOGLE MAPS  
function initialize() {
    var myLatlng = new google.maps.LatLng(6.265614,-75.565897);
    var mapOptions = {
        zoom: 16,
        center: myLatlng,
        scrollwheel: false,
         mapTypeId: google.maps.MapTypeId.HYBRID

    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Hello World!'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);  