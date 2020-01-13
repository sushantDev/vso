@include('frontend.header')

<!-- Page Content -->
<div class="container pt-4">
    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
        <small><i>Imagining Teaching and Learning</i></small>
    </h1>

    <!-- Intro Content -->
    <div class="row" style="height:460px; background-color:rgb(182, 184, 196);">
        <div class="col-lg-6">
            <img class="img-fluid rounded mb-4" src="{{ asset('frontend/images/aboutUs.jpg') }}" alt="" style="height:430px;padding-top:30px;padding-left:10px">
        </div>
        <div class="col-lg-6" style="padding-top:20px">
            <h2>Why We Exist?</h2>
            <p>Teaching process has stayed the same for decades. The traditional teaching and offline education system are plagued with multiple inefficiencies.</p>
            <p>Our vision at Vidya sathi is to reimagine and evolve the way teaching and learning have been happening for decades. By combining quality teachers, engaging content and superior technology we are able to create a superior learning experience for students and aid in their outcome improvement, which is unlike any offline experience.</p>
            <p>Teaching and learning are set to transform at a rapid pace and our mission at Vidya sathi is to accelerate these transformations.</p>
            <p>Even our name 'Vidya sathi' bears a testimony to our purpose.
                Vidya = 'Knowledge' and Sathi= 'Friend'.
                A “knowledge Sathi” where any student can tap into a teacher directly and learning can happen in a personalized way, anytime-anywhere.
            </p>
        </div>
    </div>
    <div class="row" style="height:20px"></div>
    <!-- /.row -->
    <div class="row" style="height:460px; background-color:rgb(182, 184, 196);">
        <div class="col-lg-6" style="padding-top:20px;padding-left:20px">
            <h2>Who Are We?</h2>
            <p>Vidya sathi is Nepal's only one Online tutoring company which enables students to learn LIVE with some of Nepal's best-curated teachers. Vidya sathi`s USP is its quality of teachers. It has some 50+ teachers who have taught more than 20,000+ students spread across 20+ cities across countries. Vidya sathi is founded by expert group of education who have been teachers themselves with over 13 years of teaching experience and having taught over 10,000 students.</p>
            <p>Vidya sathi’s online tutoring platform enables LIVE interactive learning between a teacher and a student. It offers individual and group classes. On Vidya sathi a teacher is able to give personalized teaching using audio, video and whiteboarding tools where both teacher and student are able to see, hear, write and interact. Imagine it like 'Skype' custom made for education. Vidya sathi caters to 10th grade to 12th grade and prepares for school boards, competitive examinations and has co-curricular courses as well.
            </p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded mb-4" src="{{ asset('frontend/images/logoo.jpeg') }}" alt="" style="height:430px; padding-top:30px;padding-right:15px">
        </div>
    </div>
    <div class="row" style="height:20px"></div>
</div>

@include('frontend.footer')
