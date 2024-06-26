<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FindMyHealth</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- custom css -->
        <link rel = "stylesheet" href = "main.css" />
        <link rel = "stylesheet" href = "assets/css/utilities.css" />
        <!-- normalize.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <div class="page-wrapper">
            <!-- header -->
            <header class = "header">
                <nav class = "navbar">
                    <div class="container">
                        <div class="navbar-content d-flex justify-content-between align-items-center">
                            <div class = "brand-and-toggler d-flex align-items-center justify-content-between">
                                <a href = "#" class = "navbar-brand d-flex align-items-center">
                                    <span class="brand-shape d-inline-block text-white">M</span>
                                    <span class="brand-text fw-7">FindMyHealth</span>
                                </a>
                                <button type = "button" class = "d-none navbar-show-btn">
                                    <i class = "fas fa-bars"></i>
                                </button>
                            </div>

                            <div class = "navbar-box">
                                <button type = "button" class = "navbar-hide-btn">
                                    <i class = "fas fa-times"></i>
                                </button>

                                <ul class = "navbar-nav d-flex align-items-center">
                                    <li class = "nav-item">
                                        <a href = "index.php" class = "nav-link text-white text-nowrap">Home</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "cabinets.php" class = "nav-link text-white nav-active text-nowrap">Find a doctor</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a href = "#" class = "nav-link text-white text-nowrap">About us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="element-one">
                    <img src = "assets/images/element-img-1.png" alt = "">
                </div>
				<head>
<title>Find My Health</title>
<link rel="stylesheet" href="style.css">

<style>
     .content-table {
        border-collapse: collapse;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
     }


     .content-table {
        margin-left: auto;
        margin-right: auto;
     }
     
     .content-table thead tr {
        background-color: #0459bf;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
     }


     .content-table th,
     .content-table td {
        padding: 12px 15px;
     }

     .content-table tbody tr {
        border-bottom: 1px solid #1770ed;
     }


     .content-table tbody tr:nth-of-type(even) {
        background-color: #1d76f3;
     }

     .content-table tbody tr:last-of-type {
        border-bottom: 5px solid #0459bf;
     }

     /*media query*/
    @media only screen and (max-width: 767px) {
        table{
            width:90%;
        }
    }
</style>

</head>
<body>
 
    <table class="content-table">
  <thead>
  <tr>
  <td><strong>Nr.</strong></td>
  <td><strong>Cabinet name</strong></td>
  <td><strong>Location</strong></td>
  <td><strong>Phone</strong></td>
  <td><strong>Search</strong></td>
  </tr>
  </thead>
  <?php
   require_once 'data_base.php';
   $count= 1;
   $query = "SELECT * FROM cabinete ORDER BY localitate";
    $result = mysqli_query($dbcon,$query);
	 while($row = @mysqli_fetch_assoc($result)){?>
  <tr>
  <td id="od"> <?php echo $count;?></td>
  <td class="ev"><?php echo $row["nume"];?></td>
  <td class="od"><?php echo $row["localitate"];?></td>
  <td class="ev"><?php echo $row["telefon"];?></td>
  <td class="od"><a href="view_cabinet.php?editid=<?php echo $row["complete_address"]; ?>"id="edt" >Find</a></td>
  </tr>
 <?php $count++;}?>
	 </table>
     </body>	   
</div>
<footer class = "footer">
                <div class = "container">
                    <div class = "footer-content">
                        <div class = "footer-list d-grid text-white">
                            <div class = "footer-item">
                                <a href = "#" class = "navbar-brand d-flex align-items-center">
                                    <span class = "brand-shape d-inline-block text-white">M</span>
                                    <span class = "brand-text fw-7">FindMyHealth</span>
                                </a>
                                <p class = "text-white">FindMyHealth provides information about medical cabinets, accessible on mobile and online for everyone</p>
                                <p class = "text-white copyright-text">&copy; FindMyHealth PTY LTD 2023. All rights reserved.</p>
                            </div>

                            <div class = "footer-item">
                                <h3 class = "footer-item-title">Company</h3>
                                <ul class = "footer-links">
                                    <li><a href = "#">About</a></li>
                                    <li><a href = "cabinets.php">Find a doctor</a></li>
                                    <li><a href = "#">Apps</a></li>
                                </ul>
                            </div>

                            <div class = "footer-item">
                                <h3 class = "footer-item-title">Region</h3>
                                <ul class = "footer-links">
                                    <li><a href = "#">Romania</a></li>
                                </ul>
                            </div>

                            <div class = "footer-item">
                                <h3 class = "footer-item-title">Help</h3>
                                <ul class = "footer-links">
                                    <li><a href = "#">Help center</a></li>
                                    <li><a href = "#">Contact support</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
        </div>
        
        







        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <!-- owl carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- custom js -->
        <script src = "assets/js/script.js"></script>
    </body>
</html>

