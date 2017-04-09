<?php

function confirmQuery($result) {
    global $conn;
    
    if(!$result){
      die("QUERY FAILED ." . mysqli_error($conn));  
    }    

    
}


function insert_categories() {
     if(isset($_POST['submit'])){
            global $conn;   
         
            $cat_title = $_POST['cat_title'];
                                
            if(cat_title == "" || empty($cat_title)){
                                    
            echo "This field should not be empty";
             }else{
                                    
            $query = "INSERT INTO categories(cat_title) ";
             $query .= "VALUE('{$cat_title}') ";
                                    
            $create_category_query = mysqli_query($conn, $query);
                                    
            if(!$create_category_query) {
                                        
             die('QUERY FAILED' .mysqli_error($conn));
            }
            }
     } 
}   



function findAllCategories(){
    global $conn; 
//                   FIND ALL CATEGORES QUERY
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
    
}


function deleteCategories() {
    global $conn;
    
     
                                if(isset($_GET['Delete'])){
                                    $the_cat_id = $_GET['Delete'];
                                    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                                    $delete_query = mysqli_query($conn, $query);
                                    header("Location: categories.php");
}
}
?>