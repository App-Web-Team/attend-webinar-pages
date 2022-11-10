<head>
    <link rel="stylesheet" href="assets/styles/style-details.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<script>
    $(document).ready(function() {
        $("#webinar-btn").click(function() {
            $(".tabs-row div:nth-child(2)").removeClass("tab-active");
            $(".tabs-row div:nth-child(3)").removeClass("tab-active");
            $(".tabs-row div:nth-child(1)").addClass("tab-active");

            $(".webinar-box > div:nth-child(1)").removeClass("first-active-area-move-up");
            $(".webinar-box > div:nth-child(2)").removeClass("second-active-area-move-up");
            $(".webinar-box > div:nth-child(3)").removeClass("third-active-area-move-up");
        });
    });
    $(document).ready(function() {
        $("#course-btn").click(function() {
            $(".tabs-row div:nth-child(1)").removeClass("tab-active");
            $(".tabs-row div:nth-child(3)").removeClass("tab-active");
            $(".tabs-row div:nth-child(2)").addClass("tab-active");

            $(".webinar-box > div:nth-child(1)").addClass("first-active-area-move-up");
            $(".webinar-box > div:nth-child(2)").addClass("second-active-area-move-up");
            $(".webinar-box > div:nth-child(3)").removeClass("third-active-area-move-up");
        });
    });
    $(document).ready(function() {
        $("#settings-btn").click(function() {
            $(".tabs-row div:nth-child(1)").removeClass("tab-active");
            $(".tabs-row div:nth-child(2)").removeClass("tab-active");
            $(".tabs-row div:nth-child(3)").addClass("tab-active");

            $(".webinar-box > div:nth-child(1)").addClass("first-active-area-move-up");
            $(".webinar-box > div:nth-child(2)").removeClass("second-active-area-move-up");
            $(".webinar-box > div:nth-child(3)").addClass("third-active-area-move-up");
        });
    });
    // settings jquery
    $(document).ready(function() {
        $(".side-tabs button:nth-child(1)").click(function() {
            $(".side-tabs button:nth-child(1) p").addClass("side-bar-active");
            $(".side-tabs button:nth-child(2) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(3) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(4) p").removeClass("side-bar-active");

            // showing profile content
            $(".right-wrapper > div:nth-child(1)").removeClass("profile-section-area");
            $(".right-wrapper > div:nth-child(2)").removeClass("change-pwd-area");
            $(".right-wrapper > div:nth-child(3)").removeClass("contact-area");
            $(".right-wrapper > div:nth-child(4)").removeClass("account-area");
        });
        $(".side-tabs button:nth-child(2)").click(function() {
            $(".side-tabs button:nth-child(1) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(2) p").addClass("side-bar-active");
            $(".side-tabs button:nth-child(3) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(4) p").removeClass("side-bar-active");

            // showing pwd content
            $(".right-wrapper > div:nth-child(1)").addClass("profile-section-area");
            $(".right-wrapper > div:nth-child(2)").addClass("change-pwd-area");
            $(".right-wrapper > div:nth-child(3)").removeClass("contact-area");
            $(".right-wrapper > div:nth-child(4)").removeClass("account-area");
        });
        $(".side-tabs button:nth-child(3)").click(function() {
            $(".side-tabs button:nth-child(1) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(2) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(3) p").addClass("side-bar-active");
            $(".side-tabs button:nth-child(4) p").removeClass("side-bar-active");

            // showing pwd content
            $(".right-wrapper > div:nth-child(1)").addClass("profile-section-area");
            $(".right-wrapper > div:nth-child(2)").removeClass("change-pwd-area");
            $(".right-wrapper > div:nth-child(3)").addClass("contact-area");
            $(".right-wrapper > div:nth-child(4)").removeClass("account-area");
        });
        $(".side-tabs button:nth-child(4)").click(function() {
            $(".side-tabs button:nth-child(1) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(2) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(3) p").removeClass("side-bar-active");
            $(".side-tabs button:nth-child(4) p").addClass("side-bar-active");

            // showing pwd content
            $(".right-wrapper > div:nth-child(1)").addClass("profile-section-area");
            $(".right-wrapper > div:nth-child(2)").removeClass("change-pwd-area");
            $(".right-wrapper > div:nth-child(3)").removeClass("contact-area");
            $(".right-wrapper > div:nth-child(4)").addClass("account-area");
        });
    });
