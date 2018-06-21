<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>
<?php loginDelete(); ?>
<?php include 'includes/header.php'; ?>
    
    <div class="container">
        
        <div class="col-sm-6">
            <h1 class="text-center">Delete</h1>
                        <form action="loginDelete.php" method="post">
                <div class="form-group">
                   <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username">
                    
                </div>
                <div class="form-group">
                   <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                    
                </div>
                
                <div class="form-group">
                    <select name="id" id="">
                        
                        <?php
                                
                            showAllData();
                        
                        ?>
                        
                        
                    
                    </select>
                </div>
               
                <input type="submit" class="btn btn-danger" name="submit" value="DELETE">
                    
            </form>

            
            
        </div>
        
    </div>
<?php include 'includes/footer.php'; ?>