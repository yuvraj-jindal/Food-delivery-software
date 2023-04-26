<?php


    // include "C:/xampp/htdocs/dbms/mini_project/floating-login-signup/partials/_dbconnect.php";

    // session_start();

    // if(empty($_SESSION)){
    //     // header('Location:index.php');
    //     header("Location: ../floating-login-signup/index.php");
    // }

    // // $user_id = $_SESSION['user_id'];
    // $email = $_SESSION['email'];
    // $query = "SELECT * FROM `login-signup` where email='$email'";
    // $result = mysqli_query($conn,$query);
    // $fetched_result = mysqli_fetch_assoc($result);
    // $name = $fetched_result['name'];
    // $email = $fetched_result['email'];
    // // $profile_pic = $fetched_result['profile_pic'];

    // if(mysqli_num_rows($result) > 0){
    //     $fetched_result = mysqli_fetch_assoc($result);
    //     $ph_no = $fetched_result['ph_no'];
    //     $food_pref = $fetched_result['food_pref'];
    // }else{
    //     $ph_no = "0";
    //     $food_pref = "";
    // }


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Profile</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!-- <script type="text/javascript">
    $(document).ready(function(){

        var upd = '<?php echo $upd; ?>';
        if(upd === '1'){
            alert("Profile Updated Successfully");

        }
    })
</script> -->

<body>
    <!-- <?php include "includes/navbar.php" ; ?> -->


    <div class="container emp-profile">
        <form method="post" action="profile_pic.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="profile-img">
                        <img src="https://i.pinimg.com/564x/34/23/27/342327463d2c4d4de8381115a9672f0f.jpg" alt="/"
                            style="width: 250px; height: 250px;" id="output">

                        <div class="file btn btn-sm btn-primary mt-3">
                            <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)">
                            <label for="file" style="cursor: pointer;">Update Image</label>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>



                <!-- <script>
							var loadFile = function(event) {
							var image = document.getElementById('output');
							image.src = URL.createObjectURL(event.target.files[0]);

							};
						</script> -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="profile-head">
                            <h3>
                                MILAN<!-- <?php echo $name; ?> -->
                            </h3>
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="true">Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab"
                                        aria-controls="order" aria-selected="true">Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="fav-order-tab" data-toggle="tab" href="#favorder" role="tab"
                                        aria-controls="favorder" aria-selected="false">Favorite Order</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-10">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-4" id="attr">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <p><?php echo $user_id; ?></p> -->
                                            <p>123</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" id="attr">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <p><?php echo $name; ?></p> -->
                                            <p>Milan parmar</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" id="attr">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <p><?php echo $email; ?></p> -->
                                            <p>mp583939@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" id="attr">
                                            <label>Phone no .</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <p><?php echo $ph_no; ?><input class="ml-4" type="text" name="num" value=""><br></p>  -->
                                            <p>9327397406</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <div class="row">
                                        <!-- <div class="col-md-4" id="attr">
                                        <label>Food Preferences</label><br/>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $food_pref; ?><input class="ml-4" type="text" name="pref" value=""><br></p> 
                                    </div> -->

                                        <div class="col-md-4" id="attr">
                                            <label>Saved Adresses</label>
                                        </div>
                                        <div class="col-md-8">

                                            <!-- <?php

                                            $query3 = "SELECT * FROM address WHERE user_id
                                            =$user_id";

                                            $result3 = mysqli_query($conn,$query3);

                                            if (mysqli_num_rows($result3) >0 ) {
                                                while ($row = mysqli_fetch_assoc($result3)) {
                                                echo '<p>'.$row['address'].' , '.$row['city'].' , '.$row['pin'].'</p>';
                                                }
                                            }else{
                                                echo "No saved addresses yet!!!";
                                            }
                                        ?> -->

                                        </div>

                                    </div>

                                </div>


                                <div class="tab-pane fade active show" id="order" role="tabpanel"
                                    aria-labelledby="order-tab">
                                    <!-- <div class = "row"> -->
                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseWidthExample" aria-expanded="false"
                                            aria-controls="collapseWidthExample">order one</button>
                                    </p>
                                    <div style="min-height: 120px;">
                                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                            <div class="card card-body" style="width: 300px;">
                                                This is some placeholder content for a horizontal collapse. It's hidden
                                                by default and shown when triggered.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="favorder" role="tabpanel"
                                    aria-labelledby="fav-order-tab">
                                    <div class="row">
                                        <!-- <div class="col-md-4" id="attr">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>123</p>
                                            </div> -->
                                        <p>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseWidthExample" aria-expanded="false"
                                                aria-controls="collapseWidthExample">
                                                order one
                                            </button>
                                        </p>
                                        <div style="min-height: 120px;">
                                            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                                <div class="card card-body" style="width: 300px;">
                                                    This is some placeholder content for a horizontal collapse. It's
                                                    hidden by default and shown when triggered.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" id="attr">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <p><?php echo $name; ?></p> -->
                                            <p>Milan parmar</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" id="attr">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <p><?php echo $email; ?></p> -->
                                            <p>mp583939@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" id="attr">
                                            <label>Phone no .</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <p><?php echo $ph_no; ?><input class="ml-4" type="text" name="num" value=""><br></p>  -->
                                            <p>9327397406</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="justify-content: flex-end;margin-right: 50px;">
                        <a href="#"><button type="submit" name="upload" class="pic mt-4 ml-5 btn btn-warning"><b>Update
                                    Profile</b></button></a>
                    </div>
                </div>

            </div>

    </div>
    </form>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/profile_pic.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>