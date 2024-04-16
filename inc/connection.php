<?php

$connection = new mysqli("localhost", "root", "123y", "job_portal");
if ($connection->connect_errno) {
    die("error in database connection");
}
