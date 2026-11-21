var calendar = document.getElementById("calendar");

function generateCalendar() {
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  
  var monthNames = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];
  
  var monthHtml = "<div class='month'>" + monthNames[month] + " " + year + "</div>";
  
  var weekdaysHtml = "<div class='weekdays'>";
  var weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
  for (var i = 0; i < weekdays.length; i++) {
    weekdaysHtml += "<div class='weekday'>" + weekdays[i] + "</div>";
  }
  weekdaysHtml += "</div>";
  
  var daysHtml = "<div class='days'>";
  
  var firstDay = new Date(year, month, 1).getDay();
  var totalDays = new Date(year, month + 1, 0).getDate();
  
  for (var j = 0; j < firstDay; j++) {
    daysHtml += "<div class='day'></div>";
  }
  
  for (var k = 1; k <= totalDays; k++) {
    if (k === date.getDate()) {
      daysHtml += "<div class='day current-day'>" + k + "</div>";
    } else {
      daysHtml += "<div class='day'>" + k + "</div>";
    }
  }
  
  daysHtml += "</div>";
  
  var eventsHtml = "<div class='events'>"
                  + "<div class='event'>Event 1</div>"
                  + "<div class='event'>Event 2</div>"
                  + "<div class='event'>Event 3</div>"
                  + "</div>";
  
  calendar.innerHTML = monthHtml + weekdaysHtml + daysHtml + eventsHtml;
}

generateCalendar();