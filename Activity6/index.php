<!DOCTYPE html>
<html>
    <head>
        <title>AppDev-MT_Activity 6 - Scroll Spy</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style>
            section {
                width: 100vw;
                height: 100vw;
                padding-top: 50px;
            }
            h1{
                padding: 0;
                margin: 0;
                
            }
        </style>
    </head>
    
    <body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#product">Products</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>

        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <ul class="nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#product">Products</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>

        <section id="home" style="background: green;">
            <h1>Home</h1>
        </section>

        <section id="about" style="background: blue;">
            <h1>About Us</h1>
        </section>

        <section id="product" style="background: red;">
            <h1>Product</h1>
        </section>

        <section id="contact" style="background: gray">
            <h1>Contact Us</h1>
        </section>

    </body>
</html>