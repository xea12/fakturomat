@extends('../layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="masthead page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakturę</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                        <form action="{{ route('invoices.store') }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}  <!-- sprawdza czy formularz nie jest wysyłany z innej strony  -->
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Wybierz klienta</label>
                                    <select name="customer" class="form-select" id="inputGroupSelect01">
                                      <option selected></option>
                                      @foreach (\App\Models\Customer::all() as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>                                          
                                      @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="number" name="number" value="{{ old('number') }}" type="text" placeholder="Wpisz nr faktury"/>
                                <label for="number">Nazwa faktury</label>
                            </div>
                            <!-- Date address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" name="date" value="{{ old('date') }}" type="text" placeholder="wpisz date" />
                                <label for="date">Data wystawienia w formacie (rrrr-mm-dd)</label>
                            </div>
                            <!-- Total number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="total" name="total" value="{{ old('namtotale') }}" type="text" placeholder="kwota faktury"/>
                                <label for="total">Kwota faktury</label>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Dodaj fakturę</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection      