<?php
require "db_connection.php";

function Category()
{

    global $DB;
    $Query = "select* from categories";
    $Result = mysqli_query($DB,$Query);
    while ($Row = mysqli_fetch_assoc($Result))
    {
        echo "<li><a class = 'nav-link' href = '#'>$Row[Title]</a></li>";
    }
}

function Brands()
{

    global $DB;
    $Query = "select* from brand";
    $Result = mysqli_query($DB,$Query);
    while ($Row = mysqli_fetch_assoc($Result))
    {
        echo "<li><a class = 'nav-link' href = '#'>$Row[Title]</a></li>";
    }
}