@include('frontend.header')

<header>
    <div id="carouselExampleIndicators" class="carousel slide pt-5 " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('{{ asset('frontend/images/slider/slider1.jpg') }}')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>LIVE CLASS SERIES</h3>
                    <p>Attend Free Live Interactive classes at Vidya sathi</p>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('{{ asset('frontend/images/slider/slider2.jpg') }}')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Learn from the Masters - Nepal’s best teachers</h3>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('frontend/images/slider/slider3.jpg') }}')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Access to quality education anytime, anywhere</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<div class="container">
    <h1 class="my-4 text-center pb-5">Our Crash Courses</h1>
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-200">
                <img src="{{ asset('frontend/images/myPhysics.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Physics</h5>
                    <p class="card-text">Physics is the most fundamental of the experimental sciences, as it seeks to explain the universe itself, from the very smallest particles.</p>
                    <a href="{{ route('physics') }}" class="btn btn-primary text-center">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('frontend/images/myChemistry.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chemistry</h5>
                    <p class="card-text">Chemistry is an experimental science that combines academic study with the acquisition of practical and investigational skills.</p>
                    <a href="{{ route('chemistry') }}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('frontend/images/myMaths.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mathematics</h5>
                    <p class="card-text">Mathematics includes the study of numbers and quantities.It is a branch of science the deals with logic of shape,quantity and arrangement.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5 pt-3 text-center">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <a href="{{ route('our-courses') }}" class="btn btn-primary">View All</a>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <h1 class="my-4 text-center" style="padding-bottom:30px;">Packages We Offer</h1>
    <div class="row pb-5">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h3 class="card-header">Class X</h3>
                <div class="card-body">
                    <div class="display-4">Rs.80<small>k</small></div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Science (Rs.20<small>k</small>/Package)</li>
                    <li class="list-group-item">Compulsory Mathematics (Rs.20<small>k</small>/Package)</li>
                    <li class="list-group-item">Optional Mathematics (Rs.20<small>k</small>/Package)</li>
                    <li class="list-group-item">English (Rs.20<small>k</small>/Package)</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h3 class="card-header">Class XI</h3>
                <div class="card-body">
                    <div class="display-4">Rs.120<small>k</small></div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Physics (Rs.30<small>k</small>/Package)</li>
                    <li class="list-group-item">Chemistry (Rs.30<small>k</small>/Package)</li>
                    <li class="list-group-item">Biology (Rs.30<small>k</small>/Package)</li>
                    <li class="list-group-item">Math (Rs.30<small>k</small>/Package)</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h3 class="card-header">Class XII</h3>
                <div class="card-body">
                    <div class="display-4">Rs.120<small>k</small></div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Physics (Rs.30<small>k</small>/Package)</li>
                    <li class="list-group-item">Chemistry (Rs.30<small>k</small>/Package)</li>
                    <li class="list-group-item">Biology (Rs.30<small>k</small>/Package)</li>
                    <li class="list-group-item">Math (Rs.30<small>k</small>/Package)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>

@include('frontend.footer')
