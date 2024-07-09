<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from edumin.dexignlab.com/laravel/demo/index-2 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 10:23:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="dexignlabs">
    <meta name="csrf-token" content="cbagKC0si0wl6pnCcnIB2SOkie0l9iSVRNAgFjrX">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="admin, dashboard, admin dashboard, admin template, template, admin panel, administration, analytics, bootstrap, modern, responsive, creative, retina ready, modern Dashboard responsive dashboard, responsive template, user experience, user interface, Bootstrap Dashboard, Analytics Dashboard, Customizable Admin Panel, EduMin template, ui kit, web app, EduMin, School Management,Dashboard Template, academy, course, courses, e-learning, education, learning, learning management system, lms, school, student, teacher">
	<meta name="description" content="EduMin - Empower your educational institution with the all-in-one Education Admin Dashboard Template. Streamline administrative tasks, manage courses, track student performance, and gain valuable insights with ease. Elevate your education management experience with a modern, responsive, and feature-packed solution. Explore EduMin now for a smarter, more efficient approach to education administration.">
	<meta property="og:title" content="EduMin - Empower your educational institution with the all-in-one Education Admin Dashboard Template. Streamline administrative tasks, manage courses, track student performance, and gain valuable insights with ease. Elevate your education management experience with a modern, responsive, and feature-packed solution. Explore EduMin now for a smarter, more efficient approach to education administration.">
	<meta property="og:image" content="../social-image.html">
	<meta name="format-detection" content="telephone=no">
	<meta name="twitter:title" content="EduMin - Empower your educational institution with the all-in-one Education Admin Dashboard Template. Streamline administrative tasks, manage courses, track student performance, and gain valuable insights with ease. Elevate your education management experience with a modern, responsive, and feature-packed solution. Explore EduMin now for a smarter, more efficient approach to education administration.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:image" content="../social-image.html">
	<meta name="twitter:card" content="summary_large_image">

    <link rel="shortcut icon" type="image/png" href="public/images/favicon.png">
    <title>Laravel | Dashboard</title>


                    <link href="public/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css"/>
                    <link href="public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>


                    <link href="public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
                <link class="main-css" href="public/css/style.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="67" viewBox="0 0 84 67" fill="none">
                    <mask id="mask0_135_5" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="0" width="76" height="66">
                    <rect x="4" width="76" height="66" fill="url(#pattern0)"/>
                    </mask>
                    <g mask="url(#mask0_135_5)">
                    <rect x="-3" y="-1" width="90" height="68" fill="none"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_135_5" transform="matrix(0.0125 0 0 0.0143939 0 -0.00378788)"/>
                    </pattern>
                    <image id="image0_135_5" width="80" height="70" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABGCAMAAABsQOMZAAAAllBMVEUAAAD/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxZ2RtyAAAAAMXRSTlMA61rOUwajmEgztPfHuqiLdj0gGhXw38SukX5pVi0lC4VhQjgD2b+fck4pD/nm0uIIbztwLQAAAiBJREFUWMPt19uSojAUheEoKigKqIACKqh4PnSv93+5YUprU0wwEMjFdFX/936SWIYd9tuPba5bG4XcTL8DGKwVcZvTHa+WewXcUAfyrF1b7oR/Wu7acEuUNJk25KYjfGhhNOB2xJWSK0nuwnEc2ZXgjCNqpK3qPt0YNTtsa3ArDRL5UQW31SDZ4Zx+5qInGuQ7canW3x7QsI7j8lzko0Ve6BY554GWeXZOxuEXFOQF89dhHHagKNO+MraC0hw2cw7quEeyZlndpxrOj/rsXW+sAuwV/sJHVSB1aUFOdGR1BcegVFqPrQnkXiPSjS9/d4xAjrQkF2u8ftUc5MlBfW6UcRzIN7RqcjvGxCB1FT8lDTqVYD/OBy4xZw3ZuzQWgZo1o6HL/sydiLsFB1e05C8guNJT2mYpp69pDk08IBWBWvEDrs2dlXd9Q1+YmAA6/SqwMKzekgJpBjPibGRVgvym3xwiTXtOO6wD9UBqOSXy/Hi92YhbDwAJkB9Wv88PM3S5sVYWpL9WVkzcfgDIg9TxTRK3BErALbKiKpCOJ2o6AUrB4SBrXwUS+V6LQRwHUmIwJ7fZNhHXBqQWxLUFqf8E9CDftwgMTWlPT5koN/Gl1hvQYabiJuCfYwX3PGrRk7nYBlWbeZK95M5DX7B19pXJl0bjcu7pxKxhxqjlVZlvE9wLnLVnbZs7dIvxkitTURotkPU835iyjEl2yv72U/sDJjPTtw93ZiUAAAAASUVORK5CYII="/>
                    </defs>
                </svg>
                <svg class="brand-title" xmlns="http://www.w3.org/2000/svg" width="122" height="19" viewBox="0 0 122 19" fill="none">
                    <path d="M5.3 4.3V7.175H10.925V10.9H5.3V14.075H11.675V18H0.4V0.374999H11.675V4.3H5.3ZM25.8564 0.374999C27.7064 0.374999 29.3231 0.749999 30.7064 1.5C32.1064 2.23333 33.1814 3.26667 33.9314 4.6C34.6814 5.93333 35.0564 7.45833 35.0564 9.175C35.0564 10.875 34.6731 12.3917 33.9064 13.725C33.1564 15.0583 32.0814 16.1083 30.6814 16.875C29.2981 17.625 27.6898 18 25.8564 18H18.8814V0.374999H25.8564ZM25.4814 13.675C26.9148 13.675 28.0398 13.2833 28.8564 12.5C29.6731 11.7167 30.0814 10.6083 30.0814 9.175C30.0814 7.725 29.6731 6.60833 28.8564 5.825C28.0398 5.025 26.9148 4.625 25.4814 4.625H23.7814V13.675H25.4814ZM46.8504 0.374999V10.6C46.8504 11.55 47.0671 12.2833 47.5004 12.8C47.9504 13.3167 48.6254 13.575 49.5254 13.575C50.4254 13.575 51.1004 13.3167 51.5504 12.8C52.0171 12.2667 52.2504 11.5333 52.2504 10.6V0.374999H57.1504V10.6C57.1504 12.2167 56.8087 13.6 56.1254 14.75C55.4421 15.8833 54.5087 16.7417 53.3254 17.325C52.1587 17.8917 50.8587 18.175 49.4254 18.175C47.9921 18.175 46.7087 17.8917 45.5754 17.325C44.4587 16.7417 43.5754 15.8833 42.9254 14.75C42.2921 13.6167 41.9754 12.2333 41.9754 10.6V0.374999H46.8504ZM85.2084 0.374999V18H80.3084V8.275L76.9834 18H72.8834L69.5334 8.2V18H64.6334V0.374999H70.5584L74.9834 11.825L79.3084 0.374999H85.2084ZM97.6828 0.374999V18H92.7828V0.374999H97.6828ZM121.583 18H116.683L110.158 8.15V18H105.258V0.374999H110.158L116.683 10.35V0.374999H121.583V18Z" fill="black"/>
                </svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

         <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
    <div class="chatbox-close"></div>
    <div class="custom-tab-1">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="chat" role="tabpanel">
                <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                        x="4" y="11" width="16" height="2" rx="1" />
                                </g>
                            </svg></a>
                        <div>
                            <h6 class="mb-1">Chat List</h6>
                            <p class="mb-0">Show All</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                </g>
                            </svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                        <ul class="contacts">
                            <li class="name-first-letter">A</li>
                            <li class="active dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Archie Parker</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Alfie Mason</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>AharlieKane</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">B</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/5.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Bashid Samim</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/1.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Breddie Ronan</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/2.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Ceorge Carson</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">D</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/3.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Darry Parker</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/4.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Denry Hunter</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">J</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/5.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jack Ronan</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/1.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jacob Tucker</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/2.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>James Logan</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/3.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Joshua Weston</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">O</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/4.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Oliver Acker</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="public/images/avatar/5.jpg" class="rounded-circle user_img"
                                            alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Oscar Weston</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card chat dlab-chat-history-box d-none">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);" class="dlab-chat-history-back">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                        x="14" y="7" width="2" height="10" rx="1" />
                                    <path
                                        d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                </g>
                            </svg>
                        </a>
                        <div>
                            <h6 class="mb-1">Chat with Khelesh</h6>
                            <p class="mb-0 text-success">Online</p>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                    </g>
                                </svg></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View
                                    profile</li>
                                <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
                                    btn-close friends</li>
                                <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group
                                </li>
                                <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer type_msg">
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary"><i
                                        class="fa fa-location-arrow"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="alerts" role="tabpanel">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                </g>
                            </svg></a>
                        <div>
                            <h6 class="mb-1">Notications</h6>
                            <p class="mb-0">Show All</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                        <ul class="contacts">
                            <li class="name-first-letter">SEVER STATUS</li>
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont primary">KK</div>
                                    <div class="user_info">
                                        <span>David Nester Birthday</span>
                                        <p class="text-primary">Today</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">SOCIAL</li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont success">RU</div>
                                    <div class="user_info">
                                        <span>Perfection Simplified</span>
                                        <p>Jame Smith commented on your status</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">SEVER STATUS</li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont primary">AU</div>
                                    <div class="user_info">
                                        <span>AharlieKane</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont info">MO</div>
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="notes">
                <div class="card mb-sm-3 mb-md-0 note_card">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2"
                                        rx="1" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                        x="4" y="11" width="16" height="2" rx="1" />
                                </g>
                            </svg></a>
                        <div>
                            <h6 class="mb-1">Notes</h6>
                            <p class="mb-0">Add New Nots</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                        <ul class="contacts">
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>New order placed..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>Youtube, a video-sharing website..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>john just buy your product..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-bs-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dlab-theme-mode p-0" href="javascript:void(0);">
                            <i id="icon-light" class="fas fa-sun"></i>
                            <i id="icon-dark" class="fas fa-moon"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell-link " href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.871"
                                viewBox="0 0 24 22.871">
                                <g data-name="Layer 2" transform="translate(-2 -2)">
                                    <path id="Path_9" data-name="Path 9"
                                        d="M23.268,2H4.73A2.733,2.733,0,0,0,2,4.73V17.471A2.733,2.733,0,0,0,4.73,20.2a.911.911,0,0,1,.91.91v1.94a1.82,1.82,0,0,0,2.83,1.514l6.317-4.212a.9.9,0,0,1,.5-.153h4.436a2.742,2.742,0,0,0,2.633-2L25.9,5.462A2.735,2.735,0,0,0,23.268,2Zm.879,2.978-3.539,12.74a.915.915,0,0,1-.88.663H15.292a2.718,2.718,0,0,0-1.514.459L7.46,23.051v-1.94a2.733,2.733,0,0,0-2.73-2.73.911.911,0,0,1-.91-.91V4.73a.911.911,0,0,1,.91-.91H23.268a.914.914,0,0,1,.879,1.158Z"
                                        transform="translate(0 0)" />
                                    <path id="Path_10" data-name="Path 10"
                                        d="M7.91,10.82h4.55a.91.91,0,1,0,0-1.82H7.91a.91.91,0,1,0,0,1.82Z"
                                        transform="translate(-0.45 -0.63)" />
                                    <path id="Path_11" data-name="Path 11"
                                        d="M16.1,13H7.91a.91.91,0,1,0,0,1.82H16.1a.91.91,0,1,0,0-1.82Z"
                                        transform="translate(-0.45 -0.99)" />
                                </g>
                            </svg>
                            <span class="badge light text-white bg-primary rounded-circle">76</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell ai-icon" href="javascript:void(0);" role="button"
                            data-bs-toggle="dropdown">
                            <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled">
                                <li class="media dropdown-item align-items-center gap-3">
                                    <span class="success"><i class="ti-user"></i></span>
                                    <div class="media-body">
                                        <a href="javascript:void(0);">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item align-items-center gap-3">
                                    <span class="primary"><i class="ti-shopping-cart"></i></span>
                                    <div class="media-body">
                                        <a href="javascript:void(0);">
                                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item align-items-center gap-3">
                                    <span class="danger"><i class="ti-bookmark"></i></span>
                                    <div class="media-body">
                                        <a href="javascript:void(0);">
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item align-items-center gap-3">
                                    <span class="primary"><i class="ti-heart"></i></span>
                                    <div class="media-body">
                                        <a href="javascript:void(0);">
                                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item align-items-center gap-3">
                                    <span class="success"><i class="ti-image"></i></span>
                                    <div class="media-body">
                                        <a href="javascript:void(0);">
                                            <p><strong> James.</strong> has added a<strong>customer</strong>
                                                Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="javascript:void(0);">See all notifications <i
                                    class="ti-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link ai-icon" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23.262" height="24"
                                viewBox="0 0 23.262 24">
                                <g id="icon" transform="translate(-1565 90)">
                                    <path id="setting_1_" data-name="setting (1)"
                                        d="M30.45,13.908l-1-.822a1.406,1.406,0,0,1,0-2.171l1-.822a1.869,1.869,0,0,0,.432-2.385L28.911,4.293a1.869,1.869,0,0,0-2.282-.818l-1.211.454a1.406,1.406,0,0,1-1.88-1.086l-.213-1.276A1.869,1.869,0,0,0,21.475,0H17.533a1.869,1.869,0,0,0-1.849,1.567L15.47,2.842a1.406,1.406,0,0,1-1.88,1.086l-1.211-.454a1.869,1.869,0,0,0-2.282.818L8.126,7.707a1.869,1.869,0,0,0,.432,2.385l1,.822a1.406,1.406,0,0,1,0,2.171l-1,.822a1.869,1.869,0,0,0-.432,2.385L10.1,19.707a1.869,1.869,0,0,0,2.282.818l1.211-.454a1.406,1.406,0,0,1,1.88,1.086l.213,1.276A1.869,1.869,0,0,0,17.533,24h3.943a1.869,1.869,0,0,0,1.849-1.567l.213-1.276a1.406,1.406,0,0,1,1.88-1.086l1.211.454a1.869,1.869,0,0,0,2.282-.818l1.972-3.415a1.869,1.869,0,0,0-.432-2.385ZM27.287,18.77l-1.211-.454a3.281,3.281,0,0,0-4.388,2.533l-.213,1.276H17.533l-.213-1.276a3.281,3.281,0,0,0-4.388-2.533l-1.211.454L9.75,15.355l1-.822a3.281,3.281,0,0,0,0-5.067l-1-.822L11.721,5.23l1.211.454A3.281,3.281,0,0,0,17.32,3.151l.213-1.276h3.943l.213,1.276a3.281,3.281,0,0,0,4.388,2.533l1.211-.454,1.972,3.414h0l-1,.822a3.281,3.281,0,0,0,0,5.067l1,.822ZM19.5,7.375A4.625,4.625,0,1,0,24.129,12,4.63,4.63,0,0,0,19.5,7.375Zm0,7.375A2.75,2.75,0,1,1,22.254,12,2.753,2.753,0,0,1,19.5,14.75Z"
                                        transform="translate(1557.127 -90)"></path>
                                </g>
                            </svg>

                            <span class="badge light text-white bg-primary rounded-circle">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div id="DZ_W_TimeLine02" class="widget-timeline dlab-scroll style-1 p-3 height370">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge primary"></div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>10 minutes ago</span>
                                            <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong
                                                    class="text-primary">$500</strong>.</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge info">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">New order placed <strong
                                                    class="text-info">#XF-2356.</strong></h6>
                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge danger">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>30 minutes ago</span>
                                            <h6 class="mb-0">john just buy your product <strong
                                                    class="text-warning">Sell $250</strong></h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge success">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>15 minutes ago</span>
                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge warning">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge dark">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="public/images/profile/education/pic1.jpg" width="20" alt="" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ms-2">Profile </span>
                            </a>
                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="ms-2">Inbox </span>
                            </a>
                            <a href="page-login.html" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>


        <!--**********************************
            Sidebar start
        ***********************************-->
			<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard 1</a></li>
                    <li><a href="index-2.html">Dashboard 2</a></li>
                    <li><a href="index-3.html">Dashboard 3</a></li>
                </ul>
            </li>
            <li><a class="ai-icon" href="event-management.html" aria-expanded="false">
                    <i class="la la-calendar"></i>
                    <span class="nav-text">Event Management</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">Professors</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-professors.html">All Professor</a></li>
                    <li><a href="add-professor.html">Add Professor</a></li>
                    <li><a href="edit-professor.html">Edit Professor</a></li>
                    <li><a href="professor-profile.html">Professor Profile</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-students.html">All Students</a></li>
                    <li><a href="add-student.html">Add Students</a></li>
                    <li><a href="edit-student.html">Edit Students</a></li>
                    <li><a href="about-student.html">About Students</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-graduation-cap"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-courses.html">All Courses</a></li>
                    <li><a href="add-courses.html">Add Courses</a></li>
                    <li><a href="edit-courses.html">Edit Courses</a></li>
                    <li><a href="about-courses.html">About Courses</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-book"></i>
                    <span class="nav-text">Library</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-library.html">All Library</a></li>
                    <li><a href="add-library.html">Add Library</a></li>
                    <li><a href="edit-library.html">Edit Library</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-building"></i>
                    <span class="nav-text">Departments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-departments.html">All Departments</a></li>
                    <li><a href="add-departments.html">Add Departments</a></li>
                    <li><a href="edit-departments.html">Edit Departments</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Staff</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-staff.html">All Staff</a></li>
                    <li><a href="add-staff.html">Add Staff</a></li>
                    <li><a href="edit-staff.html">Edit Staff</a></li>
                    <li><a href="staff-profile.html">Staff Profile</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-gift"></i>
                    <span class="nav-text">Holiday</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-holiday.html">All Holiday</a></li>
                    <li><a href="add-holiday.html">Add Holiday</a></li>
                    <li><a href="edit-holiday.html">Edit Holiday</a></li>
                    <li><a href="holiday-calendar.html">Holiday Calendar</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-dollar"></i>
                    <span class="nav-text">Fees</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="fees-collection.html">Fees Collection</a></li>
                    <li><a href="add-fees.html">Add Fees</a></li>
                    <li><a href="fees-receipt.html">Fees Receipt</a></li>
                </ul>
            </li>
            <li class="nav-label">Apps</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a href="post-details.html">Post Details</a></li>
                    <li><a href="edit-profile.html">Edit Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
							<li><a href="email-inbox.html">Inbox</a></li>
							<li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
							<li><a href="ecom-product-list.html">Product List</a></li>
							<li><a href="ecom-product-detail.html">Product Details</a></li>
							<li><a href="ecom-product-order.html">Order</a></li>
							<li><a href="ecom-checkout.html">Checkout</a></li>
							<li><a href="ecom-invoice.html">Invoice</a></li>
							<li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-database-1"></i>
                    <span class="nav-text">CMS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="content.html">Content</a></li>
                    <li><a href="menu.html">Menus</a></li>
                    <li><a href="email-template.html">Email Template</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="content-add.html">Add Content</a></li>
                    <li><a href="add-email.html">Add Email</a></li>
                    <li><a href="add-blog.html">Add Blog</a></li>
                    <li><a href="blog-category.html">Blog Category</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="la la-signal"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="chart-flot.html">Flot</a></li>
					<li><a href="chart-morris.html">Morris</a></li>
					<li><a href="chart-chartjs.html">Chartjs</a></li>
					<li><a href="chart-chartist.html">Chartist</a></li>
					<li><a href="chart-sparkline.html">Sparkline</a></li>
					<li><a href="chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <li class="nav-label">Components</li>
            <li class="ui-menu"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="la la-globe"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="ui-accordion.html">Accordion</a></li>
                    <li><a href="ui-alert.html">Alert</a></li>
					<li><a href="ui-badge.html">Badge</a></li>
					<li><a href="ui-button.html">Button</a></li>
					<li><a href="ui-modal.html">Modal</a></li>
					<li><a href="ui-button-group.html">Button Group</a></li>
					<li><a href="ui-list-group.html">List Group</a></li>
                    <li><a href="ui-media-object.html">Media Object</a></li>
                    <li><a href="ui-card.html">Cards</a></li>
					<li><a href="ui-carousel.html">Carousel</a></li>
					<li><a href="ui-dropdown.html">Dropdown</a></li>
					<li><a href="ui-popover.html">Popover</a></li>
					<li><a href="ui-progressbar.html">Progressbar</a></li>
					<li><a href="ui-tab.html">Tab</a></li>
					<li><a href="ui-typography.html">Typography</a></li>
					<li><a href="ui-pagination.html">Pagination</a></li>
					<li><a href="ui-grid.html">Grid</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-plus-square-o"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="uc-select2.html">Select 2</a></li>
					<li><a href="uc-nestable.html">Nestedable</a></li>
					<li><a href="uc-noui-slider.html">Noui Slider</a></li>
					<li><a href="uc-sweetalert.html">Sweet Alert</a></li>
					<li><a href="uc-toastr.html">Toastr</a></li>
					<li><a href="map-jqvmap.html">Jqv Map</a></li>
					<li><a href="uc-lightgallery.html">Light Gallery</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" aria-expanded="false">
                    <i class="la la-desktop"></i>
                    <span class="nav-text">Widget</span>
                </a></li>
            <li class="nav-label">Forms</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-file-text"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form-element.html">Form Elements</a></li>
					<li><a href="form-wizard.html">Wizard</a></li>
					<li><a href="form-ckeditor.html">CkEditor</a></li>
					<li><a href="form-pickers.html">Pickers</a></li>
					<li><a href="form-validation.html">Form Validate</a></li>
                </ul>
            </li>
            <li class="nav-label">Table</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-table"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>
            <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-th-list"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page-login.html">Login</a></li>
					<li><a href="page-register.html">Register</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page-error-400.html">Error 400</a></li>
							<li><a href="page-error-403.html">Error 403</a></li>
							<li><a href="page-error-404.html">Error 404</a></li>
							<li><a href="page-error-500.html">Error 500</a></li>
							<li><a href="page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p>Edumin Laravel Saas Admin © 2024 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
        </div>
    </div>
