@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center text-danger my-4">your Message has been successfuly recieved</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any other questions? Please do not hesitate to ask!</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-12">
            <form id="contact-form" name="contact-form" action="contactController" method="POST">
            <!-- Laravel dosent allowed us to use the form without csrf token -->
            @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="7" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-right">
                <button type="submit" class="btn btn-dark text-white">Send</button>
            </div>
            </form>

            
            <div class="status"></div>
        </div>

    </div>
</section>
<!--Section: Contact v.2-->





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
