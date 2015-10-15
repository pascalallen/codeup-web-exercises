(function() {
    "use strict";
	var fujiya = { lat: 29.5259493, lng: -98.5666400 };

	var thaiSpice = { lat: 29.572960, lng: -98.324739 };

	var drafthouse = { lat: 29.697732, lng: -98.102715 };

    var mapOptions = {
        zoom: 10,
        center: {
            lat: thaiSpice.lat,
            lng: thaiSpice.lng
        },
        mapTypeId: google.maps.MapTypeId.HYBRID
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	var markerFujiya = new google.maps.Marker({
		animation: google.maps.Animation.DROP,
	    position: fujiya,
	    map: map
	});

	var markerThaispice = new google.maps.Marker({
		animation: google.maps.Animation.DROP,
	    position: thaiSpice,
	    map: map
	});

	var markerDrafthouse = new google.maps.Marker({
		animation: google.maps.Animation.DROP,
	    position: drafthouse,
	    map: map
	});

	var infoFujiya = new google.maps.InfoWindow({
	    content: '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Fujiya Japanese Garden</h1>'+
      '<div id="bodyContent">'+
      '<p>Established eatery & sushi bar with kimono-clad servers, classic fare, lunch specials & happy hour.</p>'+
      '</div>'+
      '</div>'
	});

	markerFujiya.addListener('click', function() {
		infoFujiya.open(map, markerFujiya);
	});
	markerFujiya.addListener('click', toggleBounce);

	function toggleBounce() {
	  if (markerFujiya.getAnimation() !== null) {
	    markerFujiya.setAnimation(null);
	  } else {
	    markerFujiya.setAnimation(google.maps.Animation.BOUNCE);
	  }
	}

})();

