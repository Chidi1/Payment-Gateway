<?php
    session_start();
    $discountedprice = $_POST['discountedpricenew'];
    $writing_type = $_POST['writing_type'];
    $service_type = $_POST['service_type'];
    $academic_level = $_POST['academic_level'];
    $deadline = $_POST['deadline'];
    $pages = $_POST['pages'];

?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payment Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PaperWritersltd.com | Order</title>


<link rel="stylesheet" type="text/css" href="https://mypaperwriters.net/application/views/pc/css/default.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<link type="text/css" href="https://mypaperwriters.net/application/views/css/jquery-ui.min.css" rel="stylesheet" />
<link type="text/css" href="https://mypaperwriters.net/application/views/css/validationEngine-2.6.2.jquery.css" rel="stylesheet" />
<link rel="stylesheet" id="vector-icons-css" href="https://mypaperwriters.net/application/views/pc/css/css/font-awesome.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="https://mypaperwriters.net/application/views/pc/css/menustyles.css" />
<link rel="stylesheet" href="https://mypaperwriters.net/application/views/css/styles.css">
 <link href="pcss/bootstrap.min.css" rel="stylesheet">
    <link href="https://paperwritersltd.com/pcss/font-awesome.min.css" rel="stylesheet">
    <link href="https://paperwritersltd.com/pcss/animate.min.css" rel="stylesheet">
    <link href="https://paperwritersltd.com/pcss/owl.carousel.css" rel="stylesheet">
    <link href="https://paperwritersltd.com/pcss/owl.transitions.css" rel="stylesheet">
    <link href="https://paperwritersltd.com/pcss/prettyPhoto.css" rel="stylesheet">
    <link href="https://paperwritersltd.com/pcss/main.css" rel="stylesheet">
    <link href="https://paperwritersltd.com/pcss/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="https://paperwritersltd.com/pimages/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://paperwritersltd.com/pimages/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://paperwritersltd.com/pimages/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://paperwritersltd.com/pimages/ico/apple-touch-icon-72-precomposed.png">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<style>
    body {
    background-color: #f7dab7 !important;
}

#centrecolumn{
    
    width: 60% !important;
    margin-left: 320px !important;
    /*margin: 50% 50% !important;*/
}
#place-order-div{
    margin-left: 90px !important;
    margin-right: 180px !important;
}
#field-label{
    align:left !important;
}
</style>

 <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=""><img src="https://paperwritersltd.com/pimages/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="https://paperwritersltd.com/">Home</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/about/">About</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/how-it-works/">How it works</a></li>
                        <li class="scroll"><a href="https://https://paperwritersltd.com/dtestimonials/">Testimonials</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/dservices/">Services</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/paperdetails.php">Order</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/contact-2/">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1 style="text-align: center;" class="display-3">Place Your Order</h1>
            <h4 style="text-align: center;" class="display-3">Kindly complete the order form below. Please furnish all essential information so that the writer will not have a hard time working on your order.</h4>
        </div>
        <hr>

        <div class="col-md-8 col-md-offset-2">
            <form action="order.php" id="order" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="" title="" required>
                </div>
                <div class="col-md-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="" title="" required>
                </div>
                <div class="col-md-12">
                    <label for="Phone">Phone</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="" title="" required>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Type of Writing</label>
                 <input type="text" name="writing_type1" id="writing_type1" class="form-control" value="<?php echo $writing_type; ?> " readonly>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Type of Paper</label>
                    <input type="text" name="service_type1" id="service_type1" class="form-control" value="<?php echo $service_type; ?> " readonly>

                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Course</label>
                    <!-- <input type="text" name="course" id="input" class="form-control" value="" title=""> -->
                    <select name="course" id="input" class="form-control" required="required" value="" title="" required>
                        <option value="">Please Select</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Anthropology">Anthropology</option>
                        <option value="Art and Architecture">Art and Architecture</option>
                        <option value="Business">Business</option>
                        <option value="Classic English literature">Classic English literature</option>
                        <option value="Communication">Communication</option>
                        <option value="Criminal Law">Criminal Law</option>
                        <option value="Economics">Economics</option>
                        <option value="Education">Education</option>
                        <option value="Family and Consumer Science">Family and Consumer Science</option>
                        <option value="Film studies">Film studies</option>
                        <option value="Finance">Finance</option>
                        <option value="History">History</option>
                        <option value="Law">Law</option>
                        <option value="Management">Management</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Music">Music</option>
                        <option value="Nursing">Nursing</option>
                        <option value="Philosophy">Philosophy</option>
                        <option value="Political Science">Political Science</option>
                        <option value="Psychology">Psychology</option>
                        <option value="Religious Studies">Religious Studies</option>
                        <option value="Shakespeare Studies">Shakespeare Studies</option>
                        <option value="Sociology">Sociology</option>
                        <option value="Technology">Technology</option>
                        <option value="Theater  studies">Theater studies</option>
                        <option value="Women and Gender Studies">Women and Gender Studies</option>
                        <option value="World affairs">World affairs</option>
                        <option value="World literature">World literature</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Title</label>
                    <input type="text" name="title" id="input" class="form-control" value="" title="" required>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Paper Details</label>
                    <input type="text" name="paper_details" id="input" class="form-control" value="" title="" required>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Academic Level</label>
                     <input type="text" name="academic_level1" id="academic_level1" class="form-control" value="<?php echo $academic_level; ?> " readonly>

                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Format</label>
                    <!-- <input type="text" name="format" id="input" class="form-control" value="" title=""> -->
                    <select name="format" id="input" class="form-control" required="required" value="" title="" required>
                        <option value="">Please Select</option>
                        <option value="APA">APA</option>
                        <option value="MLA">MLA</option>
                        <option value="Harvard">Harvard</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Turabian">Turabian</option>
                        <option value="IEEE">IEEE</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Number of Pages</label>
                    <input type="text" name="pages1" id="pages1" class="form-control" value="<?php echo $pages; ?> " readonly>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Number of Slides</label>
                    <input type="text" name="slides" id="inputSlides" class="form-control" value="0" title="" required>
                    <!-- <select name="slides" id="inputSlides" class="form-control" required="required">
                        <option value="Slide1">Slide1</option>
                        <option value="Slide2">Slide2</option>
                        <option value="Slide3">Slide3</option>
                        <option value="Slide4">Slide4</option>
                        <option value="Slide5">Slide5</option>
                    </select> -->
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Deadline</label>
                     <input type="text" name="deadline1" id="deadline1" class="form-control" value="<?php echo $deadline; ?> " readonly>

                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Comments</label>
                    <input type="text" name="comments" id="input" class="form-control" value="" title="" required>
                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Your Discounted Price</label>
                   <input type="number" name="discountedpricenew1" id="discountedpricenew1" class="form-control" value="<?php echo $discountedprice; ?>" readonly> 

                </div>
                <div class="col-md-12">
                    <label for="Writing Types">Upload File</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div>
                    <a href="https://paperwritersltd.com/Register/"> I am new at PaperWritersltd.com </a>
                </div>
                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

                <div>

                <!-- End of old form -->
            </form>
        </div>

        <br><br>

    </div>



