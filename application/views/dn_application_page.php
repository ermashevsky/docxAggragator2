<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span16">
                <div class="row-fluid">

                    <div class="table-responsive">

                        <table class="table table-bordered" cellpadding="0" id="DNTable">
                            <tr>
                                <th colspan="4"><h4>ПРИЛОЖЕНИЕ:</h4> </th>

                            </tr>
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
                                <th colspan="4" class="success"><h4>ДАННЫЕ ОБ АБОНЕНТЕ * :</h4></th>
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
                                <td><input type="radio" name="shipping invoice" id="abonentsky" /> Абонентский отдел (получение лично)</td>
                            </tr>
                            <tr>
                                <th>Телефон</th>
                                <td></td>
                                <td><input type="radio" name="shipping invoice" id="post_address" checked/> Почтовый адрес</td>
                            </tr>
                            <tr>
                                <th>Факс</th>
                                <td></td>
                                <td><input type="radio" name="shipping invoice" id="post_box_ops" /> Почтовый ящик в ОПС</td>
                            </tr>
                            <tr>
                                <th colspan="4"><h4>ДАННЫЕ ОБ УСЛУГЕ:</h4> </th>

                            </tr>

                            <tr>
                                <th >Номер</th>
                                <th >Количество соединительных линий</th>
                                <th colspan="2"></th>
                            </tr>
                            <tr>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" /></td>
                                <td>
                                    <?php
                                    $n = 0;
                                    echo "<select name='lines'>";
                                    for ($x = 0; $x < 31; $x++) {
                                        echo "<option value='" . $n++ . "'>" . $n . "</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </td>
                                <td colspan="2">
                                    <button class="btn btn-info btn-small" onclick="insRowToTable();
                                            return false;"><i class="icon-white icon-plus-sign"></i> Добавить строку</button>
                                    <button class="btn btn-danger btn-small" onclick="delRowToTable(1, this);
                                            return false;"><i class="icon-white icon-trash"></i> Удалить строку</button>
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered" cellpadding="0" id="DNTableAssortmentList">
                            <tr>
                                <th colspan="4"><h4>ПЛАТЕЖИ ЗА УСЛУГУ (ЕДИНОВРЕМЕННО):</h4></th>
                            </tr>
                            <tr>
                                <th>Наименование платежей</th>
                                <th>Количество</th>
                                <th>Цена</th>
                                <th>Всего</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td style="width: auto;">
                                    <select name="assortment_dn[]" id="assortment_dn[]" onchange="getComboA(this)">
                                        <option></option>
                                        <?php
                                        $assortment_dn = new General();
                                        foreach ($assortment_dn->getAssortmensDN() as $value_dn) {
                                            echo "<option value='" . $value_dn->id . "'>" . $value_dn->payment_name . "</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td><input type="number" name="amount" id="counter" value="1"/></td>
                                <td>
                                    <select name="tariffList[]" id="tariffList[]">

                                    </select>
                                </td>
                                <td></td>
                                <td>
                                    <button class="btn btn-info btn-small" onclick="insRowAssortmentToTable();
                                                return false;"><i class="icon-white icon-plus-sign"></i> Добавить строку</button>
                                    <button class="btn btn-danger btn-small" onclick="delRowToTable(1, this);
                                                return false;"><i class="icon-white icon-trash"></i> Удалить строку</button>
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered" cellpadding="0">
                            <tr>
                                <th colspan="4"><h4>ДРУГОЕ:</h4></th>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="checkbox" name="matchDates" id="matchDates" checked="checked"/> Дата совпадает с началом действия приложения</td>
                                <?php
                                    $managersList = new General();
                                    echo "<td>";
                                    echo "<select name='managers' id='managers' onchange='getComboB(this)'>";
                                    echo "<option></option>";
                                    foreach($managersList ->getManagers() as $manager){
                                        echo "<option value='".$manager->id."'>".$manager->full_name."</option>";
                                    }
                                    echo "</td>";
                                ?>
                                <td>
                                    <select name="jobPos" id="jobPos">

                                    </select>
                                </td>
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