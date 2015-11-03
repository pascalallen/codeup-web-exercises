// 3 DAY WEATHER FORECAST

(function(){
	var latInput = 29.423017;
	var lonInput = -98.48527;
	function getWeather (latitude, longitude) {
		$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		    APPID: "f2966b55b97c4a2cce26ed595955f65e",
		    lat: latitude,
		    lon: longitude,
		    cnt: 3,
		    units: "imperial"
		}).done(function(data) {
			$("#insertMap").html('');
			document.getElementById("cityName").innerHTML = data.city.name;
		    data.list.forEach(function(days){
		    	var icon = "<img src='http://openweathermap.org/img/w/" + days.weather[0].icon + ".png'>";
		    	var day = moment.unix(days.dt).format("ddd");
		    	var weather = "<div class='col-md-2'>";
		    	weather += "<span>" + day + "</span>" + "<br>";
		    	weather +=  "<strong class='temp'>" + Math.round(days.temp.max) + "°";
		    	weather += "/" + Math.round(days.temp.min) + "°" + "</strong>" + "<br>";
		    	weather += icon + "<br>";
		    	weather += "<span>Clouds: " + "</span>" + days.clouds + "<br>";
		    	weather += "<span>Humidity: " + "</span>" + days.humidity + "<br>";
		    	weather += "<span>Wind: " + "</span>" + Math.round(days.speed) + "<br>";
		    	weather += "<span>Pressure: " + "</span>" + Math.round(days.pressure) + "<br>";
		    	weather += "</div>";
		    	$('#insertMap').append(weather);
		    });
		});
	}
	document.getElementById("lat").value = latInput;
	document.getElementById("lon").value = lonInput;
	function go () {
		latInput = document.getElementById("lat").value;
		lonInput = document.getElementById("lon").value;
		getWeather(latInput, lonInput);
	}
	document.getElementById("button").addEventListener("click", go, false);
	getWeather(latInput, lonInput);

	// GOOGLE MAPS API

    var mapOptions = {
        zoom: 10,
        center: {
            lat: latInput,
            lng: lonInput
        },
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    console.log(mapOptions);
    // set center method 
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	var marker = new google.maps.Marker({
		animation: google.maps.Animation.DROP,
	    position: {lat: latInput, lng: lonInput},
	    draggable: true,
	    map: map
	});
	marker.addListener('click', toggleBounce);
	getWeather(latInput, lonInput);
	function toggleBounce() {
	  if (marker.getAnimation() !== null) {
	    marker.setAnimation(null);
	  } else {
	    marker.setAnimation(google.maps.Animation.BOUNCE);
	  }
	}

})();