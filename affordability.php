<?php require_once('header.html'); ?>

	<section id="affordability_hero" class="section-photo cover text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>See how much term life insurance coverage you can get for as little as $25 per month!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="form-wrapper">
                            <div class="primary-container">
                                <form>
                                    <div class="select-wrapper">
                                        <label for="affordablePremium">Preferred Payment</label>
                                        <select name="affordablePremium" id="affordablePremium" class="coverageamt-select afford-dropdown">
                                            <!-- <option value="">Amount</option> -->
                                            <option value="twentyfive">$25 per month</option>
                                            <option value="fifty">$50 per month</option>
                                            <option value="onehundred">$100 per month</option>
                                        </select>
                                    </div>
                                    <div class="select-wrapper">
                                        <label for="affordableAge">Age Range</label>
                                        <select name="affordableAge" id="affordableAge" class="coverageamt-select afford-dropdown">
                                            <!-- <option value="">Age</option> -->
                                            <option value="twentyfive">25-29</option>
                                            <option value="thirty">30-34</option>
                                            <option value="thirtyfive">35-39</option>
                                            <option value="forty">40-44</option>
                                            <option value="fortyfive">40-49</option>
                                            <option value="fifty">50+</option>
                                        </select>
                                    </div>
                                    <div class="select-wrapper">
                                        <label for="affordableGender">Gender</label>
                                        <select name="affordableGender" id="affordableGender" class="coverageamt-select afford-dropdown">
                                            <!-- <option value="">Gender</option> -->
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="secondary-container">
                                <p id="initialQuote">Based on the above, you may qualify for about <span id="totalCoverage" class="quoted-amount">$550,000</span> in coverage, and save close to <span id="totalSavings" class="quoted-amount">$10</span> per month over standard premium rates.<sup>*</sup>
                            </div>
                            <div class="gobutton-container">
                                <input type="button" class="btn btn-primary" value="Start My Quote" id="main-affordable-form" wpvalue="continue" onclick="return validatePremiumMlc();">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once('footer.html'); ?>