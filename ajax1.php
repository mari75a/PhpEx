<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <input type="text" id="name">
 <input type="text" id="email">
 <button  onclick="getdata()">Get data</button>    

 <script>

    function getdata(){


        var name=document.getElementById("name");
        var email=document.getElementById("email");
        var form = new FormData();

        form.append("name", name.value);
        form.append("email", email.value);
        var requset = new XMLHttpRequest();

        requset.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){

                var response = this.responseText;
                alert(response);
            }
        }

        requset.open('POST','ajaxdata.php');
        requset.send(form);

    }
 </script>
</body>
</html>