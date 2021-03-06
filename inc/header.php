<!doctype html>
<html lang="en">

<head>
    <title>
        <?= $pageTitle ?>
    </title>
    <!-- Favicon Here -->
    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
    <!-- jQuery UI styles -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css">
    <!-- For the datepicker and validator -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="css/hover.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
        crossorigin="anonymous">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Personal Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body id="default-wp">

    <?php
    // Check for get status in url
    $status = isset($_GET['status']) ? $_GET['status'] : "";

    if ($status == 'thanks') {
        include 'functions.php';
        renderThankYouModal();
    } ?>


    <?php
    ///////// Navigation in here //////////
    include_once 'navigation.php'; ?>
    <!-- Button trigger modal -->


    <!-- Wrapper for the entire document -->
    <div class="wrapper" id="content">