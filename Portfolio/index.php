<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
    section{
        width: 100vw;
        height: 100vw;
        padding: 50px;
    }
    .cl_white{
        color: white;
    }
    img{
        width: 300px;
        transition: opacity 1s ease-in-out;
    }
    img:hover{
        opacity: .10;
    }
    .col-text{
        -webkit-column-count: 3;
    }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#work">What I Do</a></li>
            <li><a href="#about">What About Me</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>

    <!--Home Section-->
    <section id="home" style="background: url(image/header.jpeg); background-size: 100% 100%;" class="cl_white text-center">
        <h1>My Portfolio</h1>
        <p class="lead">Welcome to my world! The Life of a Programmer.</p>
        <button class="btn btn-default">Contact Me</button>
    </section>
    
    <!--What I Do Section-->
    <section id="work" class="container">
        <div class="page-header">
            <h1 class="text-center">My Work</h1>
        </div>
        <div class="text-center">
            <img src="image/port1.jpg" class="img-thumbnail"/>
            <img src="image/port2.png" class="img-thumbnail"/>
            <img src="image/port3.png" class="img-thumbnail"/>
            <img src="image/port4.png" class="img-thumbnail"/>
        </div>
    </section>

    <!--What About Me Section-->
    <section id="about" class="container">
        <h2 class="text-center">My Skills</h2>
        <div class="col-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum 
            iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</div><br/>
        
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>PHP Programmer</h4>
                    </div>
                    <div class="panel-body">
                        <img src="image/me.png" class="img-circle center-block">
                        <p class="lead text-center">I do PHP Programming</p>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Web Designer</h4>
                    </div>
                    <div class="panel-body">
                        <img src="image/me2.jpg" class="img-circle center-block" style="height: 300px;">
                        <p class="lead text-center">I do CSS BootStrap Designing</p>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" style="background: silver;">
       <div class="page-header">
            <h2 class="text-center">Contact Me</h2>
       </div> 
       <form class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <input class="form-control" placeholder="Enter Your Name" type="text"/>
            </div> 
            <div class="form-group">
                <input class="form-control" placeholder="Enter Your Email" type="email"/>
            </div> 
            <div class="form-group">
                <input class="form-control" placeholder="Subject" type="text"/>
            </div> 
            <div class="form-group">
                <textarea class="form-control" rows="10">Comments</textarea>
            </div> 
            <div class="form-group">
                <input class="btn btn-success btn-block" type="submit"/>
            </div> 
       </form>
    </section>
</body>
</html>