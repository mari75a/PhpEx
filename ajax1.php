<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <button  onclick="getdata()">Get data</button>    

 <script>

    function getdata(){

        var requset = new XMLHttpRequest();

        requset.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){

                var response = this.responseText;
                alert(response);
            }
        }

        requset.open('GET','ajaxdata.php');
        requset.send();

    }
 </script>
</body>
</html>