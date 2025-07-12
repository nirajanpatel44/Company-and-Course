<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
.container {
    width: 88%;
    margin: auto;
}
button{
    cursor: pointer;
}

    </style>

</head>
<body>
@include('sweetalert::alert')

<header>

<x-navbar/>

</header>

<main>
{{$slot}}
</main>

<footer></footer>


</body>
</html>
