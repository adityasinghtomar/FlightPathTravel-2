<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Next Blade Form with Cookie</title>
</head>
<body>

<form action="{{ route('set.cookie') }}" method="post">
  @csrf
  <label for="blade">Enter Blade:</label><br>
  <input type="text" id="blade" name="blade" required><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>