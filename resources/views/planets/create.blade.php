<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星情報登録</title>
</head>
<body>
    <h1>
        <b>惑星情報登録</b>
    </h1>
    <form action="/planets" method="post">
        @csrf
        <p>
            <label><b>名前</b></label>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label><b>名前(英語)</b></label>
            <input type="text" name="english_name" value="{{ old('english') }}">
        </p>
        <p>
            <label><b>半径</b></label>
            <input type="text" name="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label><b>重量</b></label>
            <input type="text" name="weight" value="{{ old('weight') }}">
        </p>
        <input class="register" type="submit" value="登録">
        <a href="/planets">戻る</a>
    </form>
</body>
</html>