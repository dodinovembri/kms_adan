@extends('layouts.fe')

@section('content')

            <div role="main" class="main">

                <div class="container py-2">

                    <div class="row">
                        <div class="col-lg-3 mt-4 mt-lg-0">

                            <aside class="sidebar mt-2" id="sidebar">
                                <ul class="nav nav-list flex-column mb-5">
                                    <li class="nav-item"><a class="nav-link text-dark" href="#">My Profile</a></li>
                                </ul>
                            </aside>

                        </div>
                        <div class="col-lg-9">

                            <div class="overflow-hidden mb-1">
                                <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">My</strong> Profile</h2>
                            </div>
                            <div class="overflow-hidden mb-4 pb-3">
                                <p class="mb-0"></p>
                            </div>

                            <form role="form" class="needs-validation">
                                <div class="form-group row">
                                    <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Full Name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" required type="text" value="{{ $user[0]->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" required type="email" value="{{ $user[0]->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Points Value</label>
                                    <div class="col-lg-9">
                                        <?php if (isset($user[0]->point)) {
                                            $points = number_format($user[0]->point, 0, ',', '.');
                                        }else{
                                            $points = 0;
                                        } ?>
                                        <input class="form-control" type="text" value="Rp. {{ $points }}">
                                    </div>
                                </div>                                
                                <div class="form-group row">
                                    <div class="form-group col-lg-9">
                                        
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <input type="submit" value="Save" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

@endsection