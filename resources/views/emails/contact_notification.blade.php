<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $contact['name'] }}</title> <!-- Blade syntax is enclosed within curly braces -->
</head>
<body>
    <style>
        .container {
            text-align: center;
            background: black;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 1px 1px 1px black; 
        }
        h4 {
            color: white;
            text-align: center;
            font-weight: 900;
            text-transform: uppercase;
        }
    </style>
        
    <div class="container">
        <h4>{{ $contact['name'] }}</h4>
        <h4>{{ $contact['email'] }}</h4>
        <h4>{{ $contact['subject'] }}</h4>
        <h4>{{ $contact['message'] }}</h4>        
    </div>    
</body>
</html>
