<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="/assets/css/Parent-homepage.css">

    <title>Parent Homepage</title>
</head>

<body>
    <header>

        <!-----------------------------Navbar -------------------------------------->
        <nav class="navbar navbar-expand fixed-top navbar-expand-lg navbar-dark bg-dark navbar-custom">
            <div class="container-fluid">

                <a class="navbar-brand">
                    <img style="max-width:40%" src="/assets/pics/logo/white_logo.png" class="img-responsive" /></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" href="#" type="button" data-toggle="modal"
                                data-target="#notificationsModal" onclick="showMassages()">
                                <i class="far fa-bell"></i>
                                <span class="badge" id="badge"></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" type="button" href="<?php echo site_url();?>/User/logout">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>



                    </ul>

                </div>
            </div>
        </nav>
        <!-----------------------------End Navbar-------------------------------------->

    </header>

    <!---------------------------------- End Header -------------------------------------->
    <div class="container-fluid-reverse horizontal-scrollable">

        <h2>
            ???????? <?php echo $greeting_name ?>
        </h2>
        <div class="orientation-bar"></div>

        <!-----------------------------Submition Notes & Alerts-------------------------------------->
        <span class="submition-alert"></span>

        <!-----------------------------Dashboard data-------------------------------------->
        <div class="row flex-row-reverse flex-nowrap align-items-top" id="row-dashboard">


            <!----------------------- My Kids --------------------->
            <div class="col-sm-12 col-md-6 col-xl-3 text-center" id="movement">
                <div class="dashboard-bar" id="next-activity">
                    <h3>???????????? ?????? ????????????</h3>
                    <table class="table" id="myKidsTable">
                        <thead>
                            <tr>
                                <th scope="col">????</th>
                                <th scope="col">????????</th>
                                <th scope="col">??????</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>

                <div class="expansion-bar">
                    <botton type="button" class="expandBtn" data-toggle="collapse" data-target="#expandedMovementBar">
                        <i class="material-icons" id="expandIcon">keyboard_arrow_up</i>
                    </botton>
                </div>

                <img src="/assets/pics/bnei-akiva/1.png">

            </div>

            <!----------------------- Activities --------------------->
            <div class="col-sm-12 col-md-6 col-xl-3 text-center text-center" id="activity">
                <div class="dashboard-bar" id="activity-status">
                    <h3>?????????????????? ??????????????</h3>
                    <table class="table" id="activityTable">
                        <thead>
                            <tr>
                                <th scope="col">??????????</th>
                                <th scope="col">??????</th>
                                <th scope="col">????????????</th>
                                <th scope="col">???? ????????/??</th>
                                <th scope="col">??????????</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

                <div class="expansion-bar">
                    <botton type="button" class="expandBtn" data-toggle="collapse" data-target="#expandedActivityBar"
                        id="expandedActivityBar-btn">
                        ?????????? ????????????????<i class="material-icons" title="????????" id="expandIcon">keyboard_arrow_down</i>
                    </botton>
                </div>

                <div id="expandedActivityBar" class="collapse">
                    <div class="expanded-content">

                        <button type="button" data-toggle="modal" data-target="#watchAllActivitiesModal"
                            class="modalOpenBtns" onclick="showAllActivities()">
                            ?????? ?????? ??????????????????
                        </button>

                    </div>
                </div>

                <img src="/assets/pics/bnei-akiva/13.jpg">
            </div>

            <!----------------------- Meetings --------------------->
            <div class="col-sm-12 col-md-6 col-xl-3 text-center text-center" id="meetings">
                <div class="dashboard-bar" id="class-status">
                    <h3>?????????????? ?????????????? ??????</h3>
                    <table class="table" id="meetingsTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????</th>
                                <th scope="col">???? ????????????</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <div class="expansion-bar">
                    <botton type="button" class="expandBtn" data-toggle="collapse" data-target="#expandedMeetingsBar">
                        ?????????? ????????????<i class="material-icons" title="????????" id="expandIcon">keyboard_arrow_down</i>
                    </botton>
                </div>

                <div id="expandedMeetingsBar" class="collapse">
                    <div class="expanded-content">
                        <button type="button" data-toggle="modal" data-target="#newMeetingModal" class="modalOpenBtns"
                            onclick="getInstructors('guidesSelector')">
                            ?????????? ?????????? ????????
                        </button>

                        <button type="button" data-toggle="modal" data-target="#watchAllMeetingsModal"
                            class="modalOpenBtns" onclick="ShowAllMeeting()">
                            ?????? ?????? ??????????????
                        </button>

                        <button type="button" data-toggle="modal" data-target=#newMessageModal class="modalOpenBtns"
                            onclick="getInstructors('instructors')">
                            ?????????? ?????????? ????????????
                        </button>
                    </div>
                </div>

                <img src="/assets/pics/bnei-akiva/12.jpg">
            </div>



            <!----------------------- Payments --------------------->
            <div class="col-sm-12 col-md-6 col-xl-3 text-center" id="d2">
                <div class="dashboard-bar" id="next-meeting">
                    <h3>??????????????</h3>
                    <table class="table" id="kidsPaymentsTable">
                        <thead>
                            <tr>
                                <th scope="col">???? ??????????</th>
                                <th scope="col">?????? ??????</th>
                                <th scope="col">??????????</th>
                                <th scope="col">?????????? ??????????</th>
                                <th scope="col">??????????</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <div class="expansion-bar">
                    <botton type="button" class="expandBtn" data-toggle="collapse" data-target="#expandedStudentsBar">
                        <i class="material-icons" title="????????" id="expandIcon">keyboard_arrow_up</i>
                    </botton>
                </div>

                <img src="/assets/pics/bnei-akiva/4.jpg">
            </div>

        </div>

    </div>


    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="/assets/js/Parent-homepage.js"></script>
