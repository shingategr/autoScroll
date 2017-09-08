<?php
include("connection.php");
//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

if(!is_numeric($page_number)){
    header('HTTP/1.1 500 Invalid page number!');
    exit();
}

$position = (($page_number-1) * $item_per_page);

$results = $mysqli->prepare("SELECT id, name, message FROM paginate ORDER BY id DESC LIMIT ?, ?");
$results->bind_param("dd", $position, $item_per_page); 
$results->execute();
$results->bind_result($id, $name, $message);
while($results->fetch()){
    echo ' <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="well well-sm">
                        <div class="row">                  
                            '.$id.') <div class="col-sm-8 col-md-8">'.$name.'</div> : '.$message.'/div>
                    </div>
                </div> <div class="clearfix"></div>     '; 
}