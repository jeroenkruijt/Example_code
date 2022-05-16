
<?php
function conn()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "brixcrm";

    $conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    return $conn;
}

//query the data out of the database and setting it up to be used in view.index.php
function table_query(){
    $query = "select *, concat(first_name, ' ', last_name) name from  person
                left join subscription s on person.id = s.person_id
                left join `order` o on s.id = o.subscription_id";

    $result = mysqli_query(conn(), $query);

    while ($subscriptions = mysqli_fetch_assoc($result)){
        $resArr[] = $subscriptions;
    }

    return $resArr;
}

function CheckingActiveStatus($blocked, $active, $status){
    if($blocked == 0 && $active == 1 && $status == 'received'){
        return '1';
    } else {
        return '0';
    }
}
