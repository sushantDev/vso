@include('frontend.header')

<div class="container">
    <div class="row pb-5">
    </div>
    <div class="row pt-5 pb-5">
        <h2>Chemistry</h2>
    </div>
    <div class="row" style="height:581px">
        <div class="col-6">
            <img src="{{ asset('frontend/images/chemistry.jpg') }}" style="height:500px" alt="Physics">
        </div>
        <div class="col-6 pl-5">
            <table class="table w-75 ">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col" class="pl-3">UNITS</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Classification Of Elements</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Chemical Reaction</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Acid, Base And Salts</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Some Gases</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Metals</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Hydrocarbon And Their Derivatives</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Materials Used In Daily Life</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
</div>

@include('frontend.footer')
