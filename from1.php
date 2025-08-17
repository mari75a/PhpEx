<html>
    <head>
    <title>Jquery form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    </head>
    <body>
        <form id="myForm" action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <input type="submit" value="Submit">

            <p id="responseMessage"></p>
        </form>

        <script>
            $(document).ready(function(){
                $('#myForm').submit(function(event){
                    event.preventDefault(); // Prevent the default form submission

                    var name = $('#name').val();
                    var email = $('#email').val();

                    if(name === "" || email === "") {
                        alert("Please fill in all fields.");
                    } else {
                        // Here you can add code to send the data to the server
                        // For demonstration, we'll just log it to the console
                        $('#responseMessage').text("Form submitted successfully!");
                        $('#responseMessage').css('color', 'green');
                        console.log("Name: " + name);
                        console.log("Email: " + email);
                        alert("Form submitted successfully!");
                    }
                })
            })

        </script>
    </body>
</html>