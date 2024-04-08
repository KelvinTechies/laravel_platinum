@extends('dashboard.Layout.layout')

@section('main')
    <div class="container-fluid py-4">

        <div class="row mb-4">

            {{-- <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
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

        <div class="row">


            <div class="col-lg-12 col-md-10 mx-auto">

                <div class="card mt-4">

                    <div class="card-header p-3">
                        <h5 class="mb-0">Alerts</h5>
                    </div>

                    <div class="card-body p-3 pb-0">

                        {{--  <div class="alert alert-light alert-dismissible text-dark" role="alert">

                            <div class="alert-text">
                                <div class="align-items-center">
                                    <h6 class="mb-0">Debit Card Transaction Alert:</h6>
                                </div>
                                <span class="text-md">"Hello {{ Auth::user()->name }}, a debit card transaction of...<span
                                        class="no-display"> $2,000.00 was made at Hi-Stock on 21/07/2023 at 11:05 GMT. If
                                        this transaction was not authorized by you, please contact us immediately."
                                    </span></span>
                            </div>

                            <div>
                                <button type="button" class="btn-close2 text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="material-icons text-danger" aria-hidden="true">delete</i>
                                </button>

                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="material-icons text-info" aria-hidden="true">open_in_browser</i>
                                </button>
                            </div>

                        </div>

                        <div class="alert alert-light alert-dismissible text-dark" role="alert">

                            <div class="alert-text">
                                <div class="align-items-center">
                                    <h6 class="mb-0">Credit Card Transaction Alert:</h6>
                                </div>
                                <span class="text-md">"Dear {{ Auth::user()->name }}, a credit card transaction of... <span
                                        class="no-display"> $100.00 was made at Applet Inc. on 12/05/2023 at 16:56 GMT. This
                                        transaction is within your credit limit. Thank you for using Platinum Union credit
                                        card." </span></span>
                            </div>

                            <div>
                                <button type="button" class="btn-close2 text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="material-icons text-danger" aria-hidden="true">delete</i>
                                </button>

                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="material-icons text-info" aria-hidden="true">open_in_browser</i>
                                </button>
                            </div>

                        </div>

                        <div class="alert alert-light alert-dismissible text-dark" role="alert">

                            <div class="alert-text">
                                <div class="align-items-center">
                                    <h6 class="mb-0">ATM Withdrawal Notification:</h6>
                                </div>
                                <span class="text-md">"Hi {{ Auth::user()->name }}, an ATM withdrawal of...<span
                                        class="no-display">
                                        $1,000.00 was made from your account on 29/04/2023 at 09:45 GMT at 730 Atlantic Ave,
                                        Boston. Your available balance is now $941,220,010.00." </span></span>
                            </div>

                            <div>
                                <button type="button" class="btn-close2 text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="material-icons text-danger" aria-hidden="true">delete</i>
                                </button>

                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="material-icons text-info" aria-hidden="true">open_in_browser</i>
                                </button>
                            </div>

                        </div> --}}

                        @foreach ($notifications as $notification)
                            <div class="alert alert-light alert-dismissible text-dark" role="alert">

                                <div class="alert-text">
                                    <div class="align-items-center">
                                        <h6 class="mb-0"> {{ $notification->title }}:</h6>
                                    </div>
                                    <span class="text-md"><span class="no-display">
                                            {{ $notification->message }}</span></span>
                                </div>

                                <div>
                                    <form id="del_noti" action="del_noti" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <button type="button" class="btn-close2 text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close" {{ $notification->id }}
                                        onclick="event.preventDefault(); document.getElementById('del_noti').submit();">
                                        <i class="material-icons text-danger" aria-hidden="true">delete</i>
                                    </button>

                                    {{--    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <i class="material-icons text-info" aria-hidden="true">open_in_browser</i>
                                    </button> --}}
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