</div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--****
		Wallet Sidebar
		****-->
		<!--**********************************
            Content body start
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
		        <div class="content-body ">
           <div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-xxl-6 col-sm-12">
            <div class="row">
                <div class="col-xl-6 col-xxl-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <h4 class="card-title">Total Students</h4>
                            <h3 class="fw-bold">3280</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                            </div>
                            <small>80% Increase in 20 Days</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <h4 class="card-title">New Students</h4>
                            <h3 class="fw-bold">245</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-danger" style="width: 50%"></div>
                            </div>
                            <small>50% Increase in 25 Days</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <h4 class="card-title">Total Course</h4>
                            <h3 class="fw-bold">28</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
                            </div>
                            <small>76% Increase in 20 Days</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <h4 class="card-title">Fees Collection</h4>
                            <h3 class="fw-bold">25160$</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
                            </div>
                            <small>30% Increase in 30 Days</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Income/Expense Report</h3>
                </div>
                <div class="card-body">
                    <div id="morris_bar_2" class="morris_chart_height ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Professors List</h4>
                </div>
                <div class="card-body dz-scroll" style="height: 360px;">
                    <div class="media mb-3 align-items-center border-bottom pb-3">
                        <img class="me-3 rounded-circle" alt="image" width="50"
                            src="public/images/profile/education/pic1.jpg">
                        <div class="media-body">
                            <h5 class="mb-0 text-pale-sky">Theodore Handle <small class="text-muted">( B.Com )</small>
                            </h5>
                            <small class="text-primary mb-0">Available</small>
                        </div>
                    </div>
                    <div class="media mb-3 align-items-center border-bottom pb-3">
                        <img class="me-3 rounded-circle" alt="image" width="50"
                            src="public/images/profile/education/pic2.jpg">
                        <div class="media-body">
                            <h5 class="mb-0 text-pale-sky">Bess Willis <small class="text-muted">( M.Com )</small></h5>
                            <small class="text-danger mb-0">Not Available</small>
                        </div>
                    </div>
                    <div class="media mb-3 align-items-center border-bottom pb-3">
                        <img class="me-3 rounded-circle" alt="image" width="50"
                            src="public/images/profile/education/pic3.jpg">
                        <div class="media-body">
                            <h5 class="mb-0 text-pale-sky">James Jones <small class="text-muted">( M.Tach )</small></h5>
                            <small class="text-primary mb-0">Available</small>
                        </div>
                    </div>
                    <div class="media mb-3 align-items-center border-bottom pb-3">
                        <img class="me-3 rounded-circle" alt="image" width="50"
                            src="public/images/profile/education/pic4.jpg">
                        <div class="media-body">
                            <h5 class="mb-0 text-pale-sky">Smith Watson <small class="text-muted">( B.Tach )</small>
                            </h5>
                            <small class="text-danger mb-0">Not Available</small>
                        </div>
                    </div>
                    <div class="media mb-2 align-items-center border-bottom pb-3">
                        <img class="me-3 rounded-circle" alt="image" width="50"
                            src="public/images/profile/education/pic5.jpg">
                        <div class="media-body">
                            <h5 class="mb-0 text-pale-sky">Morese Sharpe <small class="text-muted">( B.A, M.A )</small>
                            </h5>
                            <small class="text-primary mb-0">Available</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-0 pt-2">
                    <div class="text-center">
                        <a href="all-professors.html" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Student List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive recentOrderTable text-nowrap">
                        <table class="table verticle-middle table-responsive-md">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                        </div>
                                    </th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Assigned Coach</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                        </div>
                                    </td>
                                    <td>Angelica Ramos</td>
                                    <td>Ashton Cox</td>
                                    <td>12 August 2021</td>
                                    <td>10:15</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox3">
                                        </div>
                                    </td>
                                    <td>Bradley Greer</td>
                                    <td>Brenden Wagner</td>
                                    <td>11 July 2021</td>
                                    <td>10:00</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox4">
                                        </div>
                                    </td>
                                    <td>Cedric Kelly</td>
                                    <td>Brielle Williamson</td>
                                    <td>10 May 2021</td>
                                    <td>09:45</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox5">
                                        </div>
                                    </td>
                                    <td>Caesar Vance</td>
                                    <td>Herrod Chandler</td>
                                    <td>09 April 2021</td>
                                    <td>09:30</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox6">
                                        </div>
                                    </td>
                                    <td>Rhona Davidson</td>
                                    <td>Sonya Frost</td>
                                    <td>08 March 2021</td>
                                    <td>09:15</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox7">
                                        </div>
                                    </td>
                                    <td>Bradley Greer</td>
                                    <td>Brenden Wagner</td>
                                    <td>11 July 2021</td>
                                    <td>10:00</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gold medal</h4>
                    <small class="text-success"><i class="fa fa-caret-up"></i> 20% High then last mont</small>
                </div>
                <div class="card-body pb-0">
                    <div class="row mt-2">
                        <div class="col">
                            <h6 class="font-weight-normal">Overall Growth</h6>
                            <strong>82.24%</strong>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-normal">Montly</h6>
                            <strong>12.24 %</strong>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-normal">Day</h6>
                            <strong>42.24%</strong>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <span class="peity-line" data-width="100%">6,5,8,4,3,8,4,3,6,5,9,5,8,3,4,8,9,8,5,7</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Silver medal</h4>
                    <small class="text-success"><i class="fa fa-caret-up"></i> 20% High then last mont</small>
                </div>
                <div class="card-body pb-0">
                    <div class="row mt-2">
                        <div class="col">
                            <h6 class="font-weight-normal">Overall Growth</h6>
                            <strong>82.24%</strong>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-normal">Montly</h6>
                            <strong>12.24 %</strong>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-normal">Day</h6>
                            <strong>42.24%</strong>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <span class="peity-line-2" data-width="100%">9,3,7,8,6,7,3,3,7,4,6,8,3,4,7,3,4,7,8,5</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bronze medal</h4>
                    <small class="text-success"><i class="fa fa-caret-up"></i> 20% High then last mont</small>
                </div>
                <div class="card-body pb-0">
                    <div class="row mt-2">
                        <div class="col">
                            <h6 class="font-weight-normal">Overall Growth</h6>
                            <strong>82.24%</strong>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-normal">Montly</h6>
                            <strong>12.24 %</strong>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-normal">Day</h6>
                            <strong>42.24%</strong>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <span class="peity-line-3" data-width="100%">3,8,3,7,8,6,3,4,7,3,7,9,6,3,7,6,7,3,4,2</span>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
            <div class="card profile-tab">
                <div class="card-header">
                    <h4 class="card-title">Salary Status</h4>
                </div>
                <div class="card-body custom-tab-1">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab"
                                class="nav-link pb-2 active show">Professors</a></li>
                        <li class="nav-item"><a href="#about-me" data-bs-toggle="tab"
                                class="nav-link pb-2">Librarian</a></li>
                        <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab"
                                class="nav-link pb-2">Other</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="my-posts" class="tab-pane fade active show">
                            <div class="table-responsive">
                                <table class="table table-responsive-md text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Transaction ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic1.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Angelica Ramos</td>
                                            <td><span class="badge badge-rounded badge-success">Paid</span></td>
                                            <td>12 August 2021</td>
                                            <td>$100</td>
                                            <td>#42317</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic2.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Bradley Greer</td>
                                            <td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
                                            <td>11 July 2021</td>
                                            <td>$200</td>
                                            <td>#54682</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic3.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Cedric Kelly</td>
                                            <td><span class="badge badge-rounded badge-warning">Pending</span></td>
                                            <td>10 May 2021</td>
                                            <td>$400</td>
                                            <td>#57894</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic4.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Caesar Vance</td>
                                            <td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
                                            <td>09 April 2021</td>
                                            <td>$300</td>
                                            <td>#57864</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic5.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Rhona Davidson</td>
                                            <td><span class="badge badge-rounded badge-warning">Pending</span></td>
                                            <td>08 March 2021</td>
                                            <td>$500</td>
                                            <td>#56387</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="about-me" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-responsive-md text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Transaction ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic6.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Angelica Ramos</td>
                                            <td><span class="badge badge-rounded badge-success">Paid</span></td>
                                            <td>12 August 2021</td>
                                            <td>$100</td>
                                            <td>#42317</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic7.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Bradley Greer</td>
                                            <td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
                                            <td>11 July 2021</td>
                                            <td>$200</td>
                                            <td>#54682</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic8.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Cedric Kelly</td>
                                            <td><span class="badge badge-rounded badge-warning">Pending</span></td>
                                            <td>10 May 2021</td>
                                            <td>$400</td>
                                            <td>#57894</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic10.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Caesar Vance</td>
                                            <td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
                                            <td>09 April 2021</td>
                                            <td>$300</td>
                                            <td>#57864</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic9.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Rhona Davidson</td>
                                            <td><span class="badge badge-rounded badge-warning">Pending</span></td>
                                            <td>08 March 2021</td>
                                            <td>$500</td>
                                            <td>#56387</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="profile-settings" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-responsive-md text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Transaction ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic5.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Angelica Ramos</td>
                                            <td><span class="badge badge-rounded badge-success">Paid</span></td>
                                            <td>12 August 2021</td>
                                            <td>$100</td>
                                            <td>#42317</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic8.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Bradley Greer</td>
                                            <td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
                                            <td>11 July 2021</td>
                                            <td>$200</td>
                                            <td>#54682</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic6.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Cedric Kelly</td>
                                            <td><span class="badge badge-rounded badge-warning">Pending</span></td>
                                            <td>10 May 2021</td>
                                            <td>$400</td>
                                            <td>#57894</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic2.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Caesar Vance</td>
                                            <td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
                                            <td>09 April 2021</td>
                                            <td>$300</td>
                                            <td>#57864</td>
                                        </tr>
                                        <tr>
                                            <td><img src="public/images/profile/education/pic7.jpg" class="rounded-circle"
                                                    width="35" alt=""></td>
                                            <td>Rhona Davidson</td>
                                            <td><span class="badge badge-rounded badge-warning">Pending</span></td>
                                            <td>08 March 2021</td>
                                            <td>$500</td>
                                            <td>#56387</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->

        		<!--**********************************
			Footer start
		***********************************-->
                    <div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2024</p>
    </div>
</div>

	</div>
	<script>
        var asset_base_url = 'index-4.html';

    </script>
    <!--**********************************
        Main wrapper end
    ***********************************-->

<!--***********************************-->



	<!--**********************************
		Modal
	***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->


                        <script src="public/vendor/global/global.min.js" type="text/javascript"></script>
                    <script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
                    <script src="public/vendor/svganimation/vivus.min.js" type="text/javascript"></script>
                    <script src="public/vendor/svganimation/svg.animation.js" type="text/javascript"></script>
                                    <script src="public/vendor/raphael/raphael.min.js" type="text/javascript"></script>
                    <script src="public/vendor/morris/morris.min.js" type="text/javascript"></script>
                    <script src="public/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
                    <script src="public/js/dashboard/dashboard-2.js" type="text/javascript"></script>
                                    <script src="public/js/custom.min.js" type="text/javascript"></script>
                    <script src="public/js/dlabnav-init.js" type="text/javascript"></script>
                    <script src="public/js/demo.js" type="text/javascript"></script>
                    <script src="public/js/styleSwitcher.js" type="text/javascript"></script>


</body>

<!-- Mirrored from edumin.dexignlab.com/laravel/demo/index-2 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 10:23:50 GMT -->
</html>