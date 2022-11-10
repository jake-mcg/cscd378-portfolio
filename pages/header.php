<?php require_once __DIR__."/../vendor/autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php #this should just echo title in the final version.
        $title = $title ?? "Placeholder title";
    echo "<title>".$title."</title>"?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand" href="index.php">Clean Code Enthusiasts</a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="team.php">The Team</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
        </li>
    </ul>
</nav>