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
    <link rel="stylesheet" href="/assets/css/instructor-homepage.css">

    <title>Instructor Homepage</title>
</head>

<body>
    <header>

        <!-----------------------------Navbar -------------------------------------->
        <nav class="navbar navbar-expand fixed-top navbar-expand-lg navbar-dark bg-dark navbar-custom">
            <div class="container-fluid">

				<div class="navbar-brand" href="/application/views/Instructor/homepage.php">
					<img style="max-width:40%" src="/assets/pics/logo/white_logo.png" class="img-responsive" /></div>

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

            <!----------------------- Activities --------------------->
            <div class="col-sm-12 col-md-6 col-xl-3 text-center text-center" id="activity">
                <div class="dashboard-bar" id="activity-status">
                    <h3>?????????????????? ?????????????? ??????</h3>
                    <table class="table" id="activityTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????</th>
                                <th scope="col">????????????</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
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
                        <button type="button" data-toggle="modal" data-target="#newActivityModal" class="modalOpenBtns">
                            ?????? ????????????
                            ????????</button>

                        <button type="button" data-toggle="modal" data-target="#watchAllActivitiesModal"
                            class="modalOpenBtns" onclick="showAllActivities()">
                            ?????? ?????? ??????????????????</button>

                        <button type="button" data-toggle="modal" data-target="#newExpanseModal"
                            class="modalOpenBtns">??????????
                            ??????????</button>

                        <button type="button" data-toggle="modal" data-target="#ExpansesModal" class="modalOpenBtns"
                            onclick="showExpanses()">??????????
                            ????"??
                            ????????????
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
                                <th scope="col">???? ??????????</th>
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
                        <button type="button" data-toggle="modal" data-target="#watchAllMeetingsModal"
                            class="modalOpenBtns" onclick="ShowAllMeeting()">
                            ?????? ?????? ??????????????
                        </button>
                    </div>
                </div>

                <img src="/assets/pics/bnei-akiva/12.jpg">
            </div>


            <!----------------------- the Movement --------------------->
            <div class="col-sm-12 col-md-6 col-xl-3 text-center" id="movement">
                <div class="dashboard-bar" id="next-activity">
                    <h3>?????????? ???????????? ??????????</h3>
                    <table class="table" id="substituteTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????</th>
                                <th scope="col">????????</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>

                <div class="expansion-bar">
                    <botton type="button" class="expandBtn" data-toggle="collapse" data-target="#expandedMovementBar">
                        ?????????? ???????????? <i class="material-icons" title="????????" id="expandIcon">keyboard_arrow_down</i>
                    </botton>
                </div>

                <div id="expandedMovementBar" class="collapse">
                    <div class="expanded-content">
                        <div class="activity-bar" id="new-activity">
                            <button type="button" data-toggle="modal" data-target="#askSubModal" class="modalOpenBtns"
                                onclick="askSub()">???????? ???????????? ??????????????
                            </button>
                        </div>
                    </div>
                </div>

                <img src="/assets/pics/bnei-akiva/1.png">

            </div>


            <!----------------------- Students --------------------->
            <div class="col-sm-12 col-md-6 col-xl-3 text-center" id="d2">
                <div class="dashboard-bar" id="next-meeting">
                    <h3>???????????? ?????????????? ??????</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">?????? ??????</th>
                                <th scope="col">?????????? ??????????</th>
                                <th scope="col">??????????</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">????????????</th>
                                <td class="align-middle" id="memberY"></td>
                                <td class="align-middle" id="tripY"></td>
                                <td class="align-middle" id="insuranceY"></td>
                            </tr>
                            <tr>
                                <th scope="row">???? ????????????</th>
                                <td class="align-middle" id="memberN"></td>
                                <td class="align-middle" id="tripN"></td>
                                <td class="align-middle" id="insuranceN"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="expansion-bar">
                    <botton type="button" class="expandBtn" data-toggle="collapse" data-target="#expandedStudentsBar">
                        ?????????? ????????????<i class="material-icons" title="????????" id="expandIcon">keyboard_arrow_down</i>
                    </botton>
                </div>

                <div id="expandedStudentsBar" class="collapse">
                    <div class="expanded-content">
                        <button type="button" data-toggle="modal" data-target=#newMessageModal class="modalOpenBtns">
                            ?????????? ??????????</button>
                        <button type="button" data-toggle="modal" data-target="#showAllStudentsModal"
                            class="modalOpenBtns" onclick="showAllMembers()">?????????? ?????????? ??????????????</button>
                        <button type="button" data-toggle="modal" data-target="#showPendingMembersModal"
                            class="modalOpenBtns" onclick="showPendingMembers()">???????????? ?????????????? ????????????
                        </button>
                    </div>
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

    <script src="/assets/js/instructor-homepage.js"></script>
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
                    <iframe src="<?php echo site_url('/Guide/expanse_statistics');?>" title="???????????? ?????? ????????????"
                        height="250px" width="400px" scrolling="no"></iframe>
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


