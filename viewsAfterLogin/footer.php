


<!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <script>

        $("#passAlert").hide();
        
        $("#update-pass").click(function() {

            if($("#old-password").val() == ""){
              $("#passAlert").html("Please Enter your Old Password").show();
            } else if($("#new-password").val() == ""){
              $("#passAlert").html("Please Enter your New Password").show();
            } else if($("#conf-password").val() == ""){
              $("#passAlert").html("Please Enter your Confirm Password").show();
            } else if($("#new-password").val() != $("#conf-password").val()){
              $("#passAlert").html("Password does not matched").show();
            } else {
              $("#passAlert").hide();
                $.ajax({
                    type: "POST",
                    url: "actions.php?action=updatePassword",
                    data: "email=" + $("#myEmail").val() + "&oldPassword=" + $("#old-password").val() + "&newPassword=" + $("#new-password").val(),
                    success: function(result) {
                        
                        if (result == 1) {

                            alert("Your Password is successfully changed");
                            
                            window.location.assign("http://localhost/college_connect/?p=profedt");
                            
                        } else {
                            
                            $("#passAlert").html(result).show();
                            
                        }
                    }
                    
                })
            }

        });

            
            
    </script>
  


	</body>
</html>
