<?php 

include "_sessionHead.php";

echo "<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>

    <!-- Bootstrap Icons -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css'>

    <!-- Data Tables -->
    <link rel='stylesheet' href='//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css'>
    <script src='https://code.jquery.com/jquery-3.5.1.js'
        integrity='sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=' crossorigin='anonymous'></script>
    <script src='//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js'></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

    <!-- Javascript -->
    <script src='validation.js'></script>

    <!-- JQuery -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <title>selfLearn | Your Home to Success</title>
</head>

<body>";

include "_navbar.php";

?>