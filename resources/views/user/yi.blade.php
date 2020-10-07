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
    <form action="{{url('lian1tj')}}" method="post">
        @csrf
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user_name" id=""></td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td><input type="text" name="email" id=""></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="提交"></td>
        </tr>
    </form>
</table>
</body>
</html>