<?php
  include '../floating-login-signup/partials/_dbconnect.php';
  session_start();

  $email = $_SESSION['email'];
  $shop_number = $_SESSION['shop_number'];
  $qry = $conn->query("SELECT * FROM `cart` where email='$email' AND shop_number = $shop_number");

  $total=0;
  while($row = $qry->fetch_assoc()){
    $food_id = $row['food_id'];
    $find_price = ($conn->query("SELECT * FROM `menu` where id = $food_id"))->fetch_assoc();
    $total += $find_price['price']*$row['count'];
  };

  if($total<=0){
    echo '<script>alert("Enter products to your cart");setTimeout(()=>{history.go(-1);},0);</script>';
  }

  $qry1 = ($conn->query("SELECT * FROM `admin` where shop_number = $shop_number "))->fetch_assoc();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    />
  </head>
  <body style="background-color: #05cf48" ;>
    <div  class="container bg-light d-md-flex align-items-center">
      <div class="card box1 shadow-sm p-md-5 p-md-5 p-4">
        <!-- <div class="fw-bolder mb-4">
          <span class="fas fa-dollar-sign"></span><span class="ps-1"> <?php echo $total; ?></span>
        </div> -->
        <div class="d-flex flex-column">
          <!-- <div class="d-flex align-items-center justify-content-between text">
            <span class="">Commission</span>
            <span class="fas fa-dollar-sign"
              ><span class="ps-1">1.99</span></span
            >
          </div> -->
          <div
            class="d-flex align-items-center justify-content-between text mb-4"
          >
            <span>Total</span>
            <span class="fas fa-dollar-sign"
              ><span class="ps-1"> <?php echo $total; ?></span></span
            >
          </div>
          <div class="border-bottom mb-4"></div>
          <div class="d-flex flex-column mb-4">
            <span class="far fa-file-alt text"
              ><span class="ps-2">UPI ID:</span></span
            >
            <span class="ps-3">7985667854@paytm</span>
          </div>
          <div class="d-flex flex-column mb-5">
            <span class="far fa-calendar-alt text"
              ><span class="ps-2">Paying To:</span></span
            >
            <span class="ps-3"><?php echo $qry1['name']; ?></span>
          </div>
          <div
            class="d-flex align-items-center justify-content-between text mt-5"
          >
            <div class="d-flex flex-column text">
              <span>Customer Support:</span> <span>7985667854</span>
            </div>
            <div class="btn btn-primary rounded-circle">
              <span class="fas fa-comment-alt"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="card box2 shadow-sm">
        <div
          class="d-flex align-items-center justify-content-between p-md-5 p-4"
        >
          <span style="font-size:30px;" class="h5 fw-bold m-0">Payment methods</span>
          <!-- <div class="btn btn-primary bar">
            <span class="fas fa-bars"></span>
          </div> -->
        </div>
        <ul class="nav nav-tabs mb-3 px-md-4 px-2">
          
          <li class="nav-item">
            <a style="font-weight:bold; font-size:20px;" class="nav-link px-2" href="#">QR Payment</a>
          </li>
          

        </ul>
        <div class="px-md-5 px-4 mb-4 d-flex align-items-center">
          <div
            class="btn-group"
            role="group"
            aria-label="Basic radio toggle button group"
          >
           
          </div>
        </div>
        <form action="">
          <div >
          <img class="qr" src="qr.jpeg" />
        </div>
        <div class="transa">
          <p>ScreenShot Of Transaction:</p>
          <!-- <input type="file" id="myFile" name="filename" /> -->
          <form>
            <input type="file" id="photo" onchange="previewPhoto()">
            <br>
            <img src="" id="preview" style="display:none">
            <br>
          </form>
        </div>
          <div class="col-12 px-md-5 px-4 mt-3">
          <!-- <a href = "index1.php" ><div class="btn btn-primary w-100">pay <?php echo $total; ?></div></a> -->
          <button id="payButton" class="btn btn-primary w-100" onclick="fireSweetAlert()">pay <?php echo $total; ?></button>
          </div>
        </form>
      </div>
    </div>
    <script>
      function previewPhoto() {
        var preview = document.querySelector('#preview');
        var file = document.querySelector('#photo').files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
          preview.src = reader.result;
          preview.style.display = "block";
        }

        if (file) {
          reader.readAsDataURL(file);
        } else {
          preview.src = "";
        }
      }
    </script>
    <script>
  function fireSweetAlert() {
    Swal.fire({
        title: 'good job',
        text: 'You clicked the button',
        icon: 'success',
        // showCancelButton: true,
        confirmButtonColor: '#3085d6',
        // cancelButtonColor: '#d33',
        confirmButtonText: 'Done' // change the button text here
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = ' ../shops_list/index.php';
        }
    })
}
  document.getElementById("payButton").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index1.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };
    xhr.send();
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js";
    </script>
  </body>
</html>