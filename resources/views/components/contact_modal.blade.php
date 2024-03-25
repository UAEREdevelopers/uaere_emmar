


<!-- The Modal -->
<div id="myModal" class="modal-uaere">

  <!-- Modal content -->
  <div class="modal-uaere-content">
    <span class="close">&times;</span>
    						<div class="comment-form">
									<div class="title" style="text-align:center;text-transform: uppercase;">
                		<h3 style="color:#ffffff">Enquire about <span> Community<span> </h3>
                	</div>
									<div class="row">
										<form method="get" action="#">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="">
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
												 	<input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required="">
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
												 	<input type="text" id="phone" class="form-control" name="phone" placeholder="Phone Number" required="">
												</div>
											</div> <!-- /.col- -->

											
											<div class="form-group col-xs-12 col-md-12 col-lg-12" style="text-align:center;">
												<button type="button" name="submit" class="comment-form-btn gen-btn" style="background-color: #424235;">Submit Enquiry</button>
											</div>
										</form>
									</div> <!-- /.row -->
								</div>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>