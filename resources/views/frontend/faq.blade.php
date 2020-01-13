@include('frontend.header')

<!-- Page Content -->
<div class="container ">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 ">
        <small></small>
    </h1>
    <div class="row pt-5"></div>
    <ol class="breadcrumb ">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">FAQ</li>
    </ol>

    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why Online Courses?</a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                    <b> Anywhere</b> <br>
                    Any place you can access internet through a computer or even a mobile device, students can participate in classes anywhere in the world.
                    <br>
                    <b> Anytime/Any place </b> <br>
                    Students can take part in the courses according to their convenience with no hassles. Students are provided with access to lectures, learning materials and Q&A discussions with livechat also available.
                    <br>
                    <b> Student Centered</b> <br>
                    With customized learning experience students control the learning environment according to their needs.
                    <br>
                    <b> Access to Resources</b> <br>
                    With resources available at the tip of the figures, students have access to millions of resources and materials which can be a bit time consuming and at times frustrating. With online classes, teachers can collate resources relevant to the subject matter and make accessible to the students.
                    <br>
                    <b> Creative Teaching</b> <br>
                    As educators transform their courses to take full advantage of the online format, they must reflect on their course objectives and teaching styles which benefits students on a different but to the point learning.
                    <br>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What Kind of Technology Will I Need?
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-body">
                    Technology requirements vary according to the program, but schools generally require students to meet basic hardware and software requirements which typically include a computer with the following features:
                    <ul>
                        <li> Recent Windows, Mac or Linux operating system
                        </li>
                        <li> High-speed internet access
                        </li>
                        <li> Minimum RAM requirements
                        </li>
                        <li> Office software, such as word processing, spreadsheet and slide presentation programs
                        </li>
                        <li> Web camera
                        </li>
                        <li> Headset with microphone
                        </li>
                        <li> CD/DVD drive
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

@include('frontend.footer')
