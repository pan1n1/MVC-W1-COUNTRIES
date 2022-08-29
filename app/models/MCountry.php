<style>table { 
	font-family: arial, sans-serif; border-collapse: collapse; width: 100%;}		td, th {border: 1px solid #dddddd; text-align: left; padding: 8px; }	tr:nth-child(even) { background-color: #dddddd; }</style>

<?php

class DatabaseController
{

    public function __construct()
    {
        $SERVERNAME = ("localhost");
        $USERNAME = ( "root");
        $PASSWORD = ( "");
        $DBNAME = ("framework");

        $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
        $conn;
    }

    function connect()
    {
        $SERVERNAME = ("localhost");
        $USERNAME = ( "root");
        $PASSWORD = ( "");
        $DBNAME = ("framework");

        $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
        return $conn;
    }




    function getCountries($conn){
        
        $sql = "SELECT * FROM `countries` order by `id` ";
        $result = mysqli_query($conn, $sql);
      
        echo("<table><tr><th> id </th><th> Land </th><th> Hoofdstad </th><th>Continent</th><th> Populatie</th></tr>");

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo ("<tr><th>" . $row["id"] . "</th><th>" . $row["name"] . "</th><th>" . $row["capitalCity"] . "</th><th>" . $row["continent"] . "</th><th>" . $row["population"] . "</th></tr>");
            }
            echo("</table>");
        } else {
            echo "0 results";
        }

    }
}


