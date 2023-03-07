$(document).ready(function(){

    //make ajax request to get profile data
    $.ajax({
        type: "GET",
        url: "https://api.myjson.com/bins/1f0cgj",
        success: function(result){
            //store profile data
            var profile = result;

            //display profile data
            $("#name").text(profile.name);
            $("#age").text(profile.age);
            $("#location").text(profile.dob);
            $("#bio").text(profile.gender);
        }
    });
});