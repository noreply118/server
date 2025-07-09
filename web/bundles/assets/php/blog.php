<?php
$baseurl = "https://www.ratetrade.ca/";
$hostname = "localhost";
$username = "laravel_two";
$password = "W0m7{{QH;v61";
$dbname = "laravel_two";
define('DB_CHARSET', 'utf8mb4');

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset
if (!mysqli_set_charset($conn, DB_CHARSET)) {
    die("Error loading character set " . DB_CHARSET . ": " . mysqli_error($conn));
}


$blog_sql=mysqli_query($conn,"SELECT p1.*, wm2.meta_value FROM wp_posts p1 LEFT JOIN wp_postmeta wm1 ON ( wm1.post_id = p1.id AND wm1.meta_value IS NOT NULL AND wm1.meta_key = '_thumbnail_id' ) LEFT JOIN wp_postmeta wm2 ON ( wm1.meta_value = wm2.post_id AND wm2.meta_key = '_wp_attached_file' AND wm2.meta_value IS NOT NULL ) WHERE p1.post_status='publish' AND p1.post_type='post' ORDER BY p1.post_date DESC LIMIT 4");
while($row_blog=mysqli_fetch_assoc($blog_sql))
{ 
$viewcounter=mysqli_fetch_assoc(mysqli_query($conn , "Select meta_value FROM wp_postmeta WHERE  meta_key='post_views_counts' AND  post_id= '".$row_blog["ID"]."'"));
if($viewcounter!=''):
    $count=$viewcounter['meta_value'];
    
    else:
        
    $count = 0;
    
    endif;
?>
 <div class="col-md-3 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
     <div class="recent-post alt">
         <div class="media">
             <a class="media-link" href="https://www.ratetrade.ca/blog/<?php echo $row_blog["post_name"]; ?>">
                 <div class="badge type">
                     <div class="meta-date">
                         <div class="day"><?php echo date('j ', strtotime($row_blog['post_date'])); ?></div>
                         <div class="month"><?php echo date('M ', strtotime($row_blog['post_date'])); ?></div>
                      </div>
                </div>
                <img class="media-object" src="https://www.ratetrade.ca/blog/wp-content/uploads/<?php echo $row_blog["meta_value"] ?>" alt="<?php echo $row_blog["post_title"] ?>">
                <i class="fa fa-plus"></i>
            </a>
            <div class="media-body">
                <div class="media-meta">
                    By Admin
                    <span class="divider">|</span><a href="https://www.ratetrade.ca/blog/<?php echo $row_blog["post_name"]; ?>"><i class="fa fa-comment"></i>0</a>
                    <span class="divider">|</span><a href="https://www.ratetrade.ca/blog/<?php echo $row_blog["post_name"]; ?>"><i class="fa fa-heart"></i>0</a>
                    <span class="divider">|</span><a href="https://www.ratetrade.ca/blog/<?php echo $row_blog["post_name"]; ?>"><i class="fa fa-eye" aria-hidden="true"></i><?php echo $count; ?></a>
                </div>
                <h4 class="media-heading" style="min-height:60px">
                    <a href="https://www.ratetrade.ca/blog/<?php echo $row_blog["post_name"]; ?>"><?php echo $row_blog["post_title"] ?></a>
                    </h4>
                <div class="media-excerpt" style="text-align: justify;"><?php echo substr($row_blog["post_excerpt"],0 ,190)  ?> ...</div>
                <a href="https://www.ratetrade.ca/blog/<?php echo $row_blog["post_name"]; ?>"style="margin-left: 95px;margin-top: 50px;"> Read More </a>
              

            </div>
        </div>
    </div>
</div>
<?php
} 
?> 