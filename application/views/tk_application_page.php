<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span16">
                <div class="row-fluid">
                    <h4>ПРИЛОЖЕНИЕ:</h4>
                    <div class="table-responsive">
                        
                    <table class="table table-bordered table-hover" cellpadding="0">
                        <tr>
                            <th>Дата составления</th>
                            <td><input type="date" name="createDate" id="createDate" /></td>
                            <th>Отменяет действие приложения</th>
                            <td>№ ___ от "____"_________20__г. к Заказу №_____/ДН</td>
                        </tr>
                        <tr>
                            <th>Вступает в действие с</th>
                            <td><input type="date" name="createDate" id="createDate"/></td>
                            <th>Действует до</th>
                            <td><input type="date" name="expiredDate" id="expiredDate" /></td>
                        </tr>
                        <tr>
                            <th colspan="4"><h4>ДАННЫЕ ОБ АБОНЕНТЕ * :</h4></th>
                        </tr>
                        <tr>
                        <th>Ф.И.О. контактного лица, должность</th>
                        <td></td>
                        <th>Контактный телефон, email</th>
                        <td></td>
                        </tr>
                        <tr>
                        <th>Адрес для почтовых отправлений*</th>
                        <td></td>
                        <th>Адрес фактического местонахождения</th>
                        <td></td>
                        </tr>
                        <tr>
                        <th>Email для уведомлений и детализаций</th>
                        <td></td>
                        <th rowspan="3" style="vertical-align: middle;"> Способ доставки счета: *</th>
                        <td><input type="checkbox" name="abonentsky" id="abonentsky" /> Абонентский отдел (получение лично)</td>
                        </tr>
                        <tr>
                        <th>Телефон</th>
                        <td></td>
                        <td><input type="checkbox" name="post_address" id="post_address" /> Почтовый адрес</td>
                        </tr>
                        <tr>
                        <th>Факс</th>
                        <td></td>
                        <td><input type="checkbox" name="post_box_ops" id="post_box_ops" /> Почтовый ящик в ОПС</td>
                        </tr>
                        <tr>
                            <th colspan="4"><h4>ДАННЫЕ ОБ УСЛУГЕ:</h4></th>
                        </tr>
                        <tr>
                        <th>Номер</th>
                        <td></td>
                        <th>Количество соединительных линий</th>
                        <td>
                            <?php
                                $n = 0;
                                echo "<select name='lines'>";
                                for($x=0; $x<31; $x++){
                                    echo "<option value='".$n++."'>".$n."</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                        </tr>
                        <tr>
                        <th>Количество необходимых ПИН-кодов для доступа к узлу ПД и ТС</th>
                        <td></td>
                        <th>Количество одновременных соединений с узлом ПД и ТС</th>
                        <td>
                        </td>
                        </tr>
                        <tr>
                        <th>Номера телефонов</th>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
                        </tr>
                        <tr>
                        <th></th>
                        <td></td>
                        <th>Ограничить доступ при достижении задолженности по лицевому счету (с НДС)</th>
                        <td>
                        </td>
                        </tr>
                        <tr>
                            <th colspan="4"><h4>ПЛАТЕЖИ ЗА УСЛУГУ (ЕДИНОВРЕМЕННО):</h4></th>
                        </tr>
                        <tr>
                        <th>Наименование платежей</th>
                        <th>Количество</th>
                        <th>Цена</th>
                        <th>Всего</th>
                        </tr>
                        <tr>
                        <th>Выделение дополнительного абонентского номера</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th>Выделение дополнительной соединительной линии<br/>
                        для обеспечения автоматического обслуживания<br/>входящих
                        вызовов, за соединительную линию
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th>Выбор дополнительного абонентского номера</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                            <th colspan="4"><h4>ДРУГОЕ:</h4></th>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="checkbox" name="matchDates" id="matchDates" /> Дата совпадает с началом действия приложения</td>
                            <th>Фамилия</th>
                            <th>Должность</th>
                        </tr>
                    </table>
                </div>
            </div>
</div>
        </div>
        <div class="row-fluid">
            <div class="span16" id="excel_table_block">

<!--                <legend><i class="icon-eye-open"></i> Просмотр Excel-файла</legend>-->

            </div>
        </div>
    </div>
    <div id="delete_dialog"></div>
</body>
<!--<footer>
        <p>Телекоммуникационная компания <a href="http://dialog64.ru" target="_blank">«Диалог»</a> 2013. | Телефон / факс: (8452) 740-740 E-mail: info@dialog64.ru
                </p>
</footer>-->
</html>