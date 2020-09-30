<?php
$conn = mysqli_connect("localhost","root","","cmw");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2-internship</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:#d8b511;">
        <div class="container"><a class="navbar-brand" href="#">Credit Management-Task#2(by SIMRAN TAJ) </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-dark" href="users.php" style="background-color:#f4ed7c;width:82px;">Users</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-dark" href="trans.php" style="background-color:#f4ed7c;">Credited Users</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-dark" href="index.html" style="background-color:#f4ed7c;">Home</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center">Credit Transaction Table</h1>
    <div class="container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>FROM ID</th>
                            <th>TO ID</th>
                            <th>CREDITED AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        session_start();
                        $results;
                        $count;
                        $query = "SELECT * FROM `credit`";
                        $results = mysqli_query($conn,$query);
                        $count  = mysqli_num_rows($results);
                        if($count>0){
                            foreach($results as $row){
                                echo "<tr>
                                <td>". $row['from_id']. "</td>
                                <td>".  $row['to_id'] ."</td>
                                <td>". $row['credited amount'] ."</td>
                                
                            </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <h3 class="text-center">VIEW ONE USER'S DATA</h3>
                <form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="text" name="id" placeholder="Enter id"></div>
                <div class="form-group"><button class="btn btn-primary btn-submit" type="submit" name= "search"><i class="fa fa-cart-arrow-down"></i>&nbsp;VIEW</button>
                </div>
                    </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>AMOUNT </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_POST['search']))
                        {
                            $id=$_POST['id'];

                            
                        $results;
                        $count;
                        $query="SELECT * FROM `userinfo` WHERE id='$id'";
                        $results = mysqli_query($conn,$query);
                        $count  = mysqli_num_rows($results);
                        if($count>0){
                            foreach($results as $row){
                                echo "<tr>
                                <td>". $row['id']. "</td>
                                <td>".  $row['name'] ."</td>
                                <td>". $row['email'] ."</td>
                                <td>". $row['currentcredit'] ."</td>
                                
                            </tr>";
                            }
                        }
                        }
                        ?>
                    </tbody>
                </table>    
            </div>
        </div> 

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html> 