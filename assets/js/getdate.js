var date = new Date();
var year = date.getFullYear();
var month = String(date.getMonth()+1).padStart(2,'0');
var todayDate = String(date.getDate()).padStart(2,'0');
var datePattern = year + '-' + month + '-' + todayDate;
document.getElementById("dateServed").value = datePattern;