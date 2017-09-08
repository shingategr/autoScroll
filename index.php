<?php include('header.php'); ?>
<body>
<div>
<br><br><br>
<div class="cleafix"></div>
        <div class="container">
            <div class="alert alert-info">
                <strong>Hi..</strong> Show Data on Page Scroll using jQuery Ajax PHP from MySQL Database
            </div>
           <div class="alert alert-warning">
                <a href="https://drive.google.com/open?id=0BxmTZPVcu72fWmEwNXRCU1hVd2M
" class="btn btn-xs btn-warning pull-right" target="blank();">Click</a>
                <strong> Code download link-</strong>
            </div>
         <br><br>  
    </div>
   <div class="container">
            <div class="row" >
                    <div  id="results"></div>  
            </div>
        <div class="clearfix"></div>  
    <div class="loading-info">
        <img src="ajax-loader.gif" />
    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript">
        var track_page = 1; 
        var loading  = false; 
        load_contents(track_page);
        //
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) { 
            track_page++; 
            load_contents(track_page);
        }
    });     
//Ajax load function
function load_contents(track_page){
    if(loading == false){
        loading = true; 
        $('.loading-info').show();
        $.post( 'fetch_data.php', {'page': track_page}, function(data){
            loading = false; 
            if(data.trim().length == 0){               
                $('.loading-info').html("No more records!");
                return;
            }
            $('.loading-info').hide(); 
            $("#results").append(data);
        
        }).fail(function(xhr, ajaxOptions, thrownError) { 
            alert(thrownError); 
        })
    }
}
</script>