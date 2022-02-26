@include('include.header')
<style>
    .background-image hr {
        width: 100%;
    }

    h6 {
        font-weight: bold;
    }
</style>
<div class="header-section">
    <div class="background-image">
        <h1 class="text-white-2 text-white-2-hover flex-text">Become a Partner</h1>
    </div>
</div>
<div class="container py-4">
    <h4>Partner Program</h4>
    <hr>
    <h6 class="mt-3 mb-2">Partnering for Success:</h6>
    <p class="text-large mb-2 mt-0">
        When you win, we win – that is the driving principle behind our Partner Program. Since we have a shared interest in serving our customers the best possible way, we do everything we can to equip you with the skills, tools and knowledge you need to offer TringTone udio devices. Our partner program provides product and sales training, promotional materials and technical support. We work with you to help you gain traction in your local market and deliver a positive customer experience. You’ll learn our products inside and out and become experts in all things TringTone <br>
        With TringTone, you get award-winning products, a commitment to innovation and a professional business partner dedicated to supporting you and our joint customers.
    </p>

    <h6 class="mt-4 mb-2">TRINGTONE AUTHORIZED RESELLER</h6>
    <p class="text-large my-2">
        By becoming a TringTone Authorized Reseller you will have access to Sales, Marketing and Training resources along with Technical support. In addition, you will be able to provide your customers with a complete portfolio of TringTone solutions and increase your sales.
    </p>

    <h6 class="mt-4 mb-2">Subscribe as a partner</h6>
    <hr>
    <div class="col-md-6 col-sm-12">
        <form action="">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Full name">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label>Designation</label>
                <input type="text" class="form-control" placeholder="Your Designation">
            </div>
            <div class="form-group">
                <label>Company</label>
                <input type="text" class="form-control" placeholder="Your Company">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address" placeholder="Your Address" class="form-control" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Country</label>
                <select name="country" class="form-control" id="">
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control" placeholder="State">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" placeholder="City">
            </div>
            <div class="form-group">
                <label>Postal Code</label>
                <input type="text" class="form-control" placeholder="Postal Code">
            </div>
            <div class="form-group mt-4">
                <input type="submit" class="btn btn-success mt-3" value="Submit">
            </div>
        </form>
    </div>
</div>


@include('include.footer')