<?php 
echo "<div class='myComments'>";
$comment_number = get_comments_number();
if($comment_number == 1){
    echo $comment_number."Comment";
}else{
    echo $comment_number."Comments";
}
echo "<hr />";

echo wp_list_comments();

echo "<hr />";
if( ! comments_open() ){
    echo "<p style=\"color:red \">Comments Are Closed</p>";
}
comment_form();

echo "</div>";


