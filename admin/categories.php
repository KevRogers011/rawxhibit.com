<?php include 'includes/admin_header.php'; ?>


 <?php deleteCategories(); ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>
                        
                        <div class="col-xs-6">
                            
<!--                            INSERT CATEGORIES PHP CODE-->
                            
                            <?php
                           insert_categories();
                            ?>
                            
                      <form action="" method="post">
                          <div class="form-group">
                              <label for="cat_title"> Add Category</label>
                              <input type="text" class="form-control" name="cat_title">
                          </div>
                          <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                          </div>
                        
                        
                        </form>
<!--                            EDIT FORM -->
                           <?php
                            if(isset($_GET['edit'])){
                                
                                $cat_id = $_GET['edit'];
                                include 'includes/update_categories.php';
                            }
                            
                            ?>
                            
                            </div>
<!--                        Add category form-->
                        <div class="col-xs-6">
                            
             
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
            
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                    
                                    </tr>
                                
                                </tbody>
                                
<!--                                SELECT CATEGORIES PHP CODE-->
                                
                                <?php 
//                                FIND ALL CATEGORES QUERY
                    $query = "SELECT * FROM categories";
                    $selectCategories = mysqli_query($conn, $query);
                                
                    while($row = mysqli_fetch_assoc($selectCategories)) {
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    echo "<tr>";
                    echo "<td>{$cat_title}</td>";
                    echo "<td>{$cat_id}</td>";
                    echo "<td><a href='categories.php?Delete={$cat_id}'>Delete</a></td>";
                    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                    echo "</tr>";
                    
                }
                                ?>
                                
                               
                            </table>
                        </div>
                            
                        
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php include 'includes/admin_footer.php'; ?>