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
            Let's name your template:
            <input type="text" name="templatename" id="templateid"> 
            <br>
            How many sections should we add to the template?
            <input type="number" name="sectioncount" id="sectioncountid" min="1" max="5">
            <br>
            
            What is the title for section?
            <input type="text" name="section">
            <br>
            <button type="submit"> Create template</button>
        </form>
    </h1>
    <script src="main.js">
    </script>
</body>
</html>