<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>
    <?php 
      $query = "SELECT * FROM posts";
                    $select_posts = mysqli_query($conn, $query);
                                
                    while($row = mysqli_fetch_assoc($select_posts)) {
                    $post_id = $row['post_id'];
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_category_id = $row['post_category_id'];
                    $post_status = $row['post_status'];
                    $post_image = $row['post_image'];
                    $post_tags = $row['post_tags'];
                    $uthor_comments_count = $row['author_comments_count'];
                    $post_date = $row['post_date'];
                    
                        
                    echo "<tr>";
                    echo "<td>{$post_id}</td>";
                    echo "<td>{$post_author}</td>";
                    echo "<td>{$post_title}</td>";
                    echo "<td>{$post_category_id}</td>";
                    echo "<td>{$post_status}</td>";
                    echo "<td><img width ='100' src ='../pictures/{$post_image}'></td>";
                    echo "<td>{$post_tags}</td>";
                    echo "<td>{$uthor_comments_count}</td>";
                    echo "<td>{$post_date}</td>";
                    echo"</tr>";
                    }

    ?>
                                
                                
                                <td>10</td>
                                <td>Kevin</td>
                                <td>Test Post</td>
                                <td>Test Category</td>
                                <td>Status</td>
                                <td>Image</td>
                                <td>tags</td>
                                <td>comments</td>
                                <td>Date</td>
                            </tr>
                        
                        </tbody>
                            
                          </table>