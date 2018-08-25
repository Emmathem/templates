<? include __DIR__ .'/view-stubs/header.php'; ?>
    <section class="checkout">
        <div class="checkout-container-left">
            <div class="c-title"> <span>Checkout</span> </div>
            <div class="checkout-details">
                <div class="order-title">
                    <h4>Address Details</h4> </div>
                <div class="inner-address">
                    <div class="pretty p-icon p-curve p-pulse">
                        <input class="form-check-input ad" type="radio" name="add" id="exampleRadios2" value="">
                        <div class="state p-warning-o"> <i class="icon fa fa-check"></i>
                            <label>Default Address </label>
                        </div>
                    </div>
                    <ul>
                        <li>Temitope Falua</li>
                        <li>No 5, Joel Ogunnaike Str, GRA Ikeja, Lagos</li>
                        <li>Tel: 07068912907</li>
                    </ul>
                    <div class="pretty p-icon p-curve p-pulse">
                        <input class="form-check-input" type="radio" name="add" id="exampleRadios3" value="new">
                        <div class="state p-warning-o"> <i class="icon fa fa-check"></i>
                            <label> Enter Billing Address </label>
                        </div>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select id='ctr' class="form-control billing">
                                        <option value=''>Country*</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select id='sta' class="form-control billing">
                                        <option value=''>State*</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select id='sta' class="form-control billing">
                                        <option value=''>City*</option>
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
                <div class="inner-payment"> <span>
                        Temitope Falua
                        No No 5, Joel Ogunnaike Str, GRA Ikeja, Lagos
                        Tel:07068912907
                    </span> </div>
            </div>
        </div>
        <div class="checkout-container-right">
            <div class="c-title"> <span>Order Details</span></div>
            <div class="checkout-orders">
                <div class="order-title">
                    <h4>Your Order (2 items)</h4> </div>
                <div class="order-col"> <img src="assets/images/success.png" alt="" class="order-img">
                    <div class="order-item"> <span>Memory Card - 16GB</span>
                        <p>N 10,000</p>
                        <h6>Qty: 1</h6> </div>
                </div>
                <div class="order-col"> <img src="assets/images/success.png" alt="" class="order-img">
                    <div class="order-item"> <span>Keyboard Card - 34GB</span>
                        <p>N 10,000</p>
                        <h6>Qty: 1</h6> </div>
                </div>
                <div class="check-price">
                    <div class="sub-total-row"> <span class="sub-title">Subtotal: </span> <span class="sub-price">N 10,000</span> </div>
                    <div class="shipping-row"> <span class="sub-title">Shipping: </span> <span class="ship-price">N 2,000</span> </div>
                    <hr>
                    <div class="shipping-row"> <span class="sub-title">Total: </span> <span class="total-price">N 12,000</span> </div>
                </div>
                <div class="check-price" style="border-top: 1px solid #ccc">
                    <div class="sub-total-row"> <span class="sub-title">Amount Payable (60%): </span> <span class="sub-price"><strong>N 10,000 </strong></span> </div>
                    <div class="shipping-row"> <span class="sub-title">Balance on delivery: </span> <span class="sub-price"><strong>N 2,000 </strong></span> </div>
                </div>
            </div>
            <div class="correct-cart"> <span>Correct Cart?</span> </div>
        </div>
    </section>
    <? include __DIR__ .'/view-stubs/footer.php'; ?>