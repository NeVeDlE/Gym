<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shaher Gym</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<div>
    <h1>الاشتراك</h1>
    <div style="align-self: center;margin-left: 30px">
        <form action="/sessions" method="post">
            @csrf
            <div style="margin: 10px">
                <label for="email" style="padding-right: 20px">الايميل</label>
                <input type="email" name="email" id="email" value="{{old('email')}}" required>
                @error('email')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div style="margin: 10px">
                <label for="password" style="padding-right: 20px">الباسورد</label>
                <input type="password" name="password" id="password" value="{{old('password')}}" required>
                @error('password')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div style="margin-left: 100px">
                <button type="submit">دخول</button>
            </div>
        </form>
    </div>

</div>

</body>
</html>
