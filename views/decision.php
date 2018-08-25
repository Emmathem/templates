<? include __DIR__ .'/view/view-stubs/header.php'; ?>    
<div class="inner-container">
        <div class="col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                        <h3>Decision Page For User</h3>
                        <form action="">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="pretty p-icon p-curve p-pulse">
                                        <input type="radio" name="d-decision" class="form-control" id="d-accept">
                                        <div class="state p-info-o">
                                            <i class="icon fa fa-check"></i>
                                            <label>Accept</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pretty p-icon p-curve p-pulse">
                                        <input type="radio" name="d-decision" value="refund" class="form-control" id="d-refund">
                                        <div class="state p-success-o">
                                            <i class="icon fa fa-check"></i>
                                            <label>Ask for Refund</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group" id="acc-detail" style="display:none;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="sr-only">Enter Refund Account Name</label>
                                                <input class="form-control" name="account-name" id="acc-name" placeholder="Enter Account Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="sr-only">Enter Refund Account Number</label>
                                                <input class="form-control" name="account-number" id="acc-number" placeholder="Enter Account Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="pretty p-icon p-curve p-pulse">
                                        <input type="radio" name="d-decision" value = "shopping" class="form-control" id="d-shopping">
                                        <div class="state p-warning-o">
                                            <i class="icon fa fa-check"></i>
                                            <label>Shop another Product</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="form-group">
                                <input type="submit" name="subDecison" id="decision-submit" class="btn btn-decision">
                                <a style = "display:none" href="" class = "btn btn-shop pull-right" id="shopping"><span>Continue Shopping</span></a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
          
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                   <form action="">
                       <div class="form-group">
                           <select class="form-control" name="state" id = "ostate">
                                <option value="" hidden="hidden">--State of Origin--</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Edo">Edo</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Nassarawa">Nassarawa</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="FCT">FCT</option>
                    </select>
                       </div>
                       <div class="form-group">
                           <select class = "form-control" name="lga" id="lga"></select>
                       </div>
                   </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-md-offset-3">
        <div class="status">
            <img src="assets/images/success.png" alt="">
            <span class = "success">success message</span>
            <span class="error">Error message</span>
        </div>
    </div>
<? include __DIR__ .'/view/view-stubs/footer.php'; ?>