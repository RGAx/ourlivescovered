<?php require_once('header.html'); ?>

	<section id="landing_hero" class="section-photo cover text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>A little could do a lot.</h1>
                    <p id="landing_copy">Even with a policy for as low as $25 per month, you could leave your family with a lot more than just memories, and help protect them against future expenses.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-wrapper">
                        <div class="primary-container">
                            <form action="quote-form-affordability.do" method="POST" name="mainAffordableForm" id="main-affordable-form">
                                <div class="error-text"></div>
                                <div class="inline-text required">
                                    <label class=" " for="afford-first-name">First Name</label>
                                    <input required="" class=" " type="text" id="afford-first-name" name="first-name" maxlength="25">
                                </div>
                                <div class="inline-text required">
                                    <label class=" " for="afford-phone">Phone Number</label>
                                    <input class=" " type="text" pattern="[0-9]*" id="afford-phone" name="calc-form-phone">
                                </div>
                                <div class="inline-text required">
                                    <label class=" " for="afford-email-address">Email Address</label>
                                    <input required="" class="  " type="text" id="afford-email-address" name="email-address" maxlength="100">
                                </div>
                                <small>Your email address will be used to provide you with a copy of your quote and related information. This information will be transmitted securely.</small>
                                <div class="inline-text required">
                                    <label class=" " for="calc-date-of-birth">Date of Birth</label>
                                    <input required="" class=" " type="text" pattern="[0-9]*" id="calc-date-of-birth" name="date-of-birth">
                                </div>
                                <div class="select-wrapper">
                                    <label for="calc-state">State</label>
                                    <span class="select-wrapper  small">
                                        <select required="" name="state" id="calc-state" class="small">
                                            <option value="">Select a State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </span>
                                </div>
                                <div class="select-wrapper">
                                    <label for="affordablePremium">Preferred Payment</label>
                                    <select name="affordablePremium" id="affordablePremium" class="coverageamt-select afford-dropdown">
                                        <!-- <option value="">Amount</option> -->
                                        <option value="twentyfive">$25 per month</option>
                                        <option value="forty">$40 per month</option>
                                        <option value="fifty">$50 per month</option>
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
                                        <option value="fortyfive">45-49</option>
                                        <option value="fifty">50+</option>
                                    </select>
                                </div>
                                <div class="select-wrapper">
                                    <label for="affordableGender">Gender</label>
                                    <select name="affordableGender" id="affordableGender" class="coverageamt-select afford-dropdown">
                                        <!-- <option value="">Gender</option> -->
                                        <option value="male">Male</option>
                                        <option value="female" selected>Female</option>
                                    </select>
                                </div>
                                <div class="select-wrapper">
                                    <label for="affordableSmoker">Smoker or Non-smoker</label>
                                    <select name="affordableSmoker" id="affordableSmoker" class="coverageamt-select afford-dropdown">
                                        <!-- <option value="">Non-Smoker</option> -->
                                        <option value="nonsmoker">Non-Smoker</option>
                                        <option value="smoker">Smoker</option>
                                    </select>
                                </div>
                                <input type="hidden" id="hiddenCoverage" name="totalCoverage" class="quoted-amount" value="$1,200,000">
                            </div>
                            <div class="secondary-container">
                                <p id="initialQuote">Great news <span id="affordFirstName">[first name]</span>! Based on the above information, you may qualify for about <span id="totalCoverage" class="quoted-amount">$1,200,000</span> in 10-year term coverage.<!-- , and save close to <span id="totalSavings" class="quoted-amount">$15</span> per month over standard premium rates.<sup>*</sup> -->
                            </div>
                            <div class="gobutton-container">
                                <input type="button" class="btn btn-primary" value="Start My Quote" id="main-affordable-form" wpvalue="continue" onclick="return validatePremiumMlc();">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <small>*Coverage amounts are estimates. Our licensed agent will provide an exact amount.</small>
                </div>
            </div>
        </div>
    </section>

<?php require_once('footer.html'); ?>