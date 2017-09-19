<style>
.sentence{
     color: #222;
     font-size: 30px;
     text-align: center;
	 
}

/*Vertical Sliding*/
.slidingVertical{
	display: block;
}
.slidingVertical span h2
{
font-size:40px;
}

.slidingVertical span{
	animation: topToBottom 12.5s linear infinite 0s;
	-ms-animation: topToBottom 12.5s linear infinite 0s;
	-webkit-animation: topToBottom 12.5s linear infinite 0s;
	opacity: 0;
	color:#333;
	font-size:30px;
	overflow: hidden;
	position: absolute;
	text-transform: uppercase;
	font-family: "ProximaNovaBold";
    padding: 10px 0 5px;
    line-height: 54px;
    font-size: 46px !important;
    margin: 0;
    height: 109px;
	margin-top: -120px;
    margin-left: -180px;

}
.slidingVertical span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.slidingVertical span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.slidingVertical span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.slidingVertical span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*topToBottom Animation*/
@-moz-keyframes topToBottom{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: translateY(-50px); }
	10% { opacity: 1; -moz-transform: translateY(0px); }
	25% { opacity: 1; -moz-transform: translateY(0px); }
	30% { opacity: 0; -moz-transform: translateY(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-webkit-keyframes topToBottom{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: translateY(-50px); }
	10% { opacity: 1; -webkit-transform: translateY(0px); }
	25% { opacity: 1; -webkit-transform: translateY(0px); }
	30% { opacity: 0; -webkit-transform: translateY(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes topToBottom{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: translateY(-50px); }
	10% { opacity: 1; -ms-transform: translateY(0px); }
	25% { opacity: 1; -ms-transform: translateY(0px); }
	30% { opacity: 0; -ms-transform: translateY(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
</style>
			<div id="home_promo">
				<div class="container">
	  			<div class="row">
	  				<div class="col-xs-60">
		  				<div class="promo_caption">
								<img src="assets/img/promo-pattern-top.png" class="center-block" alt="Responsive image">
	
		  					<h1 id="">
								<h2 class="sentence">
									<div class="slidingVertical">
										<span><h2>high liquidity<br>for your assets</h2></span>
										<span><h2>an affordable<br>way of Investment</h2></span>
										<span><h2>a start for <br> new opportunities</h2></span>
										<span><h2>a reliable partner<br> in your plans</h2></span>
										<span><h2>its simple to<br>enrich your life</h2></span>
									</div>
								</h2>
		  					</h1>
							
		  					<img src="assets/img/promo-pattern-bottom.png" class="center-block" alt="Responsive image">

									<a href="/register" class="btn btn_green center-block" data-toggle="modal" data-target="#call-back">REGISTRATION</a>
				  				</div>
	  				</div>
	  			</div>
				</div>

				<div id="shell">
		      <img src="assets/img/parallax/small-line.png" data-xrange="10" data-yrange="270" data-invert="true" id="plax-sphere-1"/>
		      <img src="assets/img/parallax/big-line.png" data-xrange="10" data-yrange="100" id="plax-sphere-2"/>
		      <img src="assets/img/parallax/men.png" data-xrange="60" data-yrange="30" data-invert="true" id="plax-sphere-3"/>
		      <img src="assets/img/parallax/girl.png" data-xrange="60" data-yrange="30" id="plax-sphere-4"/>
		      <img src="assets/img/parallax/diagramma.png" data-xrange="50" data-yrange="60" data-invert="true" id="plax-sphere-5"/>
		    </div>
			</div>

			<div id="home_invest">
				<img src="assets/img/logos-line.png" class="top_logos_line home_line" alt="Responsive image">
				<div class="block_title border_none">
					<h2>
						<img src="assets/img/title-img-left.png" class="title-img-left" alt="Responsive image">
						INVESTMENTS 
						<span>CRYPTO 2 BANK</span>
						<img src="assets/img/title-img-right.png" class="title-img-right" alt="Responsive image">
					</h2>
				</div>

				<div class="container">
	  			<div class="row">
	  				<div class="col-xs-60">
	  					<div class="">
									<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												BEGINER
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 100</strong></li>
												<li>Daily : <strong>1.25%</strong></li>
												<li>Total : <strong>137.5%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>10%</strong></li>
												<li>Sponsoring Level Bonus : <strong>0.5%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													1.25<span>%</span>
												</div>
												<div class="persen_box">
													 110 days

												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>
																																											
								
																					
										
																				
								<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												BEGINER PLUS
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 1000</strong></li>
												<li>Daily : <strong>1.5%</strong></li>
												<li>Total : <strong>157.5%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>11%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													1.5<span>%</span>
												</div>
												<div class="persen_box">
													 105 days

												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>
																																											
								
																					
										
																				
								<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												ADVANCE
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 1500</strong></li>
												<li>Daily : <strong>1.75%</strong></li>
												<li>Total : <strong>166.25%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>12%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													1.75<span>%</span>
												</div>
												<div class="persen_box">
													 95 days

												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>
																																											
								
																					
										
																				
								<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												ADVANCE PLUS
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 2500</strong></li>
												<li>Daily : <strong>2%</strong></li>
												<li>Total : <strong>170%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>13%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													2<span>%</span>
												</div>
												<div class="persen_box">
													 85 days
												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>
								
								
								<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												CRYPTO 1
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 2500</strong></li>
												<li>Daily : <strong>4%</strong></li>
												<li>Total : <strong>120%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>3.0%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													4<span>%</span>
												</div>
												<div class="persen_box">
													 30 days
												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>
								
								
								
								<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												CRYPTO 2
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 5000</strong></li>
												<li>Daily : <strong>4.5%</strong></li>
												<li>Total : <strong>135%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>3.5%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													4.5<span>%</span>
												</div>
												<div class="persen_box">
													 30 days
												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>
								
								<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												CRYPTO 3
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 7500</strong></li>
												<li>Daily : <strong>5%</strong></li>
												<li>Total : <strong>150%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>4.0%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													5<span>%</span>
												</div>
												<div class="persen_box">
													 30 days
												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>
								
								<div class="col-md-15">
									<div class="inv_box_bg">
										<div class="inv_box">
											<div class="title">
												CRYPTO 4
											</div>
											<img src="assets/img/pattern-inv.png" class="center-block" alt="Responsive image">
											<ul class="list-unstyled">
												<li>Investment : <strong>USD 10,000</strong></li>
												<li>Daily : <strong>5.5%</strong></li>
												<li>Total : <strong>165%</strong></li>
												<li>Withdrawal : <strong>DAILY</strong></li>
												<li>Sponsoring : <strong>5%</strong></li>
											</ul>

											<div class="persents">
												<div class="persen_box">
													Daily												</div>
												<div class="persen_box">
													5.5<span>%</span>
												</div>
												<div class="persen_box">
													 30 days
												</div>
											</div>

														<a href="#" data-toggle="modal" data-target="#call-back">choose</a>
													</div>
									</div>
								</div>

								
						
				  					</div>
								

	  				</div>
	  			</div>
				</div>
			</div>

			<div id="home_info">
				<img src="assets/img/logos-line.png" class="top_logos_line home_line" alt="Responsive image">
				<div class="block_title border_none">
					<h2>
						<img src="assets/img/title-img-left.png" class="title-img-left" alt="Responsive image">
						INFORMATION
						<span>ABOUT THE COMPANY</span>
						<img src="assets/img/title-img-right.png" class="title-img-right" alt="Responsive image">
					</h2>
				</div>

				<div class="container">
	  			<div class="row">
	  				<div class="col-xs-60">
	  					<div class="info_home_general">

	  						<div class="border"></div>

								<div class="row">
									<div class="col-xs-60">

										<div class="home_company home_info_box">
											<h3>ABOUT THE COMPANY</h3>

											<p class="text-justify">
How does one make decisions about what stocks to buy, or when to sell? Most rely on tips of splits and acquisitions with recommendations and opinions from self-proclaimed market experts. Crypto 2 Bank offers a fixed process on determined returns from a serious, disciplined approach to trading, trend-following, and market-timing with confirmed accuracy.</p><br>
<p class="text-justify">Those among us that don&rsquo;t understand crypto space or the underlying technology that is revolutionising everything known about finance and value storage are starting to realise that they control their own wealth.</p><br>
<p class="text-justify">Crypto systems and methods offer a continuously proven alternative to the traditional institutional methods, ultimately placing the individual in control.</p><br>
<p class="text-justify">Crypto 2 Bank is a prudently managed e investment arm of Crypto banks that have been established to facilitate effective and steady return on investments to vested clients across the Globe soldered to cross-border empowerments of implementation solutions in today&rsquo;s environment.<br><br>
We are one of just fifteen banks internationally that have been authorized to devote a parcel of our remittals towards quick repayments based on hedging activities conducted by our administrative in house agencies that offer insight, advice and recommendations on the rapidly growing crypto currency market.   <br><br>
Over the years, we have engaged in profitable market wide hedging on our revenue base as a source of external trade, participating in collaborations with funds entrusted to us. We have, through all, continued to protect deposits and provide great service, all while positively continuing to serve as a qualitative option for those that invest with us in the growing communities we operate in. <br><br>

											</p>

											<div class="tools_sign_link">
												<a href="/About">
													read more
													<span>
														<img src="assets/img/green-arrow.png" alt="Responsive image">
													</span>
												</a>
											</div>
										</div>

									</div>

									
								</div>
	  					</div>
	  				</div>
	  			</div>
				</div>
			</div>

			<!--div id="home_testimonials">
				<img src="assets/img/logos-line.png" class="top_logos_line home_line" alt="Responsive image">
				<div class="block_title border_none">
					<h2>
						<img src="assets/img/title-img-left.png" class="title-img-left" alt="Responsive image">
						TESTIMONIALS
						<span>CUSTOMERS REVIEWS</span>
						<img src="assets/img/title-img-right.png" class="title-img-right" alt="Responsive image">
					</h2>
				</div>
				
				<div class="container">
	  			<div class="row">
	  				<div class="col-xs-60">
	  					<div class="slick_testim">

	  					</div>
			  				
	  				</div>
	  			</div>
				</div>
			</div-->

			<div id="home_video">
				
				<div class="block_title border_none">
					<h2>
						<img src="assets/img/title-img-left.png" class="title-img-left" alt="Responsive image">
						VIDEO
						<span>ABOUT US</span>
						<img src="assets/img/title-img-right.png" class="title-img-right" alt="Responsive image">
					</h2>
				</div>

				<div class="container">
	  			<div class="row">
	  				<div class="col-xs-60">
		  				<div class="home_video_bg">
		  					<div class="centered_box">
		  						<div class="centered_content">
										<div class="home_video_box">
											<img src="assets/img/video-pattern-left.png" class="video-pattern-left" alt="Responsive image">
											<img src="assets/img/video-pattern-right.png" class="video-pattern-right" alt="Responsive image">
											<div class="embed-responsive embed-responsive-16by9">
											  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wBYv6rdAdS4?modestbranding=0&amp;showinfo=0&amp;rel=0"></iframe>
											  
											</div>
				  					</div>
		  						</div>
		  					</div>
		  				</div>
	  				</div>
	  			</div>
				</div>
			</div>

			<div id="home_finance" style='min-height:50px;'>
				
				<div class="block_title border_none">
					<h2>
						<img src="assets/img/title-img-left.png" class="title-img-left" alt="Responsive image">
						ONLINE FINANCE
						<span>UP TO DATE</span>
						<img src="assets/img/title-img-right.png" class="title-img-right" alt="Responsive image">
					</h2>
				</div>

				<div class="container" style='padding:40px 0;'>
					<div class="row">
						<div class="col-xs-60">


							<div class="graf_line">
							
									<marquee behavior="scroll" direction="left" scrollamount="5s" id='forex'>
									
									</marquee>
							</div> 
						</div>
					</div>
				</div>
			</div>





	
	

			




