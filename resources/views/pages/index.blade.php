@extends('layouts.master')
@section('main_page')
{{-- <div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Admin Dashboard</h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Admin</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green ">
                            <i class="flaticon-classmates text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Students</div>
                            <div class="item-number"><span class="counter" data-num="150000">1,50,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-blue">
                            <i class="flaticon-multiple-users-silhouette text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Teachers</div>
                            <div class="item-number"><span class="counter" data-num="2250">2,250</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-yellow">
                            <i class="flaticon-couple text-orange"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Parents</div>
                            <div class="item-number"><span class="counter" data-num="5690">5,690</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            <i class="flaticon-money text-red"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Earnings</div>
                            <div class="item-number"><span>$</span><span class="counter"
                                    data-num="193000">1,93,000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard summery End Here -->

    <!-- Footer Area Start Here -->
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">TCMS</a> 2022. All rights reserved. Designed by <a
                href="#">....</a></div>
    </footer>
    <!-- Footer Area End Here -->
</div> --}}


<div class="row">
    <!-- Row #1 -->
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                <div class="d-none d-sm-block">
                    <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
                </div>
                <div>
                    <div class="fs-3 fw-semibold">1500</div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                <div class="d-none d-sm-block">
                    <i class="fa fa-wallet fa-2x opacity-25"></i>
                </div>
                <div>
                    <div class="fs-3 fw-semibold">$780</div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                <div class="d-none d-sm-block">
                    <i class="fa fa-envelope-open fa-2x opacity-25"></i>
                </div>
                <div>
                    <div class="fs-3 fw-semibold">15</div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Messages</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
            <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                <div class="d-none d-sm-block">
                    <i class="fa fa-users fa-2x opacity-25"></i>
                </div>
                <div>
                    <div class="fs-3 fw-semibold">4252</div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Online</div>
                </div>
            </div>
        </a>
    </div>
    <!-- END Row #1 -->
</div>
@endsection