</body>
</html>

<?php 
    $_SESSION['var1'] = $discountedprice ;

    // $con=mysqli_init(); 
    // mysqli_ssl_set($con, NULL, NULL, NULL, NULL, NULL); 
    // $mysqli = mysqli_real_connect($con, "destroysever.mysql.database.azure.com", "devlag@destroysever", "Asdfghjkl", "order", 3306);

    // $databaseHost = 'https://www.paperwritersltd.com'; 
    // $databaseName = 'order'; 
    // $databaseUsername = 'devlag@destroysever'; 
    // $databasePassword = '12345';
    // $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    $databaseHost = 'localhost'; 
    $databaseName = 'paperwr1_order'; 
    $databaseUsername = 'paperwr1_chidi'; 
    $databasePassword = 'chidi@lotus';
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


    // $databaseHost = 'localhost'; $databaseName = 'orders'; $databaseUsername = 'root'; $databasePassword = '';
    // $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    if(mysqli_connect_error($mysqli)){
        echo "Still not connecting at all";
    }

    if(isset($_POST['submit'])) {  
        function randomString($length = 8) {
            $str = "";
            $characters = array_merge(range('A','Z'), range('0','9'),range('a','z'));
            $max = count($characters) - 1;
            for ($i = 0; $i < $length; $i++) {
                $rand = mt_rand(0, $max);
                $str .= $characters[$rand];
            }
        return $str;  
        }      


        
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        //$name = $_POST['name'];
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        //$email = $_POST['email'];
        $phone_number = mysqli_real_escape_string($mysqli, $_POST['phone_number']);
        //$phone_number = $_POST['phone_number'];
        $writing_type1 = mysqli_real_escape_string($mysqli, $_POST['writing_type1']);
        $service_type1 = mysqli_real_escape_string($mysqli, $_POST['service_type1']);
        $course = mysqli_real_escape_string($mysqli, $_POST['course']);
        $title = mysqli_real_escape_string($mysqli, $_POST['title']);
        $paper_details = mysqli_real_escape_string($mysqli, $_POST['paper_details']);
        $academic_level1= mysqli_real_escape_string($mysqli, $_POST['academic_level1']);
        $format = mysqli_real_escape_string($mysqli, $_POST['format']);
        $pages1 = mysqli_real_escape_string($mysqli, $_POST['pages1']);
        $slides = mysqli_real_escape_string($mysqli, $_POST['slides']);
        $deadline1 = mysqli_real_escape_string($mysqli, $_POST['deadline1']);
        $comments = mysqli_real_escape_string($mysqli, $_POST['comments']);
        $referenceId = randomString();
        
        $discountedpricenew1 =  mysqli_real_escape_string($mysqli, $_POST['discountedpricenew1']);;
        //$price = $_POST['price'];
        $time_created = date('Y/m/d H:i:s');

        $post_image= $_FILES['image']['name'];
        $image_tmp= $_FILES['image']['tmp_name'];

       
        if(empty($name) || empty($email)) {
            echo "<script>alert('No!')</script>";
            exit();
        } else {    
            move_uploaded_file($image_tmp,"$post_image");
            $result = mysqli_query($mysqli, "INSERT INTO payment(name,email,phone_number,writing_type,paper_type,course,title,paper_details,academic_level,format,
                pages,slides,deadline,comments,price,time_created,image,referenceId) VALUES('$name','$email','$phone_number','$writing_type1','$service_type1','$course','$title','$paper_details','$academic_level1','$format',
                '$pages1','$slides',
                '$deadline1','$comments',
                '$discountedpricenew1',
                '$time_created',
                '$post_image','$referenceId')");

            
                $_SESSION["ssemail"] = $email;
                $_SESSION["ssphone"] = $phone_number;
                $_SESSION["referenceId"] = $referenceId;
                $_SESSION["ssname"] = $name;
                $_SESSION["sstitle"] = $title;
                $_SESSION["ssprice"] = $discountedpricenew1;    

            echo "<script>alert('Proceed To Secured Payment')</script>";
//new script begins
// new script end

                //$_SESSION["ssprice"] = $discountedpricenew;
                // echo "<script>alert($_SESSION['ssname']) </script>";



        echo "<script>window.open('orderProcessed.php','_self')</script>";
        }
    }
    ?>