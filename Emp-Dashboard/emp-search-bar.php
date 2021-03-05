
<div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 lime-border" onKeyUp="show()" type="text" placeholder="Search orders here..." aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fa fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
</div>

<br>

<div class="card mb-4" id="check" style="display: none;">
	<div class="card-block">
		<div class="divider" style="margin-top: 1rem;"></div>
		<div class="articles-container">
			<div class="article border-bottom">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-2 date">

							<div class="large">30</div>

						</div>
						<div class="col-10">
							<h4><a href="#"> Available leads </a></h4>
							<p>...</p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div><!--End .article-->

		</div>
	</div>
</div>


<script>
	
	function show(){
		document.getElementById("check").style.display = "block";
	} 

</script>