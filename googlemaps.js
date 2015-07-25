var map;
var names;
var nameTuples;
var yelpData;
var infowindow = new google.maps.InfoWindow();

$(document).ready(function() {
    $.ajax({
        url: './loadFromDb.php/',
        success: function(data){
            // console.log(data);
            names = JSON.parse(data);
            nameTuples = createNameTuples(names);
            // console.log(nameTuples);
            callYelp();
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

function callYelp() {
    var yelpResults;
    $.ajax({
        url: './callYelp.php/',
        success: function(data){
            // console.log(data);
            yelpResults = processYelpResults(data);
            var matches = makeMatches(yelpResults, nameTuples);
            // console.log(matches);
            plotOnMap(matches);
        }
    });
};

function processYelpResults(data) {
    var ret = new Array();
    var jsonData = JSON.parse(data);
    // console.log(jsonData);    
    var restaurantArray = jsonData.businesses;
    // console.log(restaurantArray);
    for (i = 0; i < restaurantArray.length; i++) {
        var restaurantObject = {
            name: restaurantArray[i].name,
            lat: restaurantArray[i].location.coordinate.latitude,
            lng: restaurantArray[i].location.coordinate.longitude,
            address: restaurantArray[i].location.address[0],
            region: restaurantArray[i].location.display_address
        }
        ret.push(restaurantObject);
    }
    yelpData = ret;
    return ret;
};

function makeMatches(yelpResults, nameTuples) {
    var matches = new Array();
    // console.log(yelpResults);
    // console.log(nameTuples);
    for (i = 0; i < nameTuples.length; i++) {
        var random1, random2, random3;
        var random1 = Math.floor((Math.random() * yelpResults.length));
        var random2 = Math.floor((Math.random() * yelpResults.length));
        var random3 = Math.floor((Math.random() * yelpResults.length));
        if (!checkYaletown(yelpResults, random1)) {
            random1 = Math.floor((Math.random() * yelpResults.length));
        }
        if (!checkYaletown(yelpResults, random2)) {
            random2 = Math.floor((Math.random() * yelpResults.length));
        }
        if (!checkYaletown(yelpResults, random3)) {
            random3 = Math.floor((Math.random() * yelpResults.length));
        }
        var restaurant1 = yelpResults[random1];
        var restaurant2 = yelpResults[random2];
        var restaurant3 = yelpResults[random3];
        var match = {
            person1: nameTuples[i][0],
            person2: nameTuples[i][1],
            person3: nameTuples[i][2],
            r1: restaurant1,
            r2: restaurant2,
            r3: restaurant3
        }
        matches.push(match);
    }
    return matches;
};

function checkYaletown(yelpResults, randomNum) {
    var region = yelpResults[randomNum].region;
    for (j = 0; j < region.length; j++) {
        if (region[j].includes('Yaletown')) {
            return true;
        }
    }
    return false;

}

function plotOnMap(matches) {
    var markerArray = new Array();
    for (i = 0; i < matches.length; i++) {
        var lat = matches[i].r1.lat;
        var lng = matches[i].r1.lng;
        var myLatlng = new google.maps.LatLng(lat, lng);
        var contentString;
        contentString = "<h1>" + matches[i].r1.name + "</h1>";
        contentString += "<h2>" + matches[i].r1.address + "</h2>";
        contentString += "<h3> People Attending: </h3>";
        var person1Name = matches[i].person1 === undefined ? "" :  matches[i].person1.PersonName;
        var person2Name = matches[i].person2 === undefined ? "" :  matches[i].person2.PersonName;
        var person3Name = matches[i].person3 === undefined ? "" :  matches[i].person3.PersonName;
        contentString += "<ul> <li>" + person1Name + "</li>" +
                            "<li>" + person2Name + "</li>" +
                            "<li>" + person3Name + "</li>" +
                          "</ul>";
        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hello World!",
            info: contentString
        });

        // var infowindow = new google.maps.InfoWindow({
        //     content: contentString
        // });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(this.info);
            infowindow.open(map,this);
        });
        marker.setMap(map);
        // markerArray.push(marker);
    }
    
};


function initialize() { // add namesAndYelpData as parameter
    map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 16,
        center: {lat: 49.276654, lng: -123.118591}
    });

    var contentString = "<h1>SAP is here</h1>"; // change this to returnContent(namesAndYelpData)

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var myLatlng = new google.maps.LatLng(49.276654, -123.118591);
    var image = 'http://alfredsin.com/images/sap-logo-black.png';
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'SAP',
    });
    marker.setIcon(image);
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

}

google.maps.event.addDomListener(window, 'load', initialize);
