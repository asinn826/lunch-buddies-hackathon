var map;
function initialize() {
    map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 16,
    center: {lat: 49.276654, lng: -123.118591}
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
