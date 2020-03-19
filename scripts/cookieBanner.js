
	
	var cookieBanner = document.getElementById("cookieBanner");
	var cookieOpen = document.getElementById("cookieOpen");

			cookieOpen.onclick = function() {
 				 cookieBanner.style.display = "block";
			}

			span.onclick = function() {
			  modal.style.display = "none";
			}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



			<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>



			function openwin(){
					window.open ("cookieBanner.html", "","width=400,height=200");

			}
		</script>
