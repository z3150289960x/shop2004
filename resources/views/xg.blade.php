<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@php
@endphp
<body>
<table border="1">
    <form action="{{url('updates'.$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" id="" value="{{$data->name}}">
                <b style="color:red">{{$errors->first('name')}}</b>
            </td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="bj" id="" value="{{$data->bj}}"></td>
        </tr>
        <tr>
        <tr>
            <td></td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </form>
</table>
</body>
</html>