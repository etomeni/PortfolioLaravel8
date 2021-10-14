$(document).ready(function () {

	// HEADER INTRO 
	$(document).on('click', '.headerIntroBTN', function (e) {
		e.preventDefault();
		// console.log("hello");

		var subData = {
			'itext': $('#itext').val(),
			'name': $('#name').val(),
			'propic': $('#propic').val(),
			'description': $('#description').val()
		}

		// console.log(subData);

		$.ajax({
			type: "POST",
			url: "/admin_home",
			data: subData,
			dataType: "json",
			beforeSend: function () {
				console.log('hello');
			},
			success: function (response) {
				// console.log(response);
				

				// USE SWEET ALERT TO DISPLAY MESSAGES
			}



		});
	});


	// SKILLS OVERVIEW 
	$(document).on('click', '.skillsOverViewBTN', function (e) {
		e.preventDefault();
		// console.log("hello");

		var subData = {
			'hTitle': $('#hTitle').val(),
			'Skilldescription': $('#Skilldescription').val()
		}

		// console.log(subData);

		$.ajax({
			type: "POST",
			url: "/admin_home",
			data: subData,
			dataType: "json",
			beforeSend: function () {
				console.log('hello');
			},
			success: function (response) {
				// console.log(response);
				

				// USE SWEET ALERT TO DISPLAY MESSAGES
			}



		});
	});

	// HEADER INTRO 
	$(document).on('click', '.headerIntroBTN', function (e) {
		e.preventDefault();
		// console.log("hello");

		var subData = {
			'itext': $('#itext').val(),
			'name': $('#name').val(),
			'propic': $('#propic').val(),
			'description': $('#description').val()
		}

		// console.log(subData);

		$.ajax({
			type: "POST",
			url: "/admin_home",
			data: subData,
			dataType: "json",
			beforeSend: function () {
				console.log('hello');
			},
			success: function (response) {
				// console.log(response);
				

				// USE SWEET ALERT TO DISPLAY MESSAGES
			}



		});
	});



});