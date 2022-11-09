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
        });
    });
    $(document).ready(function() {
        $("#course-btn").click(function() {
            $(".tabs-row div:nth-child(1)").removeClass("tab-active");
            $(".tabs-row div:nth-child(3)").removeClass("tab-active");
            $(".tabs-row div:nth-child(2)").addClass("tab-active");

            $(".webinar-box > div:nth-child(1)").addClass("first-active-area-move-up");
            $(".webinar-box > div:nth-child(2)").addClass("second-active-area-move-up");
        });
    });
    $(document).ready(function() {
        $("#settings-btn").click(function() {
            $(".tabs-row div:nth-child(1)").removeClass("tab-active");
            $(".tabs-row div:nth-child(2)").removeClass("tab-active");
            $(".tabs-row div:nth-child(3)").addClass("tab-active");
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
                    <div class="mb-5">
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
                </div>
            </div>
        </div>
    </div>
</div>