<?
include ('dbconnect.php');

if(isset($_GET['delete_artist'])){
    $userid = $_GET['delete_artist'];

    //SQL query to delte data from user table
    $query = "DELETE FROM artists WHERE fullname = {$userid}";
    $delete_query = mysqli_query($conn, $query);
    header("Location: Artists.php");
}

?>