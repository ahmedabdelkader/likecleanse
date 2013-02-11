<?php include DIR_TMPL.'/header.php'; ?>


	<p class="lead">We have liked things in the past... maybe too many things to remember. Now those very things are being used to advertise to your friends! I created this tool in efforts to reducing wall clutter that we might not have known we had. Click the button bellow to login, view the items that might be un-worthy of your 'liking' and then simply 'un-like' them.</p>
	<a class="cleanme btn btn-large btn-success" href="#" data-loading-text="loading..." data-complete-text="finished!">Cleanse Me Now</a>
	<div class="alert alert-block alert-error">
	    <button type="button" class="close" data-dismiss="alert">×</button>
	    <h4 class="alert-heading">Oops! You got an error!</h4>
	    <p>You cancled the login, which makes impossible to show your likes</p>
	    <p>
	      <a class="btn btn-danger" href="#">Try Again</a> 
	    </p>
  	</div>
  	<div id="lholder"></div>

<?php include DIR_TMPL.'/footer.php'; ?>
