@extends('dashboard.Layout.layout')

@section('main')
    <div class="container-fluid py-4">

        <div class="row mb-4">

            {{--  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">

                        <div class="text-en pt-1 obj-flex">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl">
                                <i class="material-icons opacity-10">attach_money</i>
                            </div>

                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">3948169617</p>
                                <h4 class="mb-0">$941,220,010.00</h4>
                                <p class="text-sm mb-0"><span class="text-success text-sm font-weight-bolder">+15%
                                    </span>interest daily</p>
                                <p class="text-sm mb-0 text-success font-weight-bolder">Active</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">

                <div class="card">
                    <div class="card-header p-3 pt-2">

                        <div class="text-en pt-1 obj-flex">
                            <div class="avatar avatar-xl position-relative">
                                <img src="./assets/img/jason-statham.jpg" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>

                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Surveyor</p>
                                <h4 class="mb-0">Jason Statham</h4>
                                <p class="text-sm mb-0">jason.statham@gmail.com</p>
                                <p class="text-sm mb-0 text-capitalize">Canifonia, USA.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">

                <div class="card">

                    <div class="card-header p-3 pt-2">

                        <div class="text-en pt-1">
                            <form role="form" class="text-start">
                                <div class="input-group input-group-outline my-2">
                                    <label class="form-label">Your Account Number</label>
                                    <input type="number" class="form-control" required>
                                </div>

                                <button class="withdraw" id="open-popup">
                                    <span>Transfer</span>
                                </button>
                            </form>
                        </div>

                    </div>

                </div>

            </div> --}}
            @include('includes.part');

        </div>

        <div class="page-header min-height-150 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1553729459-efe14ef6055d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <span class="mask bg-gradient-primary  opacity-6"></span>
        </div>

        <div class="card card-body mx-3 mx-md-4 mt-n6">

            <div class="row mb-2">

                <div class="col-lg-4 mb-">
                    <div class="profile-img position-relative">
                        <img width="400" src="{{ asset('uploads/' . Auth::user()->img) }}" alt="profile_image"
                            class="border-radius-lg shadow-sm">
                    </div>

                    <div>
                        <a class="btn bg-gradient-dark mb-0" href="javascript:;">Edit Profile <i
                                class="material-icons opacity-10">edit</i></a>
                    </div>
                </div>

                <div class="col-lg-4  mt-3">
                    <div class="position-relative">

                        <div class="col-12">

                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">

                                        <div class="h-100">
                                            <p class="mb-3">Full Name:<strong class="text-dark">
                                                    {{ Auth::user()->name }}</strong>
                                                </h4>

                                            <p class="mb-3">Email:<strong class="text-dark">
                                                    {{ Auth::user()->email }}</strong></p>

                                            <p class="mb-3">DOB:<strong class="text-dark"> 01-04-2024</strong></p>

                                            <p class="mb-3">Area Code:<strong class="text-dark">
                                                    {{ Auth::user()->country }} {{ Auth::user()->area_code }}</strong>
                                            </p>

                                            <p class="mb-3">Mobile:<strong class="text-dark">
                                                    {{ Auth::user()->fone }}</strong>
                                            </p>

                                            <p class="mb-3">Sex:<strong class="text-dark">
                                                    {{ Auth::user()->gender }}</strong></p>

                                            <p class="mb-3">Home Address:<strong class="text-dark">
                                                    {{ Auth::user()->home_addr }}</strong></h4>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="position-relative">

                        <div class="col-12">

                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">

                                        <div class="h-100">

                                            <p class="mb-3">Office Address:<strong class="text-dark">
                                                    {{ Auth::user()->office_addr }}</strong></p>

                                            <p class="mb-3">Country:<strong
                                                    class="text-dark">{{ Auth::user()->country }}</strong></p>

                                            <p class="mb-3">State:<strong class="text-dark">
                                                    {{ Auth::user()->state }}</strong></p>

                                            <p class="mb-3">Postal Code:<strong class="text-dark">
                                                    {{ Auth::user()->postal_code }}</strong></p>

                                            <p class="mb-3">Occupation:<strong class="text-dark">
                                                    {{ Auth::user()->occupation }}</strong></p>

                                            <p class="mb-3">Account Type:<strong class="text-dark">
                                                    {{ Auth::user()->acct_type }}</strong></p>

                                            <p class="mb-3">SSN:<strong class="text-dark">
                                                    {{ Auth::user()->sos }}</strong></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
