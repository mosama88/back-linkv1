@extends('website.layouts.master')
@section('title', 'أتصل بنا')
@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100"
        style="background: url('{{ asset('website') }}/assets/images/contact-detail.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0">أتصل بنا</h4>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->

            @include('website.layouts.breadcrumb', [
                'previuosPage' => 'الرئيسية',
                'currentPage' => 'أتصل بنا',
            ])

        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-10 mt-8 pt-2 mx-auto">
                    <div class="card shadow rounded border-0">
                        <div class="card-body py-5">
                            @if (session('success') != null)
                                <div class="alert alert-success" role="alert" id="success-message">
                                    {{ session('success') }} </div>
                            @endif
                            <h4 class="card-title">تواصل معنا الآن !</h4>
                            <div class="custom-form mt-3">
                                <form action="{{ route('contacts.store') }}" method="POST" id="myForm">
                                    @csrf
                                    <p id="error-msg" class="mb-0"></p>
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">أسمك<span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" value="{{ old('name') }}" id="name"
                                                        type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        placeholder="أسمك :">
                                                    @error('name')
                                                        <span class="invalid-feedback text-right" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">البريد الالكترونى <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" value="{{ old('email') }}" id="email"
                                                        type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="البريد الالكترونى :">
                                                    @error('email')
                                                        <span class="invalid-feedback text-right" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">الموضوع</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" value="{{ old('subject') }}" id="subject"
                                                        class="form-control @error('subject') is-invalid @enderror"
                                                        placeholder="الموضوع :">
                                                    @error('subject')
                                                        <span class="invalid-feedback text-right" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">ملاحظاتك <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                    <textarea name="notes" id="notes" rows="4" class="form-control @error('notes') is-invalid @enderror"
                                                        placeholder="ملاحظاتك :">{{ old('notes') }}</textarea>
                                                    @error('notes')
                                                        <span class="invalid-feedback text-right" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-pills btn-primary">
                                                <i class="fa-solid fa-paper-plane mx-1"></i>
                                                إرسال
                                            </button>
                                        </div>

                                    </div>

                                </form>
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div><!--end col-->



            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-phone rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">الموبايل</h5>
                            <p class="text-muted">Start working with Landrick that can provide everything</p>
                            <a href="tel:+152534-468-854" class="read-more">{{ $setting->mobile }}</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-envelope rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">البريد الالكترونى</h5>
                            <p class="text-muted">Start working with Landrick that can provide everything</p>
                            <a href="mailto:contact@example.com" class="read-more">{{ $setting->email }}</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-map-marker rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">What's App</h5>
                            <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                data-type="iframe"
                                class="video-play-icon read-more lightbox">{{ $setting->whatsapp }}</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End contact -->

@endsection
