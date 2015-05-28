jQuery(function($) {

	var memberConnectBar = $('#member-connect-bar');

	function getGretting() {
		var now = new Date();
		var hour = now.getHours();
		if (hour < 12) {
			return 'Good morning';
		} else if (hour < 18) {
			return 'Good afternoon';
		} else {}
		return 'Good evening';
	}

	function refreshCanvasHeight() {
		FB.Canvas.setSize({
			height: $('body').height() + 10
		});
	}

	function requestMemberConnectBar(fbData) {
		FB.api('/me', {
			fields: 'first_name, picture.width(120).height(120)'
		}, function(response) {
			console.log(response);
			var photoUrl = response.picture.data.url;
			var firstName = response.first_name;
			memberConnectBar.find('#member-profile-pic').attr('src', photoUrl);
			memberConnectBar.find('#member-connect-text').html(getGretting() + ', ' + firstName + '. Enjoy your <strong>35% Off</strong> for RPG Platium Membership');
		});

		var bookingForm = $('#booking-inform-form');
		if (bookingForm.length) {
			FB.api('/me', {
				fields: 'first_name, last_name, email, gender, location'
			}, function(response) {
				console.log(response);
				var locationString = response.location.name;
				var locationArray = locationString.split(', ');
				var countryString = locationArray.pop();
				bookingForm.find('input[name="inform[firstname]"]').val(response.first_name);
				bookingForm.find('input[name="inform[lastname]"]').val(response.last_name);
				bookingForm.find('input[name="inform[email]"]').val(response.email);
				bookingForm.find('input[name="inform[address]"]').val(locationString);
				bookingForm.find('input[name="inform[city]"]').val(locationArray.join(', '));
				bookingForm.find('select[name="inform[country]"] option:contains(' + countryString + ')').prop('selected', true);
			});
		}
	}

	$.getScript('//connect.facebook.net/en_US/sdk.js', function() {
		$('body').prepend('<div id="fb-root">');
		FB.init({
			appId: '128552630568785',
			version: 'v2.3',
			cookie: true
		});

		FB.getLoginStatus(function(data) {
			if (data.status == 'connected') {
				requestMemberConnectBar(data);
			} else {
				FB.login(requestMemberConnectBar, {
					scope: 'email, user_location, user_birthday'
				});
			}
		});

		refreshCanvasHeight();

		$.fx.off = true;

		$('.rate-name').on('click', function() {
			refreshCanvasHeight();
		});
	});

});
