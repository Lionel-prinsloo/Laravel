<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>List of Planets</h1>
    <ul>
        @foreach ($planeten as $planet)
            <li>
                <strong>{{ $planet['name'] }}</strong>: {{ $planet['description'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>