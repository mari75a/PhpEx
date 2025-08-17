<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    
<form  id="feedbackForm"|action="">
    <h1>FeedBack Form</h1>
    <input type="text" id="name" name="name" placeHolder="Enter your name">
    <br><input type="email" id="email" name="email" placeHolder="Enter your email">
    <br><input type="submit" value="Sumbit">
</form>

<script>

    $('#feedbackForm').submit(function(e){

        e.preventDefault(); // Prevent the default form submission
       var  name=$('#name').val();
       var email=$('#email').val();

       if(name == "" ){
            $('#name').css('border','1px solid red');
            $('#name').css('background-color',' red');
       }else{
            $('#name').css('border','1px solid green');
            $('#name').css('background-color',' green');
       }
       if(email == "" ){
            $('#email').css('border','1px solid red');

       }
        

    })
</script>
</body>
</html>