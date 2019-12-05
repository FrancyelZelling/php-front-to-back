<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">

    <script>
        function showSuggestions(str){
            if(str.length ==0) {
                document.getElementById('output').innerHTML = '';
            } else {
                // Ajax request
                var xmlhttp =  new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }

                xmlhttp.open('GET', 'suggest.php?q='+str , true);
                xmlhttp.send();
            }
        }
    </script>

    <title>Search User</title>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-success">Search Users</h1>
        <form action="">
            <label for="users">Enter name to search</label> <br>
            <input class="form-control" type="text" name="users" id="" onkeyup="showSuggestions(this.value)">
        </form>
        <br>
        <p>Suggestions: <span id="output" style="font-weight: bold; " class="text-info"></span></p>
    </div>
</body>
</html>
