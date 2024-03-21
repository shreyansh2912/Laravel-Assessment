<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <input type="text" name="author_id" id="author_id">
        
        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea>
        
        <button type="submit">Submit</button>
        </form>
</body>
</html>