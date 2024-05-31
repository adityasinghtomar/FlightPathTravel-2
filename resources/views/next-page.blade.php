<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Next Page</title>
</head>
<body>

@if(isset($blade))
    <p>Blade: {{ $blade }}</p>
@else
    <p>Cookie named 'blade' is not set!</p>
@endif

</body>
</html>