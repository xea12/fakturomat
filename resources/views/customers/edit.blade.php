@extends('../layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="masthead page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytujesz klienta {{ $customer->id}}</h2>
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
                        <form action="{{ route('customers.update', ['klienci' => $customer->id]) }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}  <!-- sprawdza czy formularz nie jest wysyłany z innej strony  -->
                            @method('PUT')
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->name }}" class="form-control" id="name" name="name" type="text" placeholder="Nazwa klienta" required="required" />
                                <label for="name">Nazwa</label>
                            </div>
                            <!-- Date address input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->adress }}" class="form-control" id="adress" name="adress" type="text" placeholder="Adres klienta" required="required" />
                                <label for="adress">Adres klienta</label>
                            </div>
                            <!-- Total number input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $customer->nip }}" class="form-control" id="nip" name="nip" type="text" placeholder="NIP" required="required" />
                                <label for="nip">NIP</label>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Zapisz zmiany</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection      