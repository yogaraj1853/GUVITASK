
$(document).ready(function() {
  $("#submit").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax({
      type: "POST",
      url: "http://www.example.com/login.php",
      data: {
        username: username,
        password: password
      },
      success: function(data) {
        if (data == "Success"){
          alert("Login successful");
        } else {
          alert("Incorrect username or password");
        }
      }
    });
  });
});
