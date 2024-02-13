<div class="mycalender_wrap">
    <div class="my_calender">
        <div class="custom_container">
            @if (session()->has('success'))
            <p class="text-success text-center">
                {{ session('success') }}
            </p>
            @endif
            <div class="scroll_area">
                <div class="row1">
                    <div class="calender_topsec">
                        <div class="leftsec">
                            <span class="search_by">This Week</span>
                            <div class="arrow_box">
                                <span class="arrow"><img src="{{ asset(url('assets/images/my-calender/icon_lft_arrow.svg')) }}" alt="icon arrow left" /></span>
                                <span class="arrow"><img src="{{ asset(url('assets/images/my-calender/icon_rgt_arrow.svg')) }}" alt="icon arrow rgt" /></span>
                            </div>
                            <div class="date">9 Oct - 15 Oct 2023</div>
                        </div>
                        <div class="rightsec">
                            <div class="filter_by">
                                <select class="ui search dropdown dropdownmenu select-style" id="selectField">
                                    <option value="1">Day</option>
                                    <option value="2" selected>Week</option>
                                    <option value="3">Month</option>
                                    <option value="4">year</option>
                                </select>
                            </div>
                            <span class="time"><img src="{{ asset(url('assets/images/my-calender/icon_countdown.svg')) }}" alt="icon time" />
                                Yet
                                to
                                Respond</span>
                            <span class="print"><img src="{{ asset(url('assets/images/my-calender/icon_print.svg')) }}" alt="icon print" /></span>
                            <strong class="more_option"><span></span></strong>
                        </div>
                    </div>
                    <div class="calender_content">

                        <!-- week_calender start -->
                        <div class="c_data week_calender d2">
                            <div class="fixed_time">
                                <div class="column">IST <br>04:00</div>
                                <div class="column">09:00</div>
                                <div class="column">10:00</div>
                                <div class="column">11:00</div>
                                <div class="column">12:00</div>
                                <div class="column">13:00</div>
                                <div class="column">14:00</div>
                            </div>
                            <div class="make_booking">
                                <div class="column th"><span>9</span> Sun</div>
                                <div class="column unavailable"><img src="{{ asset(url('assets/images/my-calender/icon_unavailable.svg')) }}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable "><img src="{{ asset(url('assets/images/my-calender/icon_unavailable.svg')) }}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable "><img src="{{ asset(url('assets/images/my-calender/icon_unavailable.svg')) }}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable "><img src="{{ asset(url('assets/images/my-calender/icon_unavailable.svg')) }}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable "><img src="{{ asset(url('assets/images/my-calender/icon_unavailable.svg')) }}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable "><img src="{{ asset(url('assets/images/my-calender/icon_unavailable.svg')) }}" alt="icon unavailable" />Unavailable</div>
                            </div>
                            <div class="make_booking">
                                <div class="column th"><span>10</span> Mon</div>
                                @foreach($timeSlots as $item)
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time pink">{{$item[0] }}</span>
                                        <span class="b_time pink">{{$item[1] }}</span>
                                        @include('livewire.create_event_model')
                                    </div>
                                    <div class="td2">
                                        <span class="b_time pink">{{$item[2] }}</span>
                                        <span class="b_time pink">{{$item[3] }}</span>
                                        @include('livewire.create_event_model')
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="make_booking">
                                <div class="column th"><span>11</span> Tue</div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time yellow">sales constellation</span>
                                        <!-- mcalender_popup start -->
                                        <div class="mcalender_popup">
                                            <div class="top_option">
                                                <span><img src="{{ asset(url('assets/images/my-calender/icon_edit.svg')) }}" alt="icon edit" /></span>
                                                <span><img src="{{ asset(url('assets/images/my-calender/icon_delete.svg')) }}" alt="icon delete" /></span>
                                                <span class="close_btn"><img src="{{ asset(url('assets/images/my-calender/icon_cross.svg')) }}" alt="icon cross" /></span>
                                            </div>
                                            <div class="row_two">
                                                <div class="eventcolor">
                                                    <span class="roundcolor"></span>
                                                </div>
                                                <h3>sales constellation</h3>
                                                <div class="choosecolor">
                                                    <ul>
                                                        <li style="background-color:#6E1588;"></li>
                                                        <li style="background-color:#E1003E;"></li>
                                                        <li style="background-color:#2B99F0;"></li>
                                                        <li style="background-color:#FE2924;"></li>
                                                        <li style="background-color:#A41E90;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content_area">
                                                <div class="top_details">
                                                    <strong class="app_date"><img src="{{ asset(url('assets/images/my-calender/icon_calender.svg')) }}" alt="icon calender" /> Tuesday, 11th October
                                                        2023</strong>
                                                    <strong class="app_time"><img src="{{ asset(url('assets/images/my-calender/icon_watch.svg')) }}" alt="icon watch" />
                                                        11 : 00 Am - 11 : 15 Am <span>Asia /
                                                            Kolkata</span></strong>
                                                    <strong class="app_zoom"><img src="{{ asset(url('assets/images/my-calender/icon_zoom.png')) }}" alt="icon zoom" /> Zoom Platform <span><img src="{{ asset(url('assets/images/my-calender/icon_attachment.svg')) }}" alt="icon attachment" /> Copy Link</span></strong>
                                                    <strong class="app_bymail"><img src="{{ asset(url('assets/images/my-calender/icon_clock.svg')) }}" alt="icon clock" />
                                                        15 min before by Email</strong>
                                                </div>
                                                <div class="attendees">
                                                    <div class="bg_white">Attendees <strong><img src="{{ asset(url('assets/images/my-calender/icon_user.png')) }}" />
                                                            10</strong>
                                                    </div>
                                                </div>
                                                <ul class="user_info">
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>chaitanya@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>sanatariq@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>harpreet.k@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- mcalender_popup end -->
                                    </div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="make_booking">
                                <div class="column th"><span>12</span> Wed</div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time pingdrk">Logo Designing Discussion</span>
                                        <!-- mcalender_popup start -->
                                        <div class="mcalender_popup">
                                            <div class="top_option">
                                                <span><img src="{{ asset(url('assets/images/my-calender/icon_edit.svg')) }}" alt="icon edit" /></span>
                                                <span><img src="{{ asset(url('assets/images/my-calender/icon_delete.svg')) }}" alt="icon delete" /></span>
                                                <span class="close_btn"><img src="{{ asset(url('assets/images/my-calender/icon_cross.svg')) }}" alt="icon cross" /></span>
                                            </div>
                                            <div class="row_two">
                                                <div class="eventcolor">
                                                    <span class="roundcolor"></span>
                                                </div>
                                                <h3>Logo Designing Discussion</h3>
                                                <div class="choosecolor">
                                                    <ul>
                                                        <li style="background-color:#6E1588;"></li>
                                                        <li style="background-color:#E1003E;"></li>
                                                        <li style="background-color:#2B99F0;"></li>
                                                        <li style="background-color:#FE2924;"></li>
                                                        <li style="background-color:#A41E90;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content_area">
                                                <div class="top_details">
                                                    <strong class="app_date"><img src="{{ asset(url('assets/images/my-calender/icon_calender.svg')) }}" alt="icon calender" /> Wednesday, 12th October
                                                        2023</strong>
                                                    <strong class="app_time"><img src="{{ asset(url('assets/images/my-calender/icon_watch.svg')) }}" alt="icon watch" />
                                                        11 : 00 Am - 11 : 15 Am <span>Asia /
                                                            Kolkata</span></strong>
                                                    <strong class="app_zoom"><img src="{{ asset(url('assets/images/my-calender/icon_zoom.png')) }}" alt="icon zoom" /> Zoom Platform <span><img src="{{ asset(url('assets/images/my-calender/icon_attachment.svg')) }}" alt="icon attachment" /> Copy Link</span></strong>
                                                    <strong class="app_bymail"><img src="{{ asset(url('assets/images/my-calender/icon_clock.svg')) }}" alt="icon clock" />
                                                        15 min before by Email</strong>
                                                </div>
                                                <div class="attendees">
                                                    <div class="bg_white">Attendees <strong><img src="{{ asset(url('assets/images/my-calender/icon_user.png')) }}" />
                                                            10</strong>
                                                    </div>
                                                </div>
                                                <ul class="user_info">
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>chaitanya@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>sanatariq@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>harpreet.k@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- mcalender_popup end -->
                                    </div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="make_booking">
                                <div class="column th"><span>13</span> Thu</div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="make_booking">
                                <div class="column th"><span>14</span> Fri</div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2">
                                        <span class="b_time lightprpl full_height">Design Team Metting</span>
                                        <!-- mcalender_popup start -->
                                        <div class="mcalender_popup">
                                            <div class="top_option">
                                                <span><img src="{{ asset(url('assets/images/my-calender/icon_edit.svg')) }}" alt="icon edit" /></span>
                                                <span><img src="{{ asset(url('assets/images/my-calender/icon_delete.svg')) }}" alt="icon delete" /></span>
                                                <span class="close_btn"><img src="{{ asset(url('assets/images/my-calender/icon_cross.svg')) }}" alt="icon cross" /></span>
                                            </div>
                                            <div class="row_two">
                                                <div class="eventcolor">
                                                    <span class="roundcolor"></span>
                                                </div>
                                                <h3>Design Team Metting</h3>
                                                <div class="choosecolor">
                                                    <ul>
                                                        <li style="background-color:#6E1588;"></li>
                                                        <li style="background-color:#E1003E;"></li>
                                                        <li style="background-color:#2B99F0;"></li>
                                                        <li style="background-color:#FE2924;"></li>
                                                        <li style="background-color:#A41E90;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content_area">
                                                <div class="top_details">
                                                    <strong class="app_date"><img src="{{ asset(url('assets/images/my-calender/icon_calender.svg')) }}" alt="icon calender" /> Friday, 14th October
                                                        2023</strong>
                                                    <strong class="app_time"><img src="{{ asset(url('assets/images/my-calender/icon_watch.svg')) }}" alt="icon watch" />
                                                        11 : 00 Am - 11 : 15 Am <span>Asia /
                                                            Kolkata</span></strong>
                                                    <strong class="app_zoom"><img src="{{ asset(url('assets/images/my-calender/icon_zoom.png')) }}" alt="icon zoom" /> Zoom Platform <span><img src="{{ asset(url('assets/images/my-calender/icon_attachment.svg')) }}" alt="icon attachment" /> Copy Link</span></strong>
                                                    <strong class="app_bymail"><img src="{{ asset(url('assets/images/my-calender/icon_clock.svg')) }}" alt="icon clock" />
                                                        15 min before by Email</strong>
                                                </div>
                                                <div class="attendees">
                                                    <div class="bg_white">Attendees <strong><img src="{{ asset(url('assets/images/my-calender/icon_user.png')) }}" />
                                                            10</strong>
                                                    </div>
                                                </div>
                                                <ul class="user_info">
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>chaitanya@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>sanatariq@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset(url('assets/images/my-calender/icon_user2.png')) }}" alt="icon user" />
                                                        <strong>harpreet.k@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- mcalender_popup end -->
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="make_booking">
                                <div class="column th"><span>15</span> Sat</div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1"></div>
                                    <div class="td2"></div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--week_calender end -->


                    </div>
                </div>
            </div>
            <div class="nextbtn_row">
                <div class="slot_selected">
                    <span class="slot_btn">12 time slot selected</span>
                    <div class="slot_popup">
                        <div class="toprow">
                            <strong class="t_heading"><img src="{{ asset(url('assets/images/my-calender/icon_calender.svg')) }}" alt="icon calender" /> Selected Time Slots</strong>
                            <span class="clear_all">CLEAR ALL</span>
                        </div>
                        <div class="slot_time">
                            <strong class="date">MONDAY, OCTOBER 10 2023</strong>
                            <ul>
                                <li>11 : 00 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>11 : 15 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>11 : 30 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>11 : 45 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>12 : 00 PM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>12 : 15 PM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>12 : 30 PM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>12 : 45 PM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                            </ul>
                        </div>
                        <div class="slot_time">
                            <strong class="date">TUESDAY, OCTOBER 10 2023</strong>
                            <ul>
                                <li>11 : 00 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>11 : 15 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>11 : 30 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                                <li>11 : 45 AM <span class="cross"><img src="{{ asset(url('assets/images/my-calender/icon_cross2.svg')) }}" alt="icon cross" /></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="select-event.html" class="next">NEXT</a>
            </div>
        </div>
    </div>
</div>
@section('script')
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
            $(this).closest('.make_booking').find(".mcalender_popup").addClass("shop_popup");
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
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('close-modal', (event) => {
            $(".mcalender_popup").removeClass('show_popup');
        });
    });
</script>
@endsection