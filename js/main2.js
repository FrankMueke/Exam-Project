$(document).ready(function(){
    $("#signup_button").click(function(event){
      event.preventDefault();
      $.ajax({
          url     :"register.php",
          method  :"POST",
          data    : $("form").serialize(),
          success : function(data){
              $("#signup_msg").html(data);
          }
    })
  })
   $("#signup_buttona").click(function(event){
      event.preventDefault();
      $.ajax({ 
          url     :"registera.php",
          method  :"POST",
          data    : $("form").serialize(),
          success : function(data){
              $("#signup_msga").html(data);
          }
    })
  })
  $("#signup_buttonl").click(function(event){
      event.preventDefault();
      $.ajax({ 
          url     :"registerl.php",
          method  :"POST",
          data    : $("form").serialize(),
          success : function(data){0/
              $("#signup_msgl").html(data);
          }
    })
  })
  $("#signup_buttono").click(function(event){
      event.preventDefault();
      $.ajax({ 
          url     :"registero.php",
          method  :"POST",
          data    : $("form").serialize(),
          success : function(data){
              $("#signup_msgo").html(data);
          }
    })
  })
  $("#login").click(function(event){
      event.preventDefault();
      var email= $("#email").val();
      var pass = $("#password").val();
      $.ajax({
          url :"action.php",
          method :"POST",
          data :{userLogin:1,userEmail:email,userPassword:pass},
          success : function(data){
              window.location.href="profilet.php";
          }
             
      })
  })
  $("#logina").click(function(event){
      event.preventDefault();
      var email= $("#emaila").val();
      var pass = $("#passworda").val();
      $.ajax({
          url :"action.php",
          method :"POST",
          data :{userLogina:1,userEmaila:email,userPassworda:pass},
          success : function(data){
              window.location.href="profilea.php";
          }
             
      })
  })
  $("#loginl").click(function(event){
      event.preventDefault();
      var email= $("#emaill").val();
      var pass = $("#passwordl").val();
      $.ajax({
          url :"action.php",
          method :"POST",
          data :{userLoginl:1,userEmaill:email,userPasswordl:pass},
          success : function(data){
              window.location.href="profilel.php";
              }
             
      })
  })
  $("#logino").click(function(event){
      event.preventDefault();
      var email= $("#emailo").val();
      var pass = $("#passwordo").val();
      $.ajax({
          url :"action.php",
          method :"POST",
          data :{userLogino:1,userEmailo:email,userPasswordo:pass},
          success : function(data){
              window.location.href="profileo.php";
          }
             
      })
  })
  })
  