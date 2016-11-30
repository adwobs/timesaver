/*
* including jquery in the file
*/
var script = document.createElement('script');
script.src = 'http://code.jquery.com/jquery-1.11.0.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);


/*
* function to take new assignment details from the view, and store in database.
*/
function addNewAssignment(){
    //take the values from the input fields, and store in variables.
    document.getElementById("notifs").value="inside addnewAssignment method";
    var assigntxt = document.getElementById("inputAssignName").value;
    var homeworkNum = 2;
    var projectNum = 5;
    var groupwork = 3;
    //the app should break down the assignments into a set number of parts, based on the type of assignment it is. then store all that in the database.


    //use jquery to send the values into the database.


}

function searchAssignments(){

}

