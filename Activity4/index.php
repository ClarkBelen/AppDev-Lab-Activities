<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>AppDev-MT_Activity 4</title>
  </head>
    

  <body>
    <h1>Activity 4 </h1>

    <div class="container">
        <div class="page-header">
            <h1>Form Validation Syles</h1>
        </div>
        <form class="form-inline">
            <div class="form-group">
                <label>Name</label>
                <input type="text" disabled class="form-control">                
            </div>

            <div class="form-group has-feedback has-warning">
                <label>Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>               
            </div>

            <div class="form-group has-feedback has-success">
                <label>Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>               
            </div>

            <div class="form-group has-feedback has-error">
                <label>Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>               
            </div>
        </form>

        <div class="page-header">
            <h1>Form Validation Syles</h1>
        </div>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" disabled class="form-control">                
            </div>

            <div class="form-group has-feedback has-warning">
                <label>Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>               
            </div>

            <div class="form-group has-feedback has-success">
                <label>Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>               
            </div>

            <div class="form-group has-feedback has-error">
                <label>Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>               
            </div>
        </form>
    </div>

    <br/>
    <br/>
    <br/>
    <hr/>
    <div class="container">

        <div class="page-header">
            <h1>My Form Horizontal 2</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Email</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Password</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="comment" class="control-label col-md-2">Comment</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="10"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Skills</label>
                <div class="col-md-10">
                    <div class="checkbox">
                        <label><input type="checkbox">PHP</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox">BOOTSTRAP</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox">JAVA</label>
                    </div>    
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Skills</label>
                <div class="col-md-10">
                    <div class="checkbox">
                        <label class="checkbox-inline"><input type="checkbox">PHP</label>
                        <label class="checkbox-inline"><input type="checkbox">BOOTSTRAP</label>
                        <label class="checkbox-inline"><input type="checkbox">JAVA</label>
                    </div>   
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Gender</label>
                <div class="col-md-10">
                    <div class="radio">
                        <label><input type="radio" name="gender">Male</label>
                    </div>   
                    <div class="radio">
                        <label><input type="radio" name="gender">Female</label>
                    </div>  
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Gender</label>
                <div class="col-md-10">
                    <div class="radio">
                        <label class="radio-inline"><input type="radio" name="gender">Male</label>
                        <label class="radio-inline"><input type="radio" name="gender">Female</label>
                    </div> 
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Course</label>
                <div class="col-md-10">
                    <select class="form-control">
                        <option>BSCS</option>
                        <option>BSIT</option>
                        <option>BSIS</option>
                        <option>BSEMC</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button class="btn btn-success btn-block">Click to Submit</button>
                </div>
            </div>

        </form>

        <div class="page-header">
            <h1>My Form Horizontal</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Email</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Password</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Confirm Password</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>
        </form>

        <div class="page-header">
            <h1>My Form Inline</h1>
        </div>
        <form class="form-inline">
            <div class="form-group">
                <label for="name">Enter Your Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Enter Your Email</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Enter Your Password</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Confirm Password</label>
                <input type="text" class="form-control">
            </div>
        </form>

        <div class="page-header">
            <h1>My Form Design</h1>
        </div>
        <form class="col-md-8">
            <div class="form-group">
                <label for="name">Enter Your Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Enter Your Email</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Enter Your Password</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Confirm Password</label>
                <input type="text" class="form-control">
            </div>
        </form>
    </div>


    <br/>
    <br/>
    <br/>
    <hr/>
    <?php
        /*
            <nav class="navbar navbar-default">
            <nav class="navbar navbar-inverse">
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <nav class="navbar navbar-inverse navbar-fixed-bottom">
        */
    ?>

    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">College</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">CCS</a></li>
                        <li><a href="#">CET</a></li>
                        <li class="active"><a href="#">CBA</a></li>
                        <li><a href="#">CAS</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

    </body>
</html>