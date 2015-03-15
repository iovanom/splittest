<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Second page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1 align="center" style="color: blue">Second Pages</h1>
        </div>
        <form id="split" action="">
            <input type="text" name="test" placeholder="test">
            <input type="submit" name="submit" value="submit"/>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            var page = 8;
            $( document ).ready(function() {
                $.ajax({
                    method: "GET",
                    url: "http://splittest.lan/stats/visitors/" + page
                });
            });
            $('#split').submit(function() {
                $.ajax({
                    method: "GET",
                    url: "http://splittest.lan/stats/activeVisitors/" + page
                });
                alert("Form has send!");
            });
        </script>
    </body>
</html>
