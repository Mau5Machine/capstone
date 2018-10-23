<!doctype html>
<html lang="en">

<head>
    <title>
        <?= $pageTitle ?>
    </title>
    <!-- jQuery UI and jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
    <!-- Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
        crossorigin="anonymous">
    <!-- Inject jQuery Theme Here -->
    <link href="https://code.jquery.com/ui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Personal Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body id="<?= $pageWallpaper ?>">
    <div class="nav-wrapper">
        <!-- Start navigation here -->
        <div class="main-nav">
            <nav class="navbar navbar-expand-lg navbar-dark farm-blue-bg">
                <a class="navbar-brand" target="_blank" href="http://farmerstableboca.com"><img src="images/redtruck.png"
                        alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                    aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <!-- menu.php -->
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#orderModal"
                            id="start-btn">Start
                            Order</button>

                        <!-- Modal -->
                        <div class="modal fade" id="orderModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                        <h4 class="modal-title">Choose a Date and Time</h4>
                                    </div>
                                    <!-- Modal body content -->
                                    <div class="modal-body">
                                        <!-- Date and time form starts here -->
                                        <form action="" class="datetime-choose">
                                            <fieldset>
                                                <legend>Order Information</legend>

                                                <!-- First Field asks for a date -->
                                                <div class="form-group">
                                                    <label for="date" class="pr-3">Date to pickup</label>
                                                    <input type="text" class="form-control mr-3" id="date"
                                                        aria-describedby="date choose" placeholder="Choose a Date">
                                                    <small id="dateHelp" class="form-text text-muted">
                                                        <span class="badge badge-danger">Reminder</span>
                                                        Orders must be
                                                        placed at least 48 hours in advance.</small>
                                                </div>

                                                <!-- Second field asks for time -->
                                                <div class="form-group">
                                                    <label for="time" class="pr-3"">Time of Day</label>
                                                    <input type="
                                                        text" class="form-control mr-3" id="time" placeholder="Enter a Time"
                                                        name="time">
                                                        <small id="timeHelp" class="form-text text-muted">
                                                            <span class="badge badge-info">Info</span>
                                                            Orders can
                                                            only
                                                            be picked up between<br>
                                                            8:00 AM and 9:00 PM</small>
                                                </div>

                                                <!-- Third field asks for email address -->
                                                <div class="form-group">
                                                    <label for="email" class="pr-3"">Email Address</label>
                                                    <input type="
                                                        email" class="form-control" id="email" placeholder="Email Address"
                                                        name="email">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Exit</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
        </div>
        </nav>
    </div>
    <!-- End navigation here -->

    <!-- Wrapper for the entire document -->
    <div class="wrapper" id="content">