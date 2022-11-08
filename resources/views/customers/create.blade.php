@extends('../layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="masthead page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj klienta</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{ route('customers.store') }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}  <!-- sprawdza czy formularz nie jest wysyłany z innej strony  -->
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Wpisz nazwę klienta" required="required" />
                                <label for="name">Nazwa klienta</label>
                            </div>
                            <!-- Date address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="adress" name="adress" type="text" placeholder="Wpisz adres klienta" required="required" />
                                <label for="adress">Adress klienta</label>
                            </div>
                            <!-- Total number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nip" name="nip" type="text" placeholder="Podaj NIP klienta" required="required" />
                                <label for="nip">NIP</label>
                            </div>

                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Dodaj klienta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection      