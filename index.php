<?php
  include('template-parts/header.php');
?>



<section class="hero-section-main-wrap">

    <div class="container">
        <div class="row">
            <div class="col-md-6 content-side">

                <h1>Your Helth is <br /> No 1 </h1>

                <p>Discover a world of vibrant colors and crisp clarity with our comprehensive eye care</p>

                <div class="btn btn-danger"> Contact us now</div>

            </div>

            <div class="col-md-6 md-6-img">
                <img src="img/hero-img.png" alt="">
            </div>
        </div>
    </div>

</section>


<section class="card-section">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2>Features</h2><br />
                <p>Discover a world of vibrant colors and<br /> crisp clarity with our</p>
            </div>
        </div>

        <div class="row">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Features-icon.png" alt="">
                        <h5 class="card-title">Advanced Technology</h5>
                        <p class="card-text">Discover a world of vibrant colors and <br /> crisp clarity with our comprehensive<br /> care</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Features-icon.png" alt="">
                        <h5 class="card-title">Advanced Technology</h5>
                        <p class="card-text">Discover a world of vibrant colors and <br /> crisp clarity with our comprehensive<br /> care</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Features-icon.png" alt="">
                        <h5 class="card-title">Advanced Technology</h5>
                        <p class="card-text">Discover a world of vibrant colors and <br /> crisp clarity with our comprehensive<br /> care</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="left-right-img-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 md-6-img">
                <img src="img/1.png" alt="">
            </div>
            <div class="col-md-6 content-side">
                <h2>Embrace Life with Crystal-Clear Vision</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis culpa cumque, aliquam numquam nesciunt eum earum amet. Tempore, repellendus numquam.</p>
                <div class="btn btn-danger">Book an applintment </div>
            </div>
        </div>
    </div>
</section>

<section class="left-right-img-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 content-side">
                <h2>Be Healthy, Embrace the Outdoors</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis culpa cumque, aliquam numquam nesciunt eum earum amet. Tempore, repellendus numquam.</p>
                <div class="btn btn-danger">Contact Now </div>
            </div>

            <div class="col-md-6 md-6-img">
                <img src="img/2.png" alt="">
            </div>

        </div>
    </div>
</section>


<section class="contact-frm-section">

<div class="container">
    <div class="row">

        <div class="col-md-7">
            <h2>Be Healthy, Embrace the Outdoors</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis culpa cumque, aliquam numquam nesciunt eum earum amet. Tempore, repellendus numquam.</p>
            <div class="btn btn-danger">Contact Now </div>
        </div>

        <div class="col-md-5">
            <form>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Last Name -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
                        </div>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Email -->
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Subject -->
                        <div class="form-group">
                            <textarea class="form-control" id="subject" rows="3" placeholder="Enter the subject"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>
    
</section>

<?php
  include('template-parts/footer.php');
?>