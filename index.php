<? include __DIR__ .'/views/view-stubs/header.php'; ?>
    <section class="new-bo">
        <h3>New Features</h3>
        <div class="col-md-4 col-md-offset-4">
            <form action="">
                <div class="form-group">
                    <select class="form-control" name="state" id = "state">
                       <option value="" hidden>--select state--</option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akaw Ibom">Akaw Ibom</option>
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
                    <select name="city" id="city" class="form-control">
                        <option value="" hidden>--select city--</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    <? include __DIR__ .'/views/view-stubs/footer.php'; ?>