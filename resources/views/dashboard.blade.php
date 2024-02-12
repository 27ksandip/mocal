<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moCal Dashboard</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href="{{ asset(url('assets/js/bootstrap-4.4.1.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('assets/css/header.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('assets/css/menu.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('assets/js/bootstrap-select.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('assets/css/common.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('assets/css/main.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('assets/css/my-calender/my-calender.css')) }}">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset(url('assets/js/owl.carousel.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('assets/js/owl.theme.default.min.css')) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" />
</head>

<body>
    <!-- menu start -->
    <div class="menu-sect">
        <div class="main d-flex flex-column">
            <div class="logo">
                <img src="{{ asset(url('assets/images/menu/logo-sm.svg')) }}" class="small" alt="" />
                <img src="{{ asset(url('assets/images/mocal-logo.svg')) }}" class="big" alt="" />
            </div>
            <ul class="flex-column mb-auto">
                <li>
                    <div class="list">
                        <img src="{{ asset(url('assets/images/menu/my-events.svg')) }}" alt="" />
                        <div class="mnu-text">
                            <a href="#" class="ttl">My Events</a>
                            <a href="#" class="sub-ttl">Create an Event</a>
                            <a href="#" class="sub-ttl">Create a Quick Event</a>
                            <a href="#" class="sub-ttl">My all Events </a>
                            <a href="#" class="sub-ttl">All Quick Events</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <img src="{{ asset(url('assets/images/menu/my-calendar.svg')) }}" alt="" />
                        <div class="mnu-text">
                            <a href="#" class="ttl">My Calendar</a>
                            <a href="#" class="sub-ttl">My Calendar</a>
                            <a href="#" class="sub-ttl">Upcoming Meetings</a>
                            <a href="#" class="sub-ttl">Team Meetings</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <img src="{{ asset(url('assets/images/menu/website-meeting.svg')) }}" alt="" />
                        <div class="mnu-text">
                            <a href="#" class="ttl">Website Meeting</a>
                            <a href="#" class="sub-ttl">Upcoming Meetings</a>
                            <a href="#" class="sub-ttl">All Website Meetings</a>
                            <a href="#" class="sub-ttl">Assigned Meetings</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <img src="{{ asset(url('assets/images/menu/settings.svg')) }}" alt="" />
                        <div class="mnu-text">
                            <a href="#" class="ttl">Settings</a>
                            <a href="#" class="sub-ttl">Calendar Settings</a>
                            <a href="#" class="sub-ttl">Domain Settings</a>
                            <a href="#" class="sub-ttl">Brand Settings</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <img src="{{ asset(url('assets/images/menu/team.svg')) }}" alt="" />
                        <div class="mnu-text">
                            <a href="#" class="ttl">Team</a>
                            <a href="#" class="sub-ttl">All Team</a>
                            <a href="#" class="sub-ttl">Add Team Member</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <img src="{{ asset(url('assets/images/menu/my-account.svg')) }}" alt="" />
                        <div class="mnu-text">
                            <a href="#" class="ttl">My Account</a>
                            <a href="#" class="sub-ttl">Billing</a>
                            <a href="#" class="sub-ttl">Profile</a>
                            <a href="#" class="sub-ttl">Subscription</a>
                            <a href="#" class="sub-ttl">Become an Ambassador</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <img src="{{ asset(url('assets/images/menu/add-on.svg')) }}" alt="" />
                        <div class="mnu-text">
                            <a href="#" class="ttl">Add On</a>
                            <a href="#" class="sub-ttl">moProPulse</a>
                            <a href="#" class="sub-ttl">moProHR</a>
                            <a href="#" class="sub-ttl">moMaster CRM</a>
                            <a href="#" class="sub-ttl">moA/curate</a>
                            <a href="#" class="sub-ttl">moLeadMagnet</a>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="bottom flex-column" style="display: none;">
                <li>
                    <div class="list">
                        <a href="#" class="ttl"><img src="{{ asset(url('assets/images/menu/subscription.svg')) }}" class="mtm4" alt="" />
                            <span>Subscription</span></a>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <a href="#" class="ttl"><img src="{{ asset(url('assets/images/menu/help-circle.svg')) }}" class="mtm4" alt="" /> <span>Help
                                & Support</span></a>
                    </div>
                </li>
                <li>
                    <div class="list">
                        <a href="#" class="ttl"><img src="{{ asset(url('assets/images/menu/ind-flag.svg')) }}" class="mtm4" alt="" />
                            <span>INDIA</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- menu end -->


    <!-- calender start -->
    @livewire('calender')
    <!-- calender end -->

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
<script>
    $(".dropdownmenu").dropdown();
    $("#clientvalue").change(function() {
        if ($(this).val().length === 0) {
            //  alert('yes');
            //$(this).parent('.selectWrap').siblings('.profileSection').addClass('extya');
            $(".profileSection").css("display", "none");
        } else {
            //$(this).parent('.selectWrap').siblings('.profileSection').removeClass('extya');
            //alert('no');
            $(".profileSection").css("display", "block");
        }
    });


    $(document).ready(function() {
        $(".my_calender .eventcolor").click(function() {
            $(".choosecolor").slideToggle();
        });

        $(".b_time").siblings(".mcalender_popup").parent("").children(".b_time").addClass("show");
        $(".my_calender .b_time").click(function() {
            $(this).siblings(".mcalender_popup").addClass("show_popup");
        });

        $(".mcalender_popup .close_btn").click(function() {
            $(this).closest(".mcalender_popup").removeClass("show_popup");
        });

        $(".make_booking .b_time").click(function() {
            $(this).closest(".mcalender_popup").addClass("shop_popup");
        })
    });
</script>
<script>
    $(function() {
        $('.c_data').hide();
        $('.d2').show();
        $('#selectField').on("change", function() {
            $('.c_data').hide();
            $('.d' + $(this).val()).show();
        }).val(2);
    });

    $(document).ready(function() {
        $(".slot_selected .slot_btn").click(function() {
            $(this).toggleClass("active");
            $(".slot_selected .slot_popup").toggleClass("show");
        });

        $('.my_calender .column .b_time').click(function() {
            $(this).css("opacity", "1");
        });

        $('.slot_popup li .cross').click(function() {
            $(this).parent("li").remove();
        });
        $('.my_calender .slot_popup .clear_all').click(function() {
            $(this).closest(".slot_popup").find(".slot_time").remove();
        });

    });
</script>