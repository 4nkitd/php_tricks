<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Proxy</title>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=1.3.2'></script>
<script type='text/javascript'>
    $(function() {
       $.ajax({
            type: "GET",
            dataType: 'html',
            data: 'url=https://xnxx.com/',
            url: 'proxy.php',
            success: function(data){
                document.body.innerHTML = data;
            },
            error: function(){
                // Boo! Handle the error.
            }
        });
    });
</script>
</head>
<body>
<div id="body"></div>
</body>
</html>
