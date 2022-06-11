<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Email</title>
</head>
<body>
    <h2>Hello Admin,</h2>
You received an email from : {{ $name }}
<br> <br>Here are the details:
<br><br><b>Name:</b> {{ $name }}
<br><br>
<b>Email:</b> {{ $email }}
<br><br>
<b>Subject:</b> {{ $subject }}
<br><br>
<b>Message:</b> {{ $user_message }}
<br><br>
Thank You
</body>
</html>