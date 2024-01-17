<html>
<head>
<?php
	include 'style_links/style_links.php';
  ?>
</style>
<script>
$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

</script>
</head>

<body>


<?php 
include 'index_menu.php';
 ?><center>
<div class="container">
<div class="col-md-10"><br>
    <div class="form-area">  
	<h5><b><p style="color:green;"> Integrated Information System for Job Search  </p></b></h5>  
        <form role="form">
        <br style="clear:both">
                  <center>  <h5><b><u><p style="color:#DE3163;">  Contact Form  </p></b></u></h5> </center>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
                    <br>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Address" required>
					</div>
                    <br>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
                    <br>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Qualifications" required>
					</div><br>
                                
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form></center>
    </div>
</div>
</div>
</body>
</html>
