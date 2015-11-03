var businesses;
var x=1;
function showbusiness(i){
		if(businesses.length > 0){
			var business = businesses[i];
			var business_address = business.location.display_address;
			var display_address = business_address.join();
			$("#bizname").text(business.name);
			$("#bizphone").text(business.display_phone);
			$("#bizrating").text(business.rating);
			$("#bizpicture").text(business.image_url)
			$("#bizaddress").text(display_address);
			
		}
	};
function nextbusiness(){
    showbusiness(x);
	x++;
};
$(document).ready(function() {
	$.getJSON( "restaurants.php", function(data) {
		businesses = data.businesses;
		showbusiness(0);
	});
	
});	