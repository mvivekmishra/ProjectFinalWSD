<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WSD Project 2</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tasks.com</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <form action="index.php?page=tasks&action=create" method="POST" style="float:left;">
            <li><button class="btn btn-link navbar-btn" type="submit">Create Task</button></li>
            </form>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <form action="index.php?page=accounts&action=logout" method="post" id="form3" style="float:right;">
                <li><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>
            </form>
            <form action="index.php?page=accounts&action=myProf" method="post" id="form4" style="float:right;">
                 <li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button></li>
            </form>

        </ul>
    </div>
</nav>