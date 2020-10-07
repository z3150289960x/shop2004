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
    <form action="" method="post">
        <tr>
            <td>id</td>
            <td>用户名</td>
            <td>邮箱</td>
            <td>操作</td>
        </tr>
        @foreach ($data as $v)
            <tr>
                <td>{{$v->uid}}</td>
                <td>{{$v->user_name}}</td>
                <td>{{$v->email}}</td>
                <td>
                    <a href="{{url('sc' . $v->id)}}" class="btn btn-danger">删除</a>|
                    <a href="{{url('xg' . $v->id)}}" class="btn btn-danger">详情</a>|
                </td>
            </tr>
        @endforeach
    </form>
</table>
</body>
</html>