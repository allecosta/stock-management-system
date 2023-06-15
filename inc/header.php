<head>
    <style>
        :root {
            --bg-img: url('<?= validateImage($_settings->info("cover")) ?>');
        }

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?= $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?= $_settings->info('name') ?></title>
    <link rel="icon" href="<?= validateImage($_settings->info('logo')) ?>" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/fontawesome-free/css/all.min.css">
   
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

      <!-- DataTables -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASE_URL ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>dist/css/custom.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/daterangepicker/daterangepicker.css">

    <!-- summernote -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/summernote/summernote-bs4.min.css">

     <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <style>
        @keyframes chartjs-render-animation {
            from {
                opacity: .99 
            } to {
                opacity: 1 
            }
        } 
        
        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms; 
        }
        
        .chartjs-size-monitor, 
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink { 
            position: absolute;
            direction: ltr;
            left: 0; 
            top: 0; 
            right: 0; 
            bottom: 0; 
            overflow: hidden;
            pointer-events: none; 
            visibility: hidden; 
            z-index: -1 
        }
        
        .chartjs-size-monitor-expand>div {
            position: absolute; 
            width: 1000000px; 
            height:1000000px; 
            left:0; 
            top:0 
        }
        
        .chartjs-size-monitor-shrink>div { 
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top:0
        }
    </style>

    <!-- jQuery -->
    <script src="<?= BASE_URL ?>plugins/jquery/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="<?= BASE_URL ?>plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= BASE_URL ?>plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- Toastr -->
    <script src="<?= BASE_URL ?>plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?= BASE_URL ?>';
    </script>
    <script src="<?= BASE_URL ?>dist/js/script.js"></script>
    <script src="<?= BASE_URL ?>assets/js/scripts.js"></script>
    
    <style>
        #main-header {
            position: relative;
            background: rgb(0, 0, 0) !important;
            background: radial-gradient(circle, rgba(0, 0, 0, 0.48503151260504207) 22%, rgba(0, 0, 0, 0, 0.39539565826330536) 49%, rgba(0, 212, 255, 0) 100%) !important;
        }

        #main-header:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(<?= BASE_URL . $_settings->info("cover") ?>);
            background-repeat: no-repeat;
            background-size: cover;
            filter: drop_shodow(0px 7px 6px black);
            z-index: -1;
        }
    </style>
</head>