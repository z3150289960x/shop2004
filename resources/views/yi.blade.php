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
    <form action="{{url('tj')}}" method="post">
        @csrf
        <tr>
            <td>学生姓名</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>学生班级</td>
            <td>
                <input type="text" name="bj" id="">
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