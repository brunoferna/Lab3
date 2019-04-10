if(typeof(String.prototype.trim) === "undefined")
{
    String.prototype.trim = function()
    {
        return String(this).replace(/^\s+|\s+$/g, '');
    };
}

function validateForm() {
  var email = document.forms["new"]["email"].value;
  console.log(email);
  if (!validateEmail(email)) {
   alert("Please enter a valid email address");
   return false;
 }
  checkRequired(document.forms["new"]);
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function isBlank(field) {
	if (field.value.length == 0) {
		return true;
	}
	else {
		return false;
	}
}

function checkRequired(form) {
	if (isBlank(form.input["Email"]) || isBlank(form.input["Pass"]) ||
		isBlank(form.input["fName"]) || isBlank(form.input["lName"])
	{
		alert("Please input all required fields");
		return;
	}
	if  (!validateEmail(form.input["Email"].value))
	{
		alert("Please include a valid email.");
	}
}

function loadSplashScreen(c_name) {
	if (getCookie(c_name) != "dummy") {
		setCookie(c_name, "dummy", 30);
		return true;
	}
	else {
		return false;
	}
}
