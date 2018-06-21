<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php loginCreate(); ?>
<?php include 'includes/header.php'; ?>

    
    <div class="container">
        
        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
            <form action="loginCreate.php" method="post">
                <div class="form-group">
                   <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username">
                    
                </div>
                <div class="form-group">
                   <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                    
                </div>
               
                <input type="submit" class="btn btn-primary" name="submit">
                    
            </form>
            
        </div>
        
    </div>
    
<?php include 'includes/footer.php'; ?>