</body>




<!-----------------------------modal: new sub request -------------------------------------->
<div class="modal fade" id="askSubModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????? ?????????????? ?????????????? ????????????</h3>
                </div>

                <div class="modal-body">
                    <table class="table" id="askSubTable">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????</th>
                                <th scope="col">????????????</th>
                                <th scope="col">???????? ??????????</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

<!-----------------------------END modol watch all activities -------------------------------------->

<div class="modal fade" id="payModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????? ??????????</h3>
                </div>

                <div class="modal-body">
                    <h3>?????????? ?????????? ????????: <span id="payTitle"></span></h3>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="paypalForm">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="business" value="iliashifrin@gmail.com">
                        <input type="hidden" name="lc" value="IL">
                        <input type="hidden" name="button_subtype" value="services">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="currency_code" value="ILS">
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                        <table>
                            <tr>
                                <td><input type="hidden" name="on0" value="pay for">?????????? ????????:</td>
                            </tr>
                            <tr>
                                <td><select name="os0" id="paymentSelector">

                                    </select> </td>
                            </tr>
                        </table>
                        <input type="hidden" name="option_select0" value="membership">
                        <input type="hidden" name="option_amount0" value="0.10">
                        <input type="hidden" name="option_select1" value="insurance">
                        <input type="hidden" name="option_amount1" value="0.20">
                        <input type="hidden" name="option_select2" value="trips">
                        <input type="hidden" name="option_amount2" value="0.30">
                        <input type="hidden" name="option_index" value="0">
                        <input type="hidden" name="email" id="kidEmail">
                        <div id="payBtnDiv">
                            <input type="image" src="https://www.paypalobjects.com/he_IL/IL/i/btn/btn_paynowCC_LG.gif"
                                name="submit" alt="PayPal - ???????? ???????? ?????????????? ???????? ???????? ????????????????!"
                                onclick="paypalClick()">
                            <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </div>
                    </form>
                    <p>???????? ????: ?????????? ???????????? ???????????? ?????????? ?????? ?????????? ??????! ?????? ?????????? ???????????? ???????????? ????????. ???? ???? - ?????????? ??????
                        ?????????? ???????? ???? 10 ???????????? ?????????? ???????? ???? ???????? ???????????? ?????????? ?????? ?????????????? ???? ????????????????.</p>


                </div>
            </div>
        </div>
    </div>
</div>




<!-----------------------------modal: show all expanses -------------------------------------->
<div class="modal fade" id="ExpansesModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">

            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>????????????</h3>
                </div>

                <div class="modal-body">
                    <table class="table" id="expansesTable">
                        <thead>
                            <tr>
                                <th scope="col">??????????</th>
                                <th scope="col">???????? ??????????</th>
                                <th scope="col">??????????</th>
                                <th scope="col">????????</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

<!-----------------------------END modal: new expanse -------------------------------------->


<!-----------------------------modal: show all activities -------------------------------------->
<div class="modal fade" id="watchAllActivitiesModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????????????? ????????</h3>
                </div>

                <div class="modal-body">
                    <table class="table" id="allActivitiesTable">
                        <thead>
                            <tr>
                                <th scope="col">??????????</th>
                                <th scope="col">??????</th>
                                <th scope="col">????????????</th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????????</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

