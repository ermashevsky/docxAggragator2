<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Господин Заполнитель 1.0</title>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
        <script src="/assets/js/bootstrap-button.js"></script>
        <script src="/assets/js/bootstrap-fileupload.js"></script>
        <script src="/assets/js/bootstrap-notify.js"></script>
        <script src="/assets/js/bootbox.js"></script>
        <script src="/assets/js/bootstrap-progressbar.js"></script>
        <script src="/assets/js/bootstrap-datepicker.js"></script>
        <script src="/assets/js/locales/bootstrap-datepicker.ru.js"></script>
        <script src="/assets/js/pnotify.core.js"></script>
        
        <link href="/assets/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/assets/css/bootstrap-button.css" rel="stylesheet">
        <link href="/assets/css/bootstrap-fileupload.css" rel="stylesheet">
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/css/datepicker.css" rel="stylesheet">
        <link href="/assets/css/pnotify.core.css" media="all" rel="stylesheet"/>


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
            
            $("#post_zipcode").focus(function() {
                $("#help-block-post_zipcode").css('display', 'inline').fadeOut(3000);
            });
            $("#post_city").focus(function() {
                $("#help-block-post_city").css('display', 'inline').fadeOut(3000);
            });
            $("#post_street").focus(function() {
                $("#help-block-post_street").css('display', 'inline').fadeOut(3000);
            });
            $("#post_house").focus(function() {
                $("#help-block-post_house").css('display', 'inline').fadeOut(3000);
            });
            $("#post_house_block").focus(function() {
                $("#help-block-post_house_block").css('display', 'inline').fadeOut(3000);
            });
            $("#post_office").focus(function() {
                $("#help-block-post_office").css('display', 'inline').fadeOut(3000);
            });
            $("#post_box").focus(function() {
                $("#help-block-post_box").css('display', 'inline').fadeOut(3000);
            });
            $("#post_appartment").focus(function() {
                $("#help-block-post_appartment").css('display', 'inline').fadeOut(3000);
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

        function getComboA(sel) {
            var value = sel.value;
            console.info(value);
            $.post('<?php echo site_url('/general/getTariffList'); ?>', {'id_assortment': value},
            function(data) {
                console.info(data);
                $('#tariffList').empty();
                $.each(data, function(key, value) {
                    $('#tariffList')
                            .append($("<option></option>")
                                    .attr("value", key)
                                    .text(value.tariff_name));
                });
            }, 'json');

        }

        function getComboB(sel) {
            var value = sel.value;
            console.info(value);
            $.post('<?php echo site_url('/general/getPosition'); ?>', {'id': value},
            function(data) {
                console.info(data);
                $('#jobPos').empty();
                $.each(data, function(key, value) {
                    $('#jobPos')
                            .append($("<option></option>")
                                    .attr("value", key)
                                    .text(value.job_position));
                });
            }, 'json');

        }

        function insRowToTable() {
            $('#DNTable tbody>tr:last').clone(true).insertAfter('#DNTable tbody>tr:last');
        }

        function insRowAssortmentToTable() {
            $('#DNTableAssortmentList tbody>tr:last').clone(true).insertAfter('#DNTableAssortmentList tbody>tr:last');
        }

        function delRowToTable(customerId, element) {

            var c = confirm('Вы действительно хотите удалить строку?');
            if (c) {
                $(element).closest('tr').find('td').fadeOut('slow',
                        function(here) {
                            $(here).closest("tr").remove();
                        });
            }
            return false;

        }

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
            
            var post_zipcode = $("#post_zipcode").val();
            var post_city = $("#post_city").val();
            var post_street = $("#post_street").val();
            var post_house = $("#post_house").val();
            var post_house_block = $("#post_house_block").val();
            var post_office = $("#post_office").val();
            var post_box = $("#post_box").val();
            var post_appartment = $("#post_appartment").val();

            $.post('<?php echo site_url('/general/aggregateDocx'); ?>', {'contract_number': contract_number, 'contract_date': contract_date,
                'organization_short_name': organization_short_name, 'organization_full_name': organization_full_name, 'boss_name': boss_name, 'boss_work_position': boss_work_position, 'basis_name': basis_name,
                'address': address, 'inn_kpp': inn_kpp, 'current_account': current_account, 'bank': bank, 'correspondent_account': correspondent_account,
                'bik': bik, 'phone_number': phone_number, 'email': email, 'post_zipcode':post_zipcode, 'post_city':post_city, 'post_street':post_street,
                'post_house':post_house, 'post_house_block':post_house_block, 'post_office':post_office, 'post_box':post_box, 'post_appartment':post_appartment},
            function(data) {

                var message = "Документ успешно сохранен под именем "+data;
                notify(message,"success");
                setTimeout("document.location.href='http://docxaggregate.lcl/general/fileList'", 5000);
                
            }, 'json');

        }

        function notify(message, type) {
            var data = new PNotify({
                title: false,
                text: message,
                styling: "bootstrap3",
                type: type,
                delay: 8000,
                shadow: true,
                width: "500px",
                insert_brs: true,
                addclass: "brand"
            });
        }
        
        function sendMail(attachment,email){
            if(!email){
                bootbox.dialog({
                    message: "<label for='email' >Введите адрес электронной почты <br/><input type='text' name='email' id='email_value' value='' /></label>",
                    title: "Отправка файла на почту",
                    buttons: {
                        success: {
                            label: "OK",
                            className: "btn-success btn-small",
                            callback: function() {
                                var mail = $('#email_value').val();

                                if(mail){
                                $.post('<?php echo site_url('/general/sendMail'); ?>', {'attachment': attachment,'mail':mail},
                                function(data) {
                                    notify("Письмо отправлено. Проверьте адрес электронной почты "+mail+"","info");
                                },'json');
                                //window.location.reload();
                            }else{
                                notify("Письмо отправлено небыло. Введите адрес электронной почты","error");
                            }
                            
                            }
                        },
                        danger: {
                            label: "Отмена",
                            className: "btn-danger btn-small",
                            callback: function() {
                                bootbox.hideAll();
                                
                            }
                        }
                    }
                });
            }
        }
        
        function deleteFile(file, name){
        
            bootbox.dialog({
                    message: "Вы действительно хотите удалить файл?",
                    title: "Удаление файла",
                    buttons: {
                        success: {
                            label: "Да",
                            className: "btn-success btn-small",
                            callback: function() {
                            $.post('<?php echo site_url('/general/deleteFile'); ?>', {'file': file},
                                function(data) {
                                    notify("Файл "+name+" удален","success");
                                    setTimeout("document.location.reload()", 3000);
                                });
                            }
                        },
                        danger: {
                            label: "Отмена",
                            className: "btn-danger btn-small",
                            callback: function() {
                                bootbox.hideAll();
                                
                            }
                        }
                    }
                });
        }
    </script>
</head>
<div class="page-header">

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid pull-left">
                <a class="brand"><i class="icon-pencil"></i> Господин Заполнитель 1.0</a>
            </div>
            <div class="container-fluid pull-right">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse">

                    <ul class="nav">
                        <li><a>Здравствуйте, <?php echo $user->first_name; ?></a></li>
                        <li><a href="/"><i class="icon-home icon-white"> </i>Главная</a></li>
                        <li><a href="/general/fileList"><i class="icon-home icon-list-alt"> </i>Список договоров</a></li>
                        <?php
                            if ($this->ion_auth->is_admin()) {
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-white"> </i>Админка<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/auth/"><i class="icon-user icon-white"> </i>Пользователи</a></li>
                                    </ul>
                                </li>          
                            <?php } ?>          

                        <li class="pull-right"><a href="/auth/logout"><i class="icon-arrow-right icon-white"> </i>Выход</a></li>

                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->
</div>