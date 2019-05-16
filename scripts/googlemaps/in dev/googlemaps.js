var service = new google.maps.DistanceMatrixService;
service.getDistanceMatrix({
  origins: [origin1, origin2],
  destinations: [destinationA, destinationB],
  travelMode: 'DRIVING',
  unitSystem: google.maps.UnitSystem.METRIC,
  avoidHighways: false,
  avoidTolls: false
}, function(response, status) {
  if (status !== 'OK') {
    alert('Error was: ' + status);
  } else {
    var originList = response.originAddresses;
    var destinationList = response.destinationAddresses;
    var outputDiv = document.getElementById('output');
    outputDiv.innerHTML = '';
    deleteMarkers(markersArray);

    var showGeocodedAddressOnMap = function(asDestination) {
      var icon = asDestination ? destinationIcon : originIcon;
      return function(results, status) {
        if (status === 'OK') {
          map.fitBounds(bounds.extend(results[0].geometry.location));
          markersArray.push(new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            icon: icon
          }));
        } else {
          alert('Geocode was not successful due to: ' + status);
        }
      };
    };

    for (var i = 0; i < originList.length; i++) {
      var results = response.rows[i].elements;
      geocoder.geocode({'address': originList[i]},
          showGeocodedAddressOnMap(false));
      for (var j = 0; j < results.length; j++) {
        geocoder.geocode({'address': destinationList[j]},
            showGeocodedAddressOnMap(true));
        outputDiv.innerHTML += originList[i] + ' to ' + destinationList[j] +
            ': ' + results[j].distance.text + ' in ' +
            results[j].duration.text + '<br>';
      }
    }
  }
});
