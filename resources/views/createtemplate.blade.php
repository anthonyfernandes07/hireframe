<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Createtemplate</title>
</head>
<body>
    <h1>
        <form action="{{ route('ctemps') }}" method="POST">
            @csrf
            Enter template name: 
            <input type="text" name="templatename" id="templateid">
            <button type="submit"> Create template</button>
        </form>
    </h1>
</body>
</html>