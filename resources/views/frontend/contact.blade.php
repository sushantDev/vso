@include('frontend.header')

<!-- Page Content -->
<head>
    <link rel="stylesheet" href="{{ asset('frontend/css/contact.css') }}">
</head>

<div class="container pt-5">
    <ol class="breadcrumb ">
        <li class="breadcrumb-item">
            <a href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <div class="row" style=height:100px></div>
    <div class="row" style="border: solid #0274d7; padding: 2em 2em 2em 2em; border-radius: 20px;">
        <div class="col-lg-6 col-mb-6">
            <i class="fa fa-map-marker fa-2x" style="padding-left:220px; color: #0274d7"></i>
            <div class="address" style="padding-left:200px">
                <p>
                <h3>Address</h3></p>
                <p> Vidya Sathi online Pvt. Ltd.</p>
                <p> Shankhamull Road, New Baneshwor</p>
                <p> Near to Global IME Bank</p>
                <p> 44600</p>

                <p> Vidyasathionline.com</p>
                <p> vidyasathionline@gmail.com</p>
            </div>
        </div>

        <div class="col-lg-6 col-mb-6">
            <i class="fa fa-phone fa-2x" style="padding-left:220px; color: #0274d7"></i>
            <div class="contact" style="padding-left:200px">
                <p>
                <h3>Contact no.</h3></p>
                <p> +977-9803622823</p>
                <p> 01-4786286</p>
                <a href="hgfg"> <i class="fa fa-facebook-square fa-2x" style="padding-left:3px"></i></a>
                <a href="gvgvg"><i class="fa fa-instagram fa-2x" href="https:"></i></a>
                <a href="ggvv"><i class="fa fa-google-plus-square fa-2x"></i></a>
            </div>
        </div>
    </div>
    <div class="row" style="height:100px"></div>
    <br>

    <!-- form -->
    <div class="row pt-5" style="border: solid #0274d7; padding: 2em 2em 2em 2em; border-radius: 20px;">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your email Id">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone number</label>
                    <input type="number" name="phone_no" class="form-control" id="exampleInputPassword1" placeholder="Enter your phone number">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label><br>
                    <textarea class="w-100 rounded-lg" name="message" placeholder="Enter your message"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
            <br><br>
        </div>
        <div class="col-4"></div>
    </div>

    <div class="row" style="height:80px"></div>
</div>
<div class="row" style="">
    <!-- Map Column -->
    <div class="col-12">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14132.248937181275!2d85.32540587080942!3d27.684471326114995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bfd910ffe9%3A0x66f431dda92f7629!2sShankhamul%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1578470592880!5m2!1sen!2snp" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>

@include('frontend.footer')
