// JavaScript Document

function validate() {
  var fields = [
	{ element: document.myForm.date, fieldName: "Date_&_Time"},  
    { element: document.myForm.fname, fieldName: "First_Name"},
    { element: document.myForm.lname, fieldName:"Last_Name"},
    { element: document.myForm.contact, fieldName:"Contact_Number"},
    { element: document.myForm.nic, fieldName:"NIC"},
    { element: document.myForm.address, fieldName:"Address"},
  ];

  for (var i = 0; i < fields.length; i++) {
    if (fields[i].element.value.trim() === "") {
      var fieldName = fields[i].fieldName.split(" ").slice(-1)[0];
      alert("Please provide " + fieldName + "!");
      fields[i].element.focus();
      return false;
    }
  }
  window.location.href="order.html"
  return true;
}


		