<!doctype html>
<html lang="en">
<head>

<!--standaard meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!--bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--    bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">name:</th>
        <th scope="col">subscriptions:</th>
        <th scope="col">status:</th>
    </tr>
    </thead>

    <?php

    $resArr = table_query();

    foreach ($resArr as $table) {

        echo "
    <tbody>
    <form method='post'>
    <tr>
        <th scope='row'>" .  $table['name'] . "</th>
        <td>" . $table['Phone_number'] . "</td>
        <td><button type='submit' name='actived' class='btn btn-primary' value='". CheckingActiveStatus($table['actions_blocked'], $table['active'], $table['status']) ."'>actived</button></a></td>
    </tr>
    </form>
    </tbody>";
    }

    ?>


</table>

</body>
</html>