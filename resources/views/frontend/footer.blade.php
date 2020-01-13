<!-- Footer -->
<footer class="py-5 bg-nav h-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('frontend/images/logoo.jpeg') }}" alt="Logo" class=" h-45 w-50">
            </div>
            <div class="col-md-4">
                <h3 style="color:#f39c12">Menu</h3>
                <ul class="list-unstyled">
                    <li><a href="{{ route('homepage') }}" style="color:#f39c12">Home</a></li>
                    <li><a href="{{ route('about-us') }}" style="color:#f39c12">About Us</a></li>
                    <li><a href="{{ route('faq') }}" style="color:#f39c12">FAQ</a></li>
                    <li><a href="{{ route('our-courses') }}" style="color:#f39c12">Courses</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="row pl-4">
                    <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social "></i></a>
                    <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                </div>
                <div class="row">
                    <ul style="list-style-type:none;color:#f39c12">
                        <p></p>
                        <h3 style="color:#f39c12">Address</h3>

                        <li> Vidya Sathi Online Pvt. Ltd.</li>
                        <li> Shankhamul Road, New Baneshwor</li>
                        <li> Near to Global IME Bank</li>
                        <li> 44600</li>
                        <li> +977-9803622823/014786286</li>
                        <li><a href="{{ route('homepage') }}" style="color:#f39c12">Vidyasathionline.com</a></li>
                        <li> vidyasathionline@gmail.com</li>
                    </ul>
                    <ul class="list-unstyled">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="py-3" style="background-color:orange; font-size:21px">
    <p style="display:inline">Copyright &copy; VidhyaSathiOnline 2020</p>
    <p style="padding-left:280px; display:inline"> Made with <i class="fa fa-heart fa-sm "></i> by
        <a href="https://www.techarttrekkies.com/"> TechArt Trekkies</a></p>
    <p style="display:inline"><a href="{{ route('tnc') }}" style="display:inline; float:right; ">Terms and Conditions</a></p>
</footer>
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('frontend/css/footer.css') }}">
