<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <form action="{{url('login3')}}" method="post">
        @csrf
        <tr>
            <td>用户名</td>
            <td><input type="text" name="login_name" W id=""></td>
        </tr>
        <tr>
            <td>密码</td>
            <td>
                <input type="password" name="pwd" id="">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="提交"></td>
        </tr>
    </form>
</table>
</body>
</html>