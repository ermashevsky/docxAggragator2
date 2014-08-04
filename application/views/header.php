<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Заполнитель договора</title>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
<!--        <script src="/assets/js/bootstrap-button.js"></script>
        <script src="/assets/js/bootstrap-fileupload.js"></script>
        <script src="/assets/js/bootstrap-notify.js"></script>
        <script src="/assets/js/bootbox.min.js"></script>
        <script src="/assets/js/bootstrap-progressbar.js"></script>-->
        <script src="/assets/js/bootstrap-datepicker.js"></script>
        <script src="/assets/js/locales/bootstrap-datepicker.ru.js"></script>

        <link href="/assets/css/plusstrap.css" rel="stylesheet" media="screen">
        <link href="/assets/css/plusstrap-responsive.css" rel="stylesheet">
        <!--        <link href="/assets/css/bootstrap-button.css" rel="stylesheet">
                <link href="/assets/css/bootstrap-fileupload.css" rel="stylesheet">
                <link href="/assets/css/font-awesome.min.css" rel="stylesheet">-->
        <link href="/assets/css/datepicker.css" rel="stylesheet">


        <style>
            #files { font-family: Verdana, sans-serif; font-size: 12px; }
            #files strong { font-size: 13px; }
            #files a { float: left; margin: 0 0 5px 10px; }
            #files ul { list-style: none; padding-left: 0; }
            #files li { width: 100%; font-size: 12px; padding: 5px; border-bottom: 1px solid #CCC; }
            .modal {
                width: 350px;
            }
            #table_block{
                display: block; 
                height:400px;
                width: 100%;
                overflow-y: scroll;
                overflow-x: hidden;
                margin-bottom: 15px;
            }
            table{
                zoom: -4;
            }
        </style>
    </head>
    <script>
        $(function() {
            $("#contract_number").focus(function() {
                $("#help-block-contract_number").css('display', 'inline').fadeOut(3000);
            });

            $("#contract_date").focus(function() {
                $("#help-block-contract_date").css('display', 'inline').fadeOut(3000);
            });

            $("#organization_short_name").focus(function() {
                $("#help-block-organization_short_name").css('display', 'inline').fadeOut(3000);
            });

            $("#organization_full_name").focus(function() {
                $("#help-block-organization_full_name").css('display', 'inline').fadeOut(3000);
            });

            $("#boss_name").focus(function() {
                $("#help-block-boss_name").css('display', 'inline').fadeOut(3000);
            });

            $("#boss_work_position").focus(function() {
                $("#help-block-boss_work_position").css('display', 'inline').fadeOut(3000);
            });

            $("#basis_name").focus(function() {
                $("#help-block-basis_name").css('display', 'inline').fadeOut(3000);
            });

            $("#address").focus(function() {
                $("#help-block-address").css('display', 'inline').fadeOut(3000);
            });

            $("#inn_kpp").focus(function() {
                $("#help-block-inn_kpp").css('display', 'inline').fadeOut(3000);
            });

            $("#current_account").focus(function() {
                $("#help-block-current_account").css('display', 'inline').fadeOut(3000);
            });

            $("#correspondent_account").focus(function() {
                $("#help-block-correspondent_account").css('display', 'inline').fadeOut(3000);
            });

            $("#bik").focus(function() {
                $("#help-block-bik").css('display', 'inline').fadeOut(3000);
            });

            $("#phone_number").focus(function() {
                $("#help-block-phone_number").css('display', 'inline').fadeOut(3000);
            });

            $("#email").focus(function() {
                $("#help-block-email").css('display', 'inline').fadeOut(3000);
            });

            $('#contract_date').datepicker({
                format: "dd.mm.yyyy",
                todayBtn: "linked",
                language: "ru",
                autoclose: true
            });
            $(function() {
                $('#myTab a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
                $('#myTab1 a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
            });

        });
        function submit_form() {

            var contract_number = $("#contract_number").val();
            var contract_date = $("#contract_date").val();
            var organization_short_name = $("#organization_short_name").val();
            var organization_full_name = $("#organization_full_name").val();
            var boss_name = $("#boss_name").val();
            var boss_work_position = $("#boss_work_position").val();
            var basis_name = $("#basis_name").val();
            var address = $("#address").val();
            var inn_kpp = $("#inn_kpp").val();
            var current_account = $("#current_account").val();
            var bank = $("#bank").val();
            var correspondent_account = $("#correspondent_account").val();
            var bik = $("#bik").val();
            var phone_number = $("#phone_number").val();
            var email = $("#email").val();

            $.post('<?php echo site_url('/general/aggregateDocx'); ?>', {'contract_number': contract_number, 'contract_date': contract_date,
                'organization_short_name': organization_short_name, 'organization_full_name': organization_full_name, 'boss_name': boss_name, 'boss_work_position': boss_work_position, 'basis_name': basis_name,
                'address': address, 'inn_kpp': inn_kpp, 'current_account': current_account, 'bank': bank, 'correspondent_account': correspondent_account,
                'bik': bik, 'phone_number': phone_number, 'email': email},
            function(data) {
                console.info(data);
            });

        }
    </script>
    <div class="page-header">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container"><!-- Collapsable nav bar -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Your site name for the upper left corner of the site -->
                    <a class="brand"><i class="icon-list"></i> Заполнитель договоров 1.0</a>

                    <!-- Start of the nav bar content -->
                    <div class="nav-collapse"><!-- Other nav bar content -->
                        <!-- The drop down menu -->
                        <ul class="nav pull-right"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>