<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <h1>Welcome to my web site</h1>
        <div id="chat_wrapper">
            <div id="chat"></div>
            <form action="" method="post">
                <textarea name="message" id="textarea" cols="30" rows="7"></textarea>
            </form>
        </div>
    </div>

    <!-- script for jquery -->
    <script>
        $('#textarea').keyup(function(e){
            if(e.which == 13){
                $('form').submit();
            }

        });
        $('form').submit(function(){
            var message = $('#textare').val();
            $.post('handlers/message.php?action=sendMessage&message='+message, function(response){
                alert(response);
            });
        });
    </script>
</body>
</html>