# _TASK#2 -CREDIT MANAGEMENT_

#### _Creating a dynamic website which should contain all the user information like username, email, current credit, etc. in a dummy database. Transfers table record and keep track of all the transfer happening from one user to another user_

#### By **The Graduate Rotational Internship Program (GRIP) is the flagship program of THE SPARKS FOUNDATION**

## Technologies Used

* _HTML_
* _CSS(Bootstrap)_
* _MySQL_
* _PHP_

## Description

This project is a web application that is to be hosted online and should be access over the internet. That deals with keeping a track of all the credit transfers that taking place from one user to another user. This project was meant to have a user friendly design and have a secure backend. And should have robust system, like having the ability to handle the incorrect characters or negative numbers.

## Setup/Installation Requirements

This project requires any TextEditor(Visual Studio Code) and Xampp server. For hosting website online 000webhost.com free online hosting platform is used

* [VISUAL STUDIO CODE](https://code.visualstudio.com)
* [XAMPP](https://www.apachefriends.org/download.html)
* [000webhost](https://in.000webhost.com)



## Flow

*Start with creating dummy data in database for upto 10 users. Database: Mysql. User table will have basic fields such as name, email, current credit etc. Transfers table will record all transfers happened.*

_Home Page > View all Users > Select and View one User > Transfer Credit > Select user to transfer to >View all Users. Credit is sort of points which can be transferred from one user to another user.No Login Page. No User Creation. Only transfer of credit between multiple users_

*Host the website at 000webhost*


## Code

```PHP
<?php
$conn = mysqli_connect("localhost","root","","cmw");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
```

## Run

Copy all code files to htdocs. Apache and MySQL server must be active in Xampp
To run code on loacl host open (localhost/home.php) then it gets executed
Or
Online link (https://simrantajsyed.000webhostapp.com)
