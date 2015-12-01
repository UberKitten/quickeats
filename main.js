var response;
var usercoords;
function showbusiness(i){
	if(response.results.length > 0){
		var business = response.results[i];
		$("#bizname").text(business.name);
		$("#bizrating").text(business.rating);
		$("#bizaddress").text(business.vicinity);

		if (business.photos != null && business.photos.length > 0)
		{
			var photoparams = {
				key: response.browserapikey,
				photoreference: business.photos[0].photo_reference,
				maxheight: 1024, // should probably change this based on client
				maxwidth: 768
			};
			$("#bizpicture").attr("src", "https://maps.googleapis.com/maps/api/place/photo?" + $.param(photoparams));
		}
		else
		{
			$("#bizpicture").attr("src", "QuickEats_Transparent2.png");
		}

		$("#directionsbtn").attr("href", "https://www.google.com/maps?hl=en&q=" + business.geometry.location.lat + "%2C" + business.geometry.location.lng);

		/*$("#bizratingpic").attr("src",business.rating_img_url_large);
		if(business.rating_img_url_large == null){
			$("#bizratingpic").hide();
		}
		else
		{
			$("#bizratingpic").show();
		}
		*/
	}
};

var businessindex = 0;
function nextbusiness(){
    showbusiness(businessindex);
	businessindex++;
};

function zipInputSubmit() {
	$('#myModal_getZip').modal('hide');
};

var locationSuccess = function(position) {
	usercoords = position.coords;
	$('#myModal_Loading').modal('hide');
};

var locationError = function(position) {
	$('#myModal_Loading').modal('hide');
	$('#myModal_getZip').modal({
		backdrop: 'static',
		keyboard: false
	});
};
function getCheckbox(){
	var chkArray = [];

	$("#checkboxlist input:checked").each(function() {
		chkArray.push($(this).val());
	});

	var selected;
	selected = chkArray.join(',') + ",";

	if(selected.length > 1){
		checkboxSelect = selected;
	}
}
function getRadio() {

}

function loadNextPage() {
	var options = {
		pagetoken: response.next_page_token
	};
	loadDataWithOptions(options);
}

function loadData() {
	var options = {
		zip: $("#ZipCode").val(),
		latitude: usercoords.latitude,
		longitude: usercoords.longitude,
		minprice: $("input:checkbox[name=priceCheckboxes]:checked").first().val(),
		maxprice: $("input:checkbox[name=priceCheckboxes]:checked").last().val(),
		maxdistance: $("input:radio[name=distanceRadios]:checked").val()
	};

	loadDataWithOptions(options);
}

function loadDataWithOptions(options) {
	$.getJSON( "restaurants.txt", options, function(data) {
		response = data;
		nextbusiness();
	});
}


$(document).ready(function() {
	if ("geolocation" in navigator) {
		$('#myModal_Loading').modal( {
			backdrop: 'static',
			keyboard: false
		});

		var geo_options = {
			timeout	: 5000
		};
		navigator.geolocation.getCurrentPosition(locationSuccess, locationError, geo_options);
	} else {
		$('#myModal_getZip').modal({
			backdrop: 'static',
			keyboard: false
		});
	}
	$("#saveFilters").click(function(){
		getCheckbox();
		getRadio();
		$('myModal_Filters').modal('hide');
	});
});	
