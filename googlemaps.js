var map;
var names;
var nameTuples;
var yelpData;
// var namesAndYelpData = combineNamesAndYelpData(names, yelpData);
// var mapPlot = plotOnMap(namesAndYelpData);

$(document).ready(function() {
    $.ajax({
        url: './loadFromDb.php/',
        success: function(data){
            // console.log(data);
            names = JSON.parse(data);
            nameTuples = createNameTuples(names);
            console.log(nameTuples);
            yelpData = callYelp(nameTuples.length);
        }
    });
});

function createNameTuples(names) {
    var nameTuplesContainer = new Array();
    if (names.length > 2) {
        while (names.length > 2) {
            var nameTuple = new Array();
            for (i = 0; i < 3; i++) {
                nameTuple[i] = names.pop();
            }
            nameTuplesContainer.push(nameTuple);
        }
        if (names.length > 0) {
            var nameTuple = new Array();
            for (var i = 0; i < names.length; i++) {
                nameTuple[i] = names.pop();
            }
            nameTuplesContainer.push(nameTuple);
        }
    } else { // names.length <= 2
        var nameTuple = new Array();
        for (var i = 0; i < names.length; i++) {
            nameTuple[i] = names.pop();
        }
        nameTuplesContainer.push(nameTuple);
    }
    return nameTuplesContainer;
};

function callYelp(numEntries) {
    var url = "http://api.yelp.com/v2/search?term=restaurants";
    var location = "Vancouver";
    var latLng = "49.276654, -123.118591";
    var radius = 1500;
    url += "&location=" + location + "&cll=" + latLng + "&radius_filter=" + radius;
    console.log(url);
};

function plotOnmap(namesAndYelpData) {
    
};


function initialize() { // add namesAndYelpData as parameter
    map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 16,
        center: {lat: 49.276654, lng: -123.118591}
    });

    var contentString = "<h1>Bob and Alison</h1><p>The Parlour</p>"; // change this to returnContent(namesAndYelpData)

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var myLatlng = new google.maps.LatLng(49.276654, -123.118591);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'SAP'
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

    addMarker();

}

google.maps.event.addDomListener(window, 'load', initialize);

function addMarker() {
    var myLatlng = new google.maps.LatLng(49.2827, -123.1207);

    var contentString = "<h1>l0l</h1><p>Vancouver</p>"; // change this to returnContent(namesAndYelpData)

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        title:"Hello World!"
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

    marker.setMap(map);
}