<!-----------------------------modal: new expanse -------------------------------------->
<div class="modal fade" id="newExpanseModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????? ?????????? ????????</h3>
                    <p>?????????? ???? ???????? ???????????? ????????????:</p>
                </div>

                <div class="modal-body">
                    <form id="new-expanse" action="/application/views/Instructor/homepage.php" method="post">
                        <div class="input-box">
                            <div class="input-group">
                                <label for="ename">???????? ????????????</label>
                                <input type="text" name="ename">
                            </div>

                            <div class="input-group">
                                <label for="description">??????????:</label>
                                <input type="text" name="description">
                            </div>

                            <div class="input-group">
                                <label for="edate">?????????? ????????????:</label>
                                <input type="date" name="edate">
                            </div>

                            <div class="input-group">
                                <label for="price">???????? ????????????:</label>
                                <input type="number" name="price">
                            </div>

                        </div>

                        <button type="sumbit">??????</button>
                    </form>
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


<!-----------------------------modal: send message -------------------------------------->
<div class="modal fade" id="newMessageModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????? ?????????? ??????????????</h3>
                </div>

                <div class="modal-body">
                    <form id="new-message" method="post">
                        <div class="input-box">
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

<!-----------------------------modal: show pending members -------------------------------------->
<div class="modal fade" id="showPendingMembersModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>???????????? ???????????????? ????????????</h3>
                </div>

                <div class="modal-body">
                    <table class="table" id="pendingMembersTable">
                        <thead>
                            <tr>
                                <th scope="col">????</th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????????</th>
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


<!-----------------------------modal: show all members -------------------------------------->
<div class="modal fade" id="showAllStudentsModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????????? ??????</h3>
                </div>

                <div class="modal-body">
                    <table class="table" id="allStudentsTable">
                        <thead>
                            <tr>
                                <th scope="col">????</th>
                                <th scope="col">??????????</th>
                                <th scope="col">??????????</th>
                                <th scope="col">?????? ??????</th>
                                <th scope="col">?????????? ????????</th>
                                <th scope="col">?????? ??????????</th>
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


<!-----------------------------modal: Start activity -------------------------------------->
<div class="modal fade" id="startActivityModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3><span id="activityHeader">?????????? ??????????????</span></h3>
                </div>

                <div class="modal-body">
                    <form id="manage-activity" data-target="#startActivityModal">
                        <input type="text" id="manage_activity_id" hidden>
                        <div class="input-box">
                            <label>?????????? ????????????:</label>
                            <table class="table" id="membersTable">
                                <thead>
                                    <tr>
                                        <th scope="col">???? ??????????</th>
                                        <th scope="col">??????????</th>
                                        <th scope="col">????????????</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                            <div>
                                <label>?????????? ????????????:</label>
                                <textarea id="after_summary" rows="4" cols="50" maxlength="100"
                                    placeholder="???????????? ?????????? ?????? ????????????..."></textarea>
                            </div>
                            <div>
                                <button onclick="sendSummery(event)">??????</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-----------------------------END modol start activity -------------------------------------->

<!-----------------------------modal: new activity -------------------------------------->
<div class="modal fade" id="newActivityModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3>?????????? ???????????? ????????</h3>
                    <p>?????????? ???? ???????? ?????????????? ??????????:</p>
                </div>

                <div class="modal-body">
                    <form id="new-activity">
                        <div class="input-box">
                            <div class="input-group">
                                <label for="activityName">???? ??????????????:</label>
                                <input type="text" name="name" id="activityName" maxlength="32">
                            </div>

                            <div class="input-group">
                                <label for="activityDesc">?????????? ??????????????:</label>
                                <textarea rows="3" cols="24" maxlength="100"
                                    placeholder="?????????? ?????????? ???????????? ???????? ??????????????..." name="description"
                                    id="activityDesc">
                                    </textarea>

                                <div class="input-group">
                                    <label for="activityDate">?????????? ??????????????:</label>
                                    <input type="date" name="date" id="datepickerActivity">
                                </div>

                                <div class="input-group">
                                    <label for="activityTime">?????? ??????????????:</label>
                                    <input type="time" name="time">
                                </div>
                            </div>

                            <button type="sumbit">??????</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-----------------------------modal: EDIT activity -------------------------------------->
<div class="modal fade" id="editActivityModal">
    <div class="modal-container">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">X</button>
                    <h3><span id="activityHeader">?????????? ????????????</span></h3>
                </div>

                <div class="modal-body">

                    <form id="edit-activity" data-target="#startActivityModal">


                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-----------------------------END modol EDIT activity -------------------------------------->

    <!-----------------------------modal: new activity -------------------------------------->
    <div class="modal fade" id="thisGoesNowhere">
        <div class="modal-container">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">

                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">X</button>
                        <h3>?????????? ???????????? ????????</h3>
                        <p>?????????? ???? ???????? ?????????????? ??????????:</p>
                    </div>

                    <div class="modal-body">
                        <form id="new-activity">
                            <div class="input-box">
                                <div class="input-group">
                                    <label for="activityName">???? ??????????????:</label>
                                    <input type="text" name="name" id="activityName" maxlength="32">
                                </div>

                                <div class="input-group">
                                    <label for="activityDesc">?????????? ??????????????:</label>
                                    <textarea rows="3" cols="24" maxlength="100"
                                        placeholder="?????????? ?????????? ???????????? ???????? ??????????????..." name="description"
                                        id="activityDesc">
                                    </textarea>

                                    <div class="input-group">
                                        <label for="activityDate">?????????? ??????????????:</label>
                                        <input type="date" name="date">
                                    </div>

                                    <div class="input-group">
                                        <label for="activityTime">?????? ??????????????:</label>
                                        <input type="time" name="time">
                                    </div>
                                </div>

                                <button type="sumbit">??????</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>




















</html>
