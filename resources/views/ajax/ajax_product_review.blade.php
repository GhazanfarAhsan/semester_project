<div id="container" class="all-border">
		<div id="parentHorizontalTab2">

			<ul class="resp-tabs-list hor_1">
				<li>Write a Review(s)</li>
				<li data-id="{{$productData->id}}" id="fetching">Review(s)</li>
				
			</ul>
			<div class="resp-tabs-container hor_1">

				<!--Start Write a Review(s)-->
				<div>

					<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 border padding margin-tb5">
						<p><b>Name</b></p>	
					</div>

					<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border padding margin-tb5">

						<input type="text" class="pd-review" name="rating-name" id="rating-name" placeholder="Full Name" required="">	

							
						<div id="reviewname"></div>

					</div>

					<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 border padding margin-tb5">
						<p><b>Email</b></p>	
						
					</div>

					<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border padding margin-tb5">

						<input type="email" class="pd-review" name="rating-email" id="rating-email" placeholder="Email" required="">

						
						<div id="reviewemail"></div>

					</div>

					<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 border padding margin-tb5">
						<p><b>Comments</b></p>	
					
					</div>

					<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border padding margin-tb5">

						<textarea class="pd-review-comment" name="rating-comments" id="rating-comments" placeholder="Comments" required></textarea>

					
						<div id="reviewcomment"></div>

					</div>

					<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 border padding margin-tb5">
						<p><b>Select Rating</b></p>	
					</div>

					<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border padding margin-tb5">
						<select class="pd-review-rating" name="rating" id="rating-star" required>
							<option value="">Select Rating</option>
							<option value="1">1 Rating</option>
							<option value="2">2 Rating</option>
							<option value="3">3 Rating</option>
							<option value="4">4 Rating</option>
							<option value="5">5 Rating</option>
						</select>
						<div id="reviewrating"></div>
					</div>

					<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 border padding margin-tb5">
						<p><b>Captcha</b></p>	
						
					</div>

					<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border padding margin-tb5">
						<form method="get" action="{{url('getcaptcha')}}">
							<div class="captcha">
				               <span>{!! captcha_img() !!}</span>
				               <button type="button" class="btn btn-primary"><i class="fa fa-refresh" id="refresh"></i></button>
				             </div>
						</form>
						

					</div>
					<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 border padding margin-tb5">
						<p><b></b></p>	
						
					</div>
					<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border padding margin-tb5">
						<input type="text" class="pd-review" name="captcha" id="captcha" placeholder="Enter the image text" required="">

						
						<div id="reviewcaptcha"></div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb5">
						<button type="submit" class="pd-review-submit" id="rating-submit" data-id="{{$productData->id}}">Submit</button>

						<div id="reviewdiv"></div>

						<div id="successdiv"></div>

					</div>

				


					<div class="clr"></div>
				</div>
				<!--End Write a Review(s)-->
				
				
				<!--Start Review(s)-->
				<div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fix-reviews padding" id="reviewdata">
						@foreach($reviewData as $rsreviewData)
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border pd-reviews">

								<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 boder margin-tb5">
									<p><b>Customer Name</b></p>	
								</div>

								<div class="col-xs12 col-sm-9 col-md-10 col-lg-10 boder margin-tb5">
									<p><b>{{$rsreviewData->full_name}}</b></p>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb5">
									<p>{{$rsreviewData->comments}}</p>
								</div>


							</div>
						@endforeach
						<div class="clr"></div>
					</div>
				</div>
				<!--End Review(s)-->
								
			</div>
		</div>
		<div class="clr"></div>
	</div>