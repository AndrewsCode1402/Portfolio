<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/design.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>

<body>
    <header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About Me.php">About Me</a></li>
            <li><a href="Projects.php">Projects</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Enquiries.php">Enquiries</a></li>
            <div class="button1">
                <button onclick="functionDark()">Dark Mode</button>
            </div>
        </ul>
    </header>

    <script src="javascript/interface.js"></script>
