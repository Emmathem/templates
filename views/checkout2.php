<? include __DIR__ .'/view-stubs/header.php'; ?>
<div class="all">
	@if(session('userToken') )

	<section class="checkout-page">
        <div class="checkout-container-left">
            <div class="c-title"> <span>Checkout</span> </div>
            <div class="checkout-details">
                <div class="order-title">
                    <h4>Address Details</h4> </div>
                <div class="inner-address">
				@if(isset($addresses))
					@if(count($addresses))
						@foreach($addresses as $address)
							<div class="pretty p-icon p-curve p-pulse">
								<input class="form-check-input ad" type="radio" @if($address->preferred == 'Y') checked  @endif  name="add" id="exampleRadios2" value="{{$address->id}}">
								<div class="state p-warning-o">
									<i class="icon fa fa-check"></i>
									<label> @if($address->preferred == 'Y') Default Address @else Billing Address  @endif</label>
								</div>
							</div>
							{{-- <div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input ad" type="radio" @if($address->preferred == 'Y') checked  @endif  name="add" id="exampleRadios2" value="{{$address->id}}">
								@if($address->preferred == 'Y') Default Address @else Billing Address  @endif
							</label>
						</div> --}}
					<ul>
                        <li>{{$address->firstName}} {{$address->lastName}}</li>
                        <li>{{$address->address}}, {{$address->city}}, {{$address->state}}</li>
                        <li>Tel: {{$address->phoneNo}}</li>
					</ul>
						@endforeach
					@endif
				@endif
				<div class="form-check">
						<label class="form-check-label no-padding">
						  
						  @if(isset($addresses)) 
							  @if(count($addresses))
								  <div class="pretty p-icon p-curve p-pulse">
									  <input class="form-check-input" type="radio" name="add" id="exampleRadios3" value="new">
									  <div class="state p-warning-o">
										  <i class="icon fa fa-check"></i>
										  <label> Ship to different address </label>
									  </div>
								  </div>								
							  @else 
								  <div class="pretty p-icon p-curve p-pulse">
									  <input class="form-check-input"   type="radio" name="add" id="exampleRadios3" value="new">
									  <div class="state p-warning-o">
										  <i class="icon fa fa-check"></i>
										  <label> Enter Billing Address  </label>
									  </div>
								  </div>							
							  @endif
  
						  @endif
						</label>
					  </div>
                    <div style='display:@if(isset($addresses))none @else block @endif' class="style-input-checkout push-down">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control billing" id='fna' placeholder="First Name*" required="required"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control billing" id='lna' placeholder="Last Name*" required="required"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id='ctr' class="form-control billing">
                                        <option value=''>Country*</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id='sta' class="form-control billing">
                                        <option value=''>State*</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control billing" id='str' placeholder="Street Address*" required="required"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control billing" id='' placeholder="Town*" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id='lg' placeholder="LGA">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class = "form-group">
                            <input type="tel" class="form-control billing" id='pno' placeholder="Phone no* (e.g +234)" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                            <input type="text" id='zi' placeholder="Zip/Postal Code*" class="form-control" required="required">
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="pretty p-icon p-curve p-pulse">
                                    <input name='addresss' value='Y' class="form-check-input form-control" type="checkbox">
                                    <div class="state p-warning-o"> <i class="icon fa fa-check"></i>
                                        <label> Set as my Default Address </label>
                                    </div>
                                </div> {{--
                                <div class="form-check">
                                    <label class="form-check-label make-small">
                                        <input name='addresss' value='Y' class="form-check-input" class="form-control" type="checkbox"> Set as my Default Address </label>
                                </div> --}} </div> {{--
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label make-small">
                                        <input name='addresss' class="form-check-input" class="form-control" type="checkbox"> Set as my Billing Address </label>
                                </div>
                            </div> --}} </div>
                        <div id='loaderImage' style='height:50px;display:none' class='text-center '> <img style='width:auto;height:100%' class='center-block' src='{{asset(' img/loader.gif ')}}' /> </div>
                        <div>
                            <button class='btn btn-wawooh addAddress'>Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-details">
                <div class="order-title">
                    <h4>Payment Method</h4> </div>
                <div class="inner-payment">
					<!-- <div class="form-check">
					  <label class="form-check-label release">
					    <input class="form-check-input align-checkbox" type="radio" name="payment" id="exampleRadios1" value="Pay on delivery" checked>
					    Pay on delivery
					  </label>
					</div> -->
					<div class="pretty p-icon p-round p-pulse">
						<input class="form-check-input align-checkbox py" type="radio" name="payment" id="exampleRadios2" value="Bank Transfer">
						<div class="state p-warning-o">
							<i class="icon fa fa-check"></i>
							<label> Bank Transfer </label>
						</div>
					</div>
					<div class="pretty p-icon p-round p-pulse">
						<input class="form-check-input align-checkbox py" type="radio" name="payment" id="exampleRadios2" value="Card Payment">
						<div class="state p-warning-o">
							<i class="icon fa fa-check"></i>
							<label> Card Payment</label>
						</div>
					</div>
					<div class="pretty p-icon p-round p-pulse">
						<input class="form-check-input align-checkbox py" type="radio" name="payment" id="exampleRadios2" value="Pay Attitude">
						<div class="state p-warning-o">
							<i class="icon fa fa-check"></i>
							<label> Pay Attitude </label>
						</div>
					</div>
					<div class="form-group col-sm-12">
                        <div class="card-types" id="acc-card" style="display: none;">
							<label class = "c-label">Please select your card type</label> <br>
                            <div class="card-type card-mastercard">
                                <input type="radio" name="card_type" id="card-mastercard" value="MasterCard">
                                <label for="card-mastercard"></label>
                            </div>
                            <div class="card-type card-visa">
                                <input type="radio" name="card_type" id="card-visa" value="Visa">
                                <label for="card-visa"></label>
                            </div>
                        </div>
						<div id='acc' style='display:none' class="form-check">
							<label class="form-check-label release">
								<p>Account Name: <span class='text-bold'>Wawooh Inc.</span></p>
								<p>Account Number: <span class='text-bold'>1234567890.</span></p>
								<input type="text" class="form-control" placeholder="Enter Account Name*">
                                <small>Enter the account name from which the transfer is made</small>
							</label>
						</div>
					</div>
					<div class="place-order">
						<button class="btn btn-place placeOrder">Place order</button>
					</div>
				</div>
            </div>
        </div>
        <div class="checkout-container-right">
            <div class="c-title"> <span>Order Details</span></div>
            <div class="checkout-orders">
				@if(isset($items))
					@if(count($items))
						<div class="order-title">
							<h4>Your Order: ({{count($items)}} {{count($items) > 1 ? 'items':'item'}}) </h4> 
						</div>
						@foreach($items as $item)
							<div class="order-col"> 
							`<img src="{{$item->productPicture}}" alt="" class="order-img">
								<div class="order-item"> <span>{{$item->productName}}</span>
									<p>₦ {{number_format($item->amount)}}</p>
									<h6>Qty: {{$item->quantity}}</h6> 
								</div>
							</div>
						@endforeach
						<div class="check-price">
							<div class="sub-total-row"> 
								<span class="sub-title">Subtotal: </span> 
								<span class="sub-price"><strong>₦ {{number_format($total)}}</strong></span> 
							</div>
							<div class="shipping-row"> 
								<span class="sub-title">Shipping: </span> 
								<span class="ship-price">₦ 2,000</span> 
								<input id='total' type='hidden' value='{{$total + 2000}}' />
							</div>
							<hr>
							<div class="shipping-row"> 
								<span class="sub-title">Total: </span> 
								<span class="total-price">₦ {{number_format($total + 2000)}}</span> </div>
						</div>
					@endif
				@elseif(isset($products))
					@if(count($products))
						@foreach($products as $product)
							<div class="order-title">
								<h4>Your Order {{count($product)}}</h4> 
							</div>
							<div class="order-col"> 
								<img src="assets/images/success.png" alt="" class="order-img">
								<div class="order-item"> <span>{{$product['name']}}</span>
									<p>₦{{number_format($product['amount'])}}</p>
									{{-- <h6>Qty: {{$product['quantity']}}</h6>  --}}
								</div>
							</div>
						@endforeach
						<div class="check-price">
							<div class="sub-total-row"> 
								<span class="sub-title">Subtotal: </span> 
								<span class="sub-price">₦{{number_format($total)}}</span> 
							</div>
							<div class="shipping-row"> 
								<span class="sub-title">Shipping: </span> 
								<span class="ship-price">₦ 2,000</span> 
								<input id='total' type='hidden' value='{{$total + 2000}}' />
							</div>
							<hr>
							<div class="shipping-row"> 
								<span class="sub-title">Total: </span> 
								<span class="total-price">₦{{number_format($total + 2000)}}</span> </div>
						</div>
					@endif
                @endif
                <div class="check-price" style="border-top: 1px solid #ccc">
                    <div class="sub-total-row"> 
						<span class="sub-title">Amount Payable (60%): </span> 
						<span class="sub-price"><strong>₦{{number_format((0.6 * $total) + 2000)}} </strong></span> 
					</div>
                    <div class="shipping-row"> 
						<span class="sub-title">Balance on delivery: </span> 
						<span class="sub-price"><strong>₦{{number_format(0.4 * $total)}}</strong></span> 
					</div>
                </div>
            </div>
			<div class="correct-cart"> <span><a href="{{route('cart')}}">Correct Cart?</a></span> </div>
        </div>
    </section>
	@else
	<div class="cover white">
		<h3>You need an account to checkout your item</h3>
		<div class="cart-form">
			<div class="cart-12">
				<div class="cart-3">
					<div class="title-head"><h3>Already have a Wawooh Account? Log in!</h3></div>
					<div class="inner-content">
						<form>
							<div class="form-group">
								<label>Email Address</label>
								<input type="email" id='email-decision' class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" id='password-decision' class="form-control" placeholder="Password" required>
							</div>
							
							{{--  <div class="form-check">
								<input type="checkbox" class="form-check-input" id="remember">
								<label class="form-check-label" for="remember">Remember me</label>
							</div>  --}}
                            <div style="display:block; margin-top: 4.3em;"></div>
							<div  id='loaderLog' style='height:100px;display:none;' class='text-center'>
								<img class='center-block' src="{{asset('img/loader.gif')}}" />
							</div>

							<div class="form-group">
								{{-- <button type="button" class="btn btn-block btn-sign login-decision" id="login-btn">LOGIN</button> --}}
								<input type="button" class="btn btn-block btn-sign login-decision" id="login-btn" value ="LOGIN">
							</div>
							<div class="form-group">
								<a href="{{route('forgotPassword')}}" class="pwd pull-right">Forgot Password? click Here</a>
							</div>
						</form>
					</div>
				</div>
				<div class="cart-3 cart-shift-2">
					<div class="title-head"><h3>New User? Register your account</h3></div>
					<div class="inner-content">
						<form  id = "regform">
							<p id=''></p>
							<div class="row">
								<div class="col-md-6 col-xs-12 input-details">
									<input type="text" id="firstname" class="form-control signup2" placeholder="Enter your firstname">
								</div>
								<div class="col-md-6 col-xs-12 input-details">
									<input type="text" id="lastname" class="form-control signup2" placeholder="Enter your Lastname">
								</div>
							</div>
							<div class="input-details">
								<input type="text" id="emailaddress" class="form-control signup2" placeholder="Enter a functional email address">
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12 input-details">
									<input type="password"  id="checkoutpassword" class="form-control signup2" placeholder="Enter your password">
								</div>
								<div class="col-md-6 col-xs-12 input-details">
									<input type="password" id="checkoutconfirmpassword" class="form-control signup2" placeholder="Confirm your password">
								</div>
							</div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 input-details">
                                    <input type="text" id="dateOfBirthCheckout" class="form-control calender signup2" placeholder="Select Date of Birth" required>
                                </div>
                                <div class="col-md-6 col-xs-12 input-details">
                                    <select id="genderCheckout" class="form-control signup2" required>
                                        <option value="null" hidden>--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
							<div id='loaderLog3' style='height:100px;display:none;' class='text-center'>
									<img class='center-block' src="{{asset('img/loader.gif')}}" />
								</div>
							<div class="form-group">
                                <input type="button" value="CREATE AN ACCOUNT" id='checkout-signup' class="btn btn-block  btn-sign sign-in">
								{{--<button id='checkout-signup' class="btn btn-block  btn-sign sign-in">CREATE AN ACCOUNT</button>--}}
							</div>
							{{-- <div class="form-group">
								<button class="btn btn-google">Signup with Google</button>
							</div> --}}
						  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
<? include __DIR__ .'/view-stubs/footer.php'; ?>
	<script>
        $('#checkout-signup, #login-btn').on('click', function () {
            $(this).val('Please wait...')
                .attr('disabled','disabled');
        });

		$('#checkout-signup').click(function (e) {
		    e.preventDefault();
		    $('#loaderLog').show();
		    var valueForm = $('.signup2').val();
		    var len = valueForm.length;
			if($('#firstname').val() === '' || $('#lastname').val() === '' || $('#emailaddress').val() === '' || $('#checkoutpassword').val() === '' || $('#genderCheckout').val() === '' || $('#dateOfBirthCheckout').val() === ''){
				$.notify("All field are required", 'error');
				$(this).val('CREATE AN ACCOUNT').removeAttr('disabled','disabled');
			}else {
			    var data = {
			        "firstName": $('#firstname').val(),
					"lastName": $('#lastname').val(),
					"email": $('#emailaddress').val(),
					"password": $('#checkoutpassword').val(),
                    "gender": $('#genderCheckout').val(),
                    "dateOfBirth": $('#dateOfBirthCheckout').val(),
					"role": 'user',
					"socialFlag": 'N'
				}
				console.log(data);
                $.ajax({
                    type: 'POST',
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    dataType: 'json',

                    url: `{{route('userRegistration')}}`,
                    success: function(result) {
                        console.log(result);
                        //$('#loaderLog3').hide();
                        // console.log(result);
                       if(result.status == 0){
                            $.notify(result.message, 'success');
						     setTimeout(function(){
						         $.notify("Please Login to Continue", "success")
							 }, 4000)
                           location.reload();
                        }else{
                            $.notify(result.message, 'error');
                        }
                    },
                    error: function(e) {
                        $.notify('There is no Internet Connection', 'error');
                    },
                });
			}
        });


		$('#login-btn').click(function(){
            $('#loaderLog').show();
        /*$(document).on('click', '#login-btn', function(){*/
            <?php if(!is_null(session('userToken'))): ?>
                tok = <?= session('userToken') ?>;
            <?php else: ?>
                tok = '';
            <?php endif; ?>
            let error = [];

            if($('#email-decision').val() === ''){
                error.push({text: 'The email cannot be empty'})
            }

            if($('#password-decision').val() === '') {
                error.push({text: 'The password cannot be empty'})
            }

            if(error > 0 ){
				$(this).val('LOGIN').removeAttr('disabled','disabled');
                console.log("there was an error")
            }else{
                let data = {
                    'email': $('#email-decision').val(),
                    'password': $('#password-decision').val()
                }

                $.ajax({
                    method: 'POST',
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    dataType: 'json',
                    url: '{{route('login')}}',
                    success: function(res){
                        console.log(res);
                        $.notify(res.message, "success");
                        s = window.location.hash;
                        if(res.status == '00'){
                            window.location.href = `{{route('checkout')}}`;
                        }
                    }
                });
            }

        });

			$('[name=add]').on('click', function(){
				if($('[name=add]:checked').val() == 'new'){
					$('.style-input-checkout').show();
				
				}else{
					$('.style-input-checkout').hide();
					
				}
			});

			$('[name=payment]').on('click', function(){
				if($('[name=payment]:checked').val().toLowerCase() == 'bank transfer'){
					$('#acc').show();
					$('#acc-card').hide();
				}else if($('[name=payment]:checked').val().toLowerCase() == 'card payment'){
					$('#acc').hide();
					$('#acc-card').show();
				}
				else {
				    $('#acc, #acc-card').hide();
                }
			});

			$('.addAddress').on('click', function(){
				if(isNotEmpty('.billing', 'error')){
					var pref = ($('[name=addresss]:checked').val() == undefined)?'N':'Y';
					if(isAlpha($('#fna').val()) && isAlpha($('#lna').val()) && $('#fna').val().length >= 3 && $('#lna').val().length >= 3){
						if(isNumeric($('#pno').val())){
							//$('#loaderImage').show();
							var data = {
								"firstName": $('#fna').val(),
								"lastName": $('#lna').val(),
								"country": $('#ctr').val(),
								"state": $('#sta').val(),
								"lga": $('#lg').val(),
								"address": $('#str').val(),
								"phoneNo": $('#pno').val(),
								"zipCode": $('#zi').val(),
								//"postalCode": $('#pcode').val(),								
								"preferred": pref
							}
							console.log(data);
							addAddress(data);
						}else{
							$.notify('Phone number,zip code or postal code must be numbers');
						}

					}else{
						$('#fna').notify('Only letters are allowed. Names must not be less than 3 letters');
					}
					
				}else{
					//$.notify('Some fields are empty');
					swal('Some fields are empty');
				}
			});

			function getProduct(product){
				return	product = JSON.parse(product);
			}

			function addOrder(data){
				$('#loaderModal').modal('show');
				$.ajax({
					type: 'POST',
					data: JSON.stringify(data),
					contentType: "application/json; charset=utf-8",
					dataType: 'json',	
					url: `{{route('addOrder')}}`,
					success: function(result) {
						$('#loaderModal').modal('hide');
						if(result.status == 0){
							//$.notify('Order successfully placed', 'success');
							swal('Order successfully placed','','success');
						window.location.href = '{{route('fashionStore')}}';		
						}else{

							console.log(result);
						}
									
					},
					error: function(e){
						$('#loaderModal').modal('hide');
						console.log(e);
					}
				});
			}

			$(document).ready(function(){
				var items = `@if(isset($items)) {!!  json_encode($items) !!} @endif  `;
				
				populateCountries("ctr", "sta");
				
				$('.placeOrder').on('click', function(){
					var l = items.trim().length;
					if(l > 0){

						var products = getProduct(items);
						var x = [];
						console.log(products);
						for(i = 0; i < products.length; i++){
							x.push({
									"productId": products[i].productId,
									"quantity": products[i].quantity,
									"amount": products[i].amount,
									"designerId": products[i].designerId,
									"deliveryStatus": "P", // P-Pending, S-Shipped, C-Cancelled, D-Delivered
									"deliveryDate":"",
									"size": products[i].size,
									"artworkId": products[i].artWorkPictureId,
									"materialId": products[i].materialPictureId,
									"measurementId": products[i].measurementId,
									"color": products[i].color,
									"materialStatus": products[i].materialStatus, // Y-Yes, N-No
									"materialLocation": (products[i].materialLocation)?products[i].materialLocation.id:null,
									"materialPickupDate": products[i].materialPickupDate
							})
						}
						if($('[name=add]').is(':checked')){
							if($('[name=payment]:checked').is(':checked')){
								if($('[name=add]:checked').val() != 'new'){
									var data =	{
									"deliveryAddressId": $('[name=add]:checked').val(),
									"paymentType": $('[name=payment]:checked').val(),
                                     "paidAmount": $('#total').val(),
									"totalAmount": $('#total').val(),
									"items": x,
									};
									console.log(data);
									console.log(x);
									addOrder(data);
								}else{
									$.notify('Please select an address or add an address');
								}
								
							}else{
								$.notify('Select a payment method', 'error');
							}
							

						}else{
							$.notify('Select a delivery address', 'error');
						}
							

					}else{
						$('#ModalSignIn').modal();
					}
				
				});
			});


			function addAddress(data){
				$('#loaderModal').modal();
				$.ajax({
					type: 'POST',
					data: JSON.stringify(data),
					contentType: "application/json; charset=utf-8",
					dataType: 'json',	
					url: `{{route('addAddress')}}`,
					success: function(result) {
						$('#loaderModal').modal('hide');
						$('#loaderImage').hide();
						
						if(result.status == '00'){
							location.reload();
						}else if(result.status == 56){
							$('#ModalSignIn2').modal();
							$('#loaderImage').hide();
							
							$.notify('Please login to continue', 'error');
						}else{
							$('#loaderImage').hide();							
							$.notify(result.message, 'error');
						}
					},
					error: function(e){
						$('#loaderModal').modal('hide');
						$('#loaderImage').hide();
						$.notify('Please check your network connection', 'error');
					}
				});
				
			}

	</script>
