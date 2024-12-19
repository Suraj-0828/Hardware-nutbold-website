<!DOCTYPE html>
<html>

<head>
    <!-- Title and Discription start -->
	<meta charset="UTF-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Submission Successful</title>

	<meta name="description"
		content="Thank you for contacting Pratham Industries! Your form has been submitted successfully, and our team will respond soon.">
	
	<meta name="Keywords" content="Here you type your SEO content..... Key like.......">

	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<meta name="language" content="English">
	<meta name="generator" content="N/A">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Pragma" content="no-cache" />
	<!-- Title and Discription close -->
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="images/feb-icon.png" type="image/x-icon">
    <link rel="icon" href="images/feb-icon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        .success {
            text-align: center;
            margin: auto;
            background-color: gray;
            color: black;
        }

        .successful {
            text-align: center;
            margin: auto;
            padding: 60px 50px 20px 50px;
            font-size: 45px !important;
            color: black;
        }

        .imgg {
            max-width: 100%;
        }

        .img-size {
            width: 100px;
            height: 100px;
            margin: auto;
            margin-top: 25px;
            margin-bottom: -20px;
        }

        .text-black {
            padding-bottom: 30px;
        }

        .color-success {
            color: #6BC839;
        }

        .pp {
            text-align: center;
            font-size: 20px;
        }

        @media (max-width: 576px) {

            /* Extra small devices (phones) */
            .successful {
                font-size: 15px !important;
            }
        }
    </style>

</head>

<body>
    <div class="cursor"></div>


    <?php
    // Check if the 'name' parameter is set in the URL
    if (isset($_GET['name'])) {
        // Get the name from the URL parameter
        $name = htmlspecialchars($_GET['name']);
    } else {
        $name = "Guest";  // Default value if no name is provided
    }
    ?>


    <!-- PageWrapper -->
    <div class="page-wrapper">


        <!-- scrollToTop start -->
        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
            </svg>
        </div>
        <!-- scrollToTop end -->

        <!-- Header Pages -->
        <?php include 'header.php'; ?>
        <!-- Header Pages -->

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(images/background/9.png)">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Success</li>
                </ul>
                <h2>Success</h2>
            </div>
        </section>
        <!-- End Page Title -->


        <div class="container pt-5 pb-4">
            <div class="img-size">
                <img class="imgg" src="images/home/success.png" />
            </div>
            <div class="successful text-black">
                Thank you, <span class="font-weight-bold"><?php echo $name; ?>,</span> for your inquiry!<br><br><br>
                Your Request Has Been <span class="bold-name">Successfully</span> Submited
            </div>
            <div class="pp text-black">
                Our dedicated care coordinator will reach out to you as soon as possible to assist you further.
            </div>
        </div>




        <!-- Footer Pages -->
        <?php include 'footer.php'; ?>
        <!-- Footer Pages -->