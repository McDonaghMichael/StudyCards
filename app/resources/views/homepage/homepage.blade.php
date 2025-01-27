<!DOCTYPE html>
<html>
<head>
        <title>Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['/dist/styles.css'])
</head>
<body>
<h1>{{$test}}</h1>
@if($number < 0)
    <h1 class="size-1">higher</h1>
@else
    <h1>Lower</h1>
@endif
</body>
</html>
