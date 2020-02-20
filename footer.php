
<footer id="footer" class="footer" style="background-color: #333333;">
	<div class="container">
		<div class="row" style="display: flex;">
			<div class="col-9" style="width: 75%; display: flex;">
				<div class="col-3" style="width: 25%;">
					<div class="platform" style="text-align: left;">
						<h5 style="color: #ffffff; margin-bottom: 50px">PLATFORM</h5>
						<ul>
							<li style="margin-left: 0; display: block;"><a href="#">Modify an Ad</a></li>
							<li style="margin-left: 0; display: block;"><a href="#">Advertising</a></li>
							<li style="margin-left: 0; display: block;"><a href="#">Terms of Use</a></li>
							<li style="margin-left: 0; display: block;"><a href="#">Privacy</a></li>
							<li style="margin-left: 0; display: block;"><a href="#">System</a> Status</li>
							<li style="margin-left: 0; display: block;"><a href="#">Unsubscribe</a></li>
						</ul>
					</div>
				</div>
				<div class="col-3" style="width: 25%;">
					<div class="support" style="text-align: left;">
						<h5 style="color: #ffffff; margin-bottom: 50px">SUPPORT</h5>
						<ul>
							<li style="margin-left: 0; display: block;"><a href="#">Knowledge Base</a></li>
							<li style="margin-left: 0; display: block;"><a href="#">All articles</a></li>
						</ul>
					</div>
				</div>
				<div class="col-3" style="width: 25%;">
					<div class="contactus" style="text-align: left;">
						<h5 style="color: #ffffff; margin-bottom: 50px">CONTACT US</h5>
						<ul>
							<li style="margin-left: 0; display: block;"><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-3" style="width: 25%; margin: auto 0;">
				<div class="free-ad">
					<button type="btn btn-default" style="color: #ffffff; background: #3490DB; border: 0; width: 100%; padding: 15px; font-size: 16px;">Place a Free Ad</button>
				</div>				
				<div class="follow" style="margin-top: 45px; display: flex; align-items: center; justify-content: space-between;">
					<h5 style="display: inline-block; color: #ffffff; text-transform: initial;">Follow us</h5>
					<ul style="display: flex;">
						<li style="margin-left: 0; display: inline-block; width: 40px; height: 40px; background: #38393A; display: flex; align-items: center; justify-content: center;">
							<div class="follow-img-wrapper" style="width: 25px;">
								<amp-img src="images/facebook.png" alt="logo" layout="responsive" height="25px" width="25px"></amp-img>
							</div>
						</li>
						<li style="margin-left: 0; width: 40px; height: 40px; background: #38393A; margin-left: 15px; display: flex; align-items: center; justify-content: center;">
							<div class="follow-img-wrapper" style="width: 25px;">
								<amp-img src="images/twitter.png" alt="logo" layout="responsive" height="25px" width="25px"></amp-img>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>


<style>
	.platform li a, .support li a, .contactus li a { color: rgba(255,255,255,.6); width: fit-content; }
	.platform li a:hover, .support li a:hover, .contactus li a:hover { color: #ffd1a2; }

	.support { position: relative; }
	.support:before { content: " "; border-left: 1px solid #4d4e4f; display: inline-block; position: absolute; height: 140%; left: -60px; top: 70px; }
	.support:after { content: " "; border-right: 1px solid #4d4e4f; display: inline-block; position: absolute; height: 140%; left: 160px; top: 70px; }
</style>