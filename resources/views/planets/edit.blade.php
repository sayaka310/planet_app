<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星情報編集</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>
        <b>惑星情報編集</b>
    </h1>
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label><b>名前</b></label>
            <input type="text" name="name" value="{{ old('name', $planet->name) }}">
        </p>
        <p>
            <label><b>名前(英語)</b></label>
            <input type="text" name="english_name" value="{{ old('english_name', $planet->english) }}">
        </p>
        <p>
            <label><b>半径</b></label>
            <input type="text" name="radius" value="{{ old('radius', $planet->radius) }}">
        </p>
        <p>
            <label><b>重量</b></label>
            <input type="text" name="weight" value="{{ old('weight', $planet->weight) }}">
        </p>
        <input class="register" type="submit" value="更新">
        <a href="/planets">戻る</a>
    </form>
</body>
</html> 