</script>


<div class="container-fluid py-5 details-container">
    <div class="box mx-auto">
        <div class="row justify-content-center">
            <div class="col-9">
                <!-- hello text -->
                <div class="hello-text mt-5">
                    <p>hello, mr. anand</p>
                    <div class="diamond-line">
                        <i class="fa-solid fa-diamond"></i>
                    </div>
                </div>
                <!-- tabs row -->
                <div class="row tabs-row mt-5 justify-content-center">
                    <div class="col-4 d-flex justify-content-start tab-active">
                        <button id="webinar-btn" class="btn">webinar</button>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <button id="course-btn" class="btn">courses</button>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <button id="settings-btn" class="btn">settings</button>
                    </div>
                </div>
                <!-- webinar box -->
                <div class="webinar-box mt-4">
                    <!-- webinar area -->
                    <!-- <div class="first-active-area-move-up mb-5"> -->
                    <div class=" mb-5">
                        <!-- webinar 1 -->
                        <div class="row webinar-details justify-content-between">
                            <div class="col-6">
                                <p>webinar on lorem ipsum</p>
                                <p>01 october, 2022</p>
                            </div>
                            <div class="col-6 reminder-col d-flex align-items-center justify-content-end">
                                <p>3Hrs</p>
                                <i class="fa-solid fa-bell pl-3"></i>
                            </div>
                        </div>
                        <div class="line my-1"></div>
                        <!-- webinar 1 -->
                        <div class="row webinar-details justify-content-between">
                            <div class="col-6">
                                <p>webinar on lorem ipsum</p>
                                <p>15 october, 2022</p>
                            </div>
                            <div class="col-6 reminder-col d-flex align-items-center justify-content-end">
                                <p>3Hrs</p>
                                <i class="fa-solid fa-bell pl-3"></i>
                            </div>
                        </div>
                    </div>
                    <!-- course area -->
                    <!-- <div class="second-active-area-move-up"> -->
                    <div class="">
                        <!-- course 1 -->
                        <div class="row webinar-details course-details justify-content-between">
                            <div class="col-6">
                                <p>expert on digital marketing</p>
                                <p>expires in 33 days</p>
                            </div>
                            <div class="col-6 progress-col d-flex align-items-center justify-content-end">
                                <i class="fa-regular fa-clipboard icon"></i>
                                <i class="fa-solid fa-layer-group icon ml-3"></i>
                                <div class="circle-wrap ml-3">
                                    <div class="circle">
                                        <div class="mask half">
                                            <div class="fill"></div>
                                        </div>
                                        <div class="mask full">
                                            <div class="fill"></div>
                                        </div>
                                        <div class="inside-circle"> 75% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- settings area -->
                    <!-- <div class="third-active-area-move-up"> -->
                    <div class="">
                        <div class="row">
                            <!-- side tabs -->
                            <div class="col-4 side-tabs text-center">
                                <button>
                                    <p class="side-bar-active">profile</p>
                                </button>
                                <button>
                                    <p>change password</p>
                                </button>
                                <button>
                                    <p>contact info</p>
                                </button>
                                <button>
                                    <p>account log</p>
                                </button>
                            </div>
                            <!-- fixed right wrapper -->
                            <div class="col-8 right-wrapper">
                                <!-- profile section -->
                                <!-- <div class="profile-section-area"> -->
                                <div class="profile">
                                    <p>profile page</p>
                                </div>
                                <!-- change-password section -->
                                <!-- <div class="change-pwd-area"> -->
                                <div class="">
                                    <!-- form -->
                                    <form class="mt-5">
                                        <div class="row">
                                            <div class="col mb-2">
                                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password">
                                            </div>
                                            <div class="col mb-2">
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-6 mb-3">
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-6 text-right">
                                                <button type="submit" class="btn text-uppercase">update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- contact section -->
                                <div class="contact">
                                    <p>contact page</p>
                                </div>
                                <!-- account section -->
                                <div class="account">
                                    <p>account page</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>