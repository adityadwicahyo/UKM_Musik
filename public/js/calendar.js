"use strict";

// function that creates dummy data for demonstration
function createDummyData() {
	var date = new Date();
	var data = {};
	var kegiatans = {!! json_encode($kegiatans->toArray()) !!};
	var jumlahEvent = 10;
	var tanggalEvent = 18;
	var bulanEvent = 4;
	var tahunEvent = 2018;

	//Berapa tahun
	// for (var i = 0; i < 1; i++) {
		data[tahunEvent] = {};

		//Berapa bulan dalam 1 tahun
		// for (var j = 0; j < 1; j++) {
			data[tahunEvent][bulanEvent] = {};

			//Berapa hari dalam 1 bulan
			// for (var k = 0; k < 1; k++) {
				var l = tanggalEvent;

				try {
					data[tahunEvent][bulanEvent][l].push({
						startTime: "10:00",
						endTime: "12:00",
						text: "Some Event Here"
					});
				} catch (e) {
					data[tahunEvent][bulanEvent][l] = [];
					data[tahunEvent][bulanEvent][l].push({
						startTime: "10:00",
						endTime: "12:00",
						text: "Some Event Here"
					});
				}
			// }
		// }
	// }

	// data[2018][4][23] = {firstName:"John", lastName:"Doe", age:46};
	return data;
}

// creating the dummy static data
var data = createDummyData();

// initializing a new calendar object, that will use an html container to create itself
var calendar = new Calendar(
  "calendarContainer", // id of html container for calendar
  "small", // size of calendar, can be small | medium | large
  [
    "Wednesday", // left most day of calendar labels
    3 // maximum length of the calendar labels
    ],
    [
    "#E91E63", // primary color
    "#C2185B", // primary dark color
    "#FFFFFF", // text color
    "#F8BBD0" // text dark color
    ]
    );

// initializing a new organizer object, that will use an html container to create itself
var organizer = new Organizer(
  "organizerContainer", // id of html container for calendar
  calendar, // defining the calendar that the organizer is related to
  data // giving the organizer the static data that should be displayed
  );
