<html>
<head>
<title> jQuery Tutorial </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
</head>
<body>
<h1 id="tutorial">jQuery Tutorial</h1>
<p>My jQuery Exercise</p>

<script>
    $('#tutorial').click(function(){
           $(this).css('color','red');
           $(this).fadeTo("slow", 0.5);
    });
</script>
</body>
</html>