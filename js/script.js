function seeDetails(a) {
   if(document.getElementById(a).style.display=='block') {
    document.getElementById(a).style.display='none';
   }
    else{
    document.getElementById(a).style.display='block';
    // document.getElementById(a).style.transform=''
   }
}

function english() {
   document.getElementById('title').style.fontFamily="Georgia, 'Times New Roman', Times, serif";
}
function hindi() {
   document.getElementById('title').style.fontFamily="'Courier New', Courier, monospace";
}

function more() {
   document.getElementById('details').style.display='block';
}

// function openbutton() {
//     document.getElementsByClassName("para").style.display='block';
// }
// function openbutton() {
//     document.getElementsByClassName("para").style.display='none';
// }

document.getElementById("signup-form").addEventListener("submit", function(event) {
   event.preventDefault();
   var firstName = document.getElementById("first-name").value;
   var lastName = document.getElementById("last-name").value;
   var email = document.getElementById("email").value;
   var password = document.getElementById("password").value;
   // You can add further validation or submission logic here
   console.log("First Name: " + firstName);
   console.log("Last Name: " + lastName);
   console.log("Email: " + email);
   console.log("Password: " + password);
});

