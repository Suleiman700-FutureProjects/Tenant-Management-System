<?php
require_once '../../Config/CONST.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Add Tenant | <?php echo APP_NAME; ?></title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="../../vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="../../css/vendors/simplebar.css">
    <link rel="stylesheet" href="../../vendors/@coreui/icons/css/all.css">
    <!-- Main styles for this application-->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="../../css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>



<!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">-->
    <link rel="stylesheet" href="../../vendors/Bootstrap-Datepicker/css/bootstrap-datepicker.standalone.css">

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
    <link href="../../vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>
<body>
<?php require_once '../../Include/sidebar.php'; ?>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="../../vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button><a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="../../assets/brand/coreui.svg#full"></use>
                </svg></a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="header-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="../../vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="../../vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="../../vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg></a></li>
            </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><span>Home</span>
                    </li>
                    <li class="breadcrumb-item active"><span>Add Tenant</span></li>
                </ol>
            </nav>
        </div>
    </header>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">Add Tenant</h4>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-5">
                        <div class="alert alert-primary text-center" role="alert" id="alert-msg" style="display: none;">
                            <div class="spinner-border spinner-border-sm" role="status" id="spinner" style="display: none;"></div>
                            <span id="text"></span>
                        </div>
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="add-section">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="firstname">First Name <code>*</code></label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-user"></i></div>
                                            <input type="text" class="form-control" id="firstname" placeholder="John">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="lastname">Last Name <code>*</code></label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-user"></i></div>
                                            <input type="text" class="form-control" id="lastname" placeholder="Doe">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-phone"></i></div>
                                            <input type="text" class="form-control" id="phone" placeholder="05200000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-at"></i></div>
                                            <input type="email" class="form-control" id="email" placeholder="john@doe.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="id_card">ID Card</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-badge"></i></div>
                                            <input type="text" class="form-control" id="id_card" placeholder="123456789">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="date">Rental Date</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-calendar"></i></div>
                                            <input class="form-control datepicker" id="rental_date" data-date-format="dd/mm/yyyy" placeholder="18/10/2018">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="time">Rental Time</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-calendar"></i></div>
                                            <input class="form-control" type="text" id="rental_time" placeholder="16:40:00" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="date">Note</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="cil-calendar"></i></div>
                                            <input class="form-control" id="note" rows="3" dir="auto"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('#rental_time').datetimepicker({
                                    format: 'hh:mm:ss',
                                });
                            </script>

                            <hr />
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <button class="btn btn-primary" id="save"><i class="cil-save"></i> Save</button>
                                            <button class="btn btn-light mx-3" id="cancel">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
<!-- CoreUI and necessary plugins-->
<script src="../../vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="../../vendors/simplebar/js/simplebar.min.js"></script>
<!-- Plugins and scripts required by this view-->
<script src="../../vendors/chart.js/js/chart.min.js"></script>
<script src="../../vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../vendors/@coreui/utils/js/coreui-utils.js"></script>
<script src="../../vendors/Bootstrap-Datepicker/js/bootstrap-datepicker.js"></script>
<script src="./add/js/Init.js" type="module"></script>
<!--<script src="./list/js/Init.js" type="module"></script>-->
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            startDate: '-3d',
        });
    });
</script>

</body>
</html>
