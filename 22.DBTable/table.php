<?php
session_start();

$sql=new PDO(
    'mysql:host=localhost;dbname=webtech',
    'root',
    'root'
);

$sql="create table user(
id int auto_increment primary key,
name varchar(255) not null
)";

if ($con->query($sql)===true) {
    echo "Table 'user' created successfully";
} else {
    echo "Error creating table";
}