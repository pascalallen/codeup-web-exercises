// 3 DAY WEATHER FORECAST
(function(){
	function getWeather (latitude, longitude) {
		$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		    APPID: "f2966b55b97c4a2cce26ed595955f65e",
		    lat: latitude,
		    lon: longitude,
		    cnt: 3,
		    units: "imperial"
		}).done(function(data) {
			document.getElementById("insertMap").innerHTML = "";
			document.getElementById("cityName").innerHTML = data.city.name;
		    data.list.forEach(function(days){
		    	var icon = "<img src='http://openweathermap.org/img/w/" + days.weather[0].icon + ".png'>";
		    	var day = moment.unix(days.dt).format("ddd");
		    	var weather = "<div class='col-md-2'>";
		    	weather += "<span>" + day + "</span>" + "<br>";
		    	weather +=  "<strong class='temp'>" + Math.round(days.temp.max) + "°";
		    	weather += "/" + Math.round(days.temp.min) + "°" + "</strong>" + "<br>";
		    	weather += icon + "<br>";
		    	weather += "<span>" + "Clouds: " + "</span>" + days.clouds + "<br>";
		    	weather += "<span>" + "Humidity: " + "</span>" + days.humidity + "<br>";
		    	weather += "<span>" + "Wind: " + "</span>" + Math.round(days.speed) + "<br>";
		    	weather += "<span>" + "Pressure: " + "</span>" + Math.round(days.pressure) + "<br>";
		    	weather += "</div>";
		    	$('#insertMap').append(weather);
		    });
		});
	}
	document.getElementById("lat").value = 29.423017;
	document.getElementById("lon").value = -98.48527;
	function go () {
		var latInput = document.getElementById("lat").value;
		var lonInput = document.getElementById("lon").value;
		getWeather(latInput, lonInput);
	}
	document.getElementById("button").addEventListener("click", go, false);
	go();

	// GOOGLE MAPS API
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