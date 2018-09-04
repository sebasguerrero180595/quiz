<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista deLista de @yield('title_page') </title>
    
</head>
<body>
    
    <center>
    <table border=1 width="50%">
        <tr>
            <td colspan=6><center><b> @yield('title_table') </b</center></td>
        </tr>
        <tr>
                 </b></td><td>{{$name1}}<td>{{$name2}}<td>{{$name3}}<td>{{$name4}}<td>{{$name5}} <td>{{$name6}}</td>
            </tr>
        <tr>
            <td colspan=6><center><b> @yield('footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>