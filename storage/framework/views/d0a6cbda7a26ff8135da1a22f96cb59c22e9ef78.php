<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
</head>
<body>
<div id="app">
<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class = container>
        <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="jumbotron text-center">
                        <h2>Welcome to TutorFriend</h2><br><br>
                        <div class="form-group">
                                <form class="form-horizontal" action="/search" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                        <input type="text" class="form-control" name="subject" placeholder="Search Subjects"><br>
                                        <div class="form-group">        
                                                <div class="row-sm-10">
                                                <button type="submit" class="btn btn-default">SEARCH</button>
                                                </div>
                                        </div>

                                </form>

                        </div>
                        <br><br>
                        <div class="form-group">        
                                <div class="row-sm-10">
                                        <a href ="/searchhome" ><button type="submit" class="btn btn-primary">ADVANCED SEARCH</button></a>
                                </div>
                        </div>

                </div>
                                    
                                    
        </div>
</div>


</body>
</html>