<!-----------------------------END modol watch all activities -------------------------------------->


<!-----------------------------modal: health declare -------------------------------------------------->
<div class="modal fade" id="healthDeclareModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????? ????????????</h3>
                </div>

                <div class="modal-body">
                    <p> ?????? ??????????/?? ???????? ???? ???????? ???????????? <span id="dateSpn"></span><br></p>

                    <p> <span id="nameSpn1"></span> ????/?? ????????, ????????/?? ??????????/?? ?????? ???????? ???????? ??????????.<br>
                        ?????????? ?????? ??<span id="nameSpn2"></span> ?????????? ???? ?????? ????????/?? ???????? ??-38 ?????????? ????????????.<br>
                        <span id="nameSpn3"></span> ???? ????/?? ???????? ???? ???????? ???????????? ?????????? ?????????? ???????????????? ????????????????.
                    </p>

                    <div>
                        <input type="checkbox" id="declare" name="declare">
                        <label for="declare">???????????? ???????? ???? ?????? ??????????/?? ???? ???? ?????????? ????"?? ????????</label>
                    </div>

                    <div>
                        <form id="healthDeclareForm">
                            <input type="text" name="activity_id" id="activity_id_holder" hidden>
                            <input type="text" name="email" id="email_holder" hidden>
                            <button type="button" id="sendHealthDeclareBtn" onclick="sendHealthDeclare()" disabled>??????
                                ??????????</button>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<!-----------------------------modal: watch all meetings -------------------------------------->
<div class="modal fade" id="watchAllMeetingsModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>???? ?????????????? ??????</h3>
                </div>

                <div class="modal-body">
                    <table class="table" id="AllMeetingsTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????</th>
                                <th scope="col">???? ??????????</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

<!-----------------------------END modol watch all meetings -------------------------------------->


<!-----------------------------modal: read notifications -------------------------------------->
<div class="modal fade" id="notificationsModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>????????????</h3>
                </div>

                <div class="modal-body">
                    <div class="messages-container" id="messages-container">
                    </div>
                    <div> <button type="button" id="showAllMessagesBTN" onclick="showMassages('true')">?????? ??????
                            ??????????????</button></div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-----------------------------END modal: read notifications -------------------------------------->



<!-----------------------------modal: send message to guide -------------------------------------->
<div class="modal fade" id="newMessageModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????? ?????????? ????????????</h3>
                </div>

                <div class="modal-body">
                    <form id="new-message" method="post">
                        <div class="input-box">

                            <div class="input-group" id="instructorSelectorDiv">
                                <label for="instructors">???????? ????????????:</label>
                                <select name="recipient_email" id="instructors" form="new-message">

                                </select>
                            </div>

                            <div class="input-group">
                                <label for="MessageHeadline">???????? ????????????:</label>
                                <input type="text" name="subject">
                            </div>
                            <textarea name="content" form="new-message" rows="4" cols="50"
                                placeholder="???????????? ?????? ???? ??????????????..."></textarea>
                        </div>
                        <button onclick="sendMessage()"><span class="spinner-border spinner-border-sm" role="status"
                                aria-hidden="true" style="margin-left:0.5em" id="msgSpinner" hidden></span>??????</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-----------------------------END modal: send message -------------------------------------->

<!-----------------------------modal: send new meeting request to guide -------------------------------------->
<div class="modal fade" id="newMeetingModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????? ?????????? ????????</h3>
                </div>

                <div class="modal-body">
                    <form id="new-meeting" method="post">
                        <div class="input-box">

                            <div class="input-group" id="instructorSelectorDiv">
                                <label for="guidesSelector">???????? ????????????:</label>
                                <select name="guide_email" id="guidesSelector" form="new-meeting"></select>
                            </div>


                            <div class="input-group">
                                <label for="MessageHeadline">???????? ????????????:</label>
                                <input type="text" name="subject">
                            </div>

                            <div class="input-group">
                                <label for="datepicker">?????????? ????????????</label>
                                <input type="date" name="date" id="datepicker">
                            </div>

                            <div class="input-group">
                                <label for="time">?????? ????????????</label>
                                <input type="time" name="time">
                            </div>

                            <button onclick="sendMeeting()">??????</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-----------------------------END modal: send message -------------------------------------->





</html>