<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span16">
                <div class="row-fluid">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#lA" data-toggle="tab">Шаг 1. Формы договоров</a></li>
                            <li><a href="#lB" data-toggle="tab">Шаг 2. Приложения к договорам</a></li>
                            <li><a href="#lC" data-toggle="tab">Шаг 3. Операции с договорами</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="lA">
                                <div class="span10">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active"><a href="#urlica">Юридические лица</a></li>
                                        <li><a href="#fizlica">Физические лица</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="urlica">
                                            <legend><i class="icon-list"></i> Форма договора "Юридические лица"</legend>
                                            <div class="form-horizontal">
                                                <fieldset>
                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="contract_number">Номер договора</label>
                                                        <div class="controls">
                                                            <input id="contract_number" name="contract_number" type="text" placeholder="" class="input-small" required="" data-toggle="tooltip" data-placement="top" title="Заполните номер договора">
                                                            <p class="help-block" id="help-block-contract_number" style="display:none;">заполните номер договора</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="contract_date">Дата договора</label>
                                                        <div class="controls">
                                                            <input id="contract_date" name="contract_date" type="text" placeholder="" class="input-small" required="">
                                                            <p class="help-block" id="help-block-contract_date" style="display:none;">Дату договора можно выбрать из календаря</p>
                                                        </div>
                                                    </div>
                                                    <!-- Textarea -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="organization_full_name">Полное наименование организации</label>
                                                        <div class="controls">                     
                                                            <textarea id="organization_full_name" name="organization_full_name" required=""></textarea>
                                                            <p class="help-block" id="help-block-organization_full_name" style="display:none;">Введите полное наименование организации</p>
                                                        </div>
                                                    </div>

                                                    <!-- Textarea -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="organization_short_name">Краткое наименование организации</label>
                                                        <div class="controls">                     
                                                            <textarea id="organization_short_name" name="organization_short_name" required=""></textarea>
                                                            <p class="help-block" id="help-block-organization_short_name" style="display:none;">Введите краткое наименование организации</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="boss_name">ФИО руководителя</label>
                                                        <div class="controls">
                                                            <input id="boss_name" name="boss_name" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-boss_name" style="display:none;">Введите ФИО руководителя</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="boss_work_position">Должность</label>
                                                        <div class="controls">
                                                            <input id="boss_work_position" name="boss_work_position" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-boss_work_position" style="display:none;">Введите должность руководителя</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="basis_name">Действует на основании</label>
                                                        <div class="controls">
                                                            <input id="basis_name" name="basis_name" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-basis_name" style="display:none;">Введите на основании чего действует</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="inn_kpp">ИНН/КПП</label>
                                                        <div class="controls">
                                                            <input id="inn_kpp" name="inn_kpp" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-inn_kpp" style="display:none;">Введите ИНН и КПП через дробь</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="current_account">Расчетный счет</label>
                                                        <div class="controls">
                                                            <input id="current_account" name="current_account" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-current_account" style="display:none;">Введите номер расчетного счета</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="bank">Наименование банка</label>
                                                        <div class="controls">
                                                            <textarea id="bank" name="organization_short_name" required=""></textarea>
                                                            <p class="help-block" id="help-block-bank" style="display:none;">Введите наименование банка</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="correspondent_account">Корреспондентский счет</label>
                                                        <div class="controls">
                                                            <input id="correspondent_account" name="correspondent_account" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-correspondent_account" style="display:none;">Введите номер корреспондентского счета</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="bik">БИК</label>
                                                        <div class="controls">
                                                            <input id="bik" name="bik" type="text" placeholder="" class="input-small" required="">
                                                            <p class="help-block" id="help-block-bik" style="display:none;">Введите номер БИК</p>
                                                        </div>
                                                    </div>
                                                     <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="address">Адрес</label>
                                                        <div class="controls">
                                                            <input id="address" name="address" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-address" style="display:none;">Введите адрес</p>
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="phone_number">Телефон</label>
                                                        <div class="controls">
                                                            <input id="phone_number" name="phone_number" type="text" placeholder="" class="input-small" required="">
                                                            <p class="help-block" id="help-block-phone_number" style="display:none;">Введите номер телефона</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="email">E-mail</label>
                                                        <div class="controls">
                                                            <input id="email" name="email" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-email" style="display:none;">Введите адрес электронной почты</p>
                                                        </div>
                                                    </div>

                                                    <!-- Button (Double) -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="submit_form"></label>
                                                        <div class="controls">
                                                            <button id="submit_form" name="submit_form" class="btn btn-info" onclick="submit_form();">Заполнить договор</button>
                                                            <button id="reset_form" name="reset_form" class="btn btn-warning">Очистить форму</button>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="fizlica">
                                            <legend><i class="icon-list"></i> Форма договора "Физические лица"</legend>
                                            <div class="form-horizontal">
                                                <fieldset>
                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="contract_number">Номер договора</label>
                                                        <div class="controls">
                                                            <input id="contract_number" name="contract_number" type="text" placeholder="" class="input-small" required="" data-toggle="tooltip" data-placement="top" title="Заполните номер договора">
                                                            <p class="help-block" id="help-block-contract_number" style="display:none;">заполните номер договора</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="contract_date">Дата договора</label>
                                                        <div class="controls">
                                                            <input id="contract_date" name="contract_date" type="text" placeholder="" class="input-small" required="">
                                                            <p class="help-block" id="help-block-contract_date" style="display:none;">Дату договора можно выбрать из календаря</p>
                                                        </div>
                                                    </div>
                                                    <!-- Textarea -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="organization_full_name">Полное наименование организации</label>
                                                        <div class="controls">                     
                                                            <textarea id="organization_full_name" name="organization_full_name" required=""></textarea>
                                                            <p class="help-block" id="help-block-organization_full_name" style="display:none;">Введите полное наименование организации</p>
                                                        </div>
                                                    </div>

                                                    <!-- Textarea -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="organization_short_name">Краткое наименование организации</label>
                                                        <div class="controls">                     
                                                            <textarea id="organization_short_name" name="organization_short_name" required=""></textarea>
                                                            <p class="help-block" id="help-block-organization_short_name" style="display:none;">Введите краткое наименование организации</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="boss_name">ФИО руководителя</label>
                                                        <div class="controls">
                                                            <input id="boss_name" name="boss_name" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-boss_name" style="display:none;">Введите ФИО руководителя</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="boss_work_position">Должность</label>
                                                        <div class="controls">
                                                            <input id="boss_work_position" name="boss_work_position" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-boss_work_position" style="display:none;">Введите должность руководителя</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="basis_name">Действует на основании</label>
                                                        <div class="controls">
                                                            <input id="basis_name" name="basis_name" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-basis_name" style="display:none;">Введите на основании чего действует</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="address">Адрес</label>
                                                        <div class="controls">
                                                            <input id="address" name="address" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-address" style="display:none;">Введите адрес</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="inn_kpp">ИНН/КПП</label>
                                                        <div class="controls">
                                                            <input id="inn_kpp" name="inn_kpp" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-inn_kpp" style="display:none;">Введите ИНН и КПП через дробь</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="current_account">Расчетный счет</label>
                                                        <div class="controls">
                                                            <input id="current_account" name="current_account" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-current_account" style="display:none;">Введите номер расчетного счета</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="bank">Наименование банка</label>
                                                        <div class="controls">
                                                            <textarea id="bank" name="organization_short_name" required=""></textarea>
                                                            <p class="help-block" id="help-block-bank" style="display:none;">Введите наименование банка</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="correspondent_account">Корреспондентский счет</label>
                                                        <div class="controls">
                                                            <input id="correspondent_account" name="correspondent_account" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-correspondent_account" style="display:none;">Введите номер корреспондентского счета</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="bik">БИК</label>
                                                        <div class="controls">
                                                            <input id="bik" name="bik" type="text" placeholder="" class="input-small" required="">
                                                            <p class="help-block" id="help-block-bik" style="display:none;">Введите номер БИК</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="phone_number">Телефон</label>
                                                        <div class="controls">
                                                            <input id="phone_number" name="phone_number" type="text" placeholder="" class="input-small" required="">
                                                            <p class="help-block" id="help-block-phone_number" style="display:none;">Введите номер телефона</p>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="email">E-mail</label>
                                                        <div class="controls">
                                                            <input id="email" name="email" type="text" placeholder="" class="input-large" required="">
                                                            <p class="help-block" id="help-block-email" style="display:none;">Введите адрес электронной почты</p>
                                                        </div>
                                                    </div>

                                                    <!-- Button (Double) -->
                                                    <div class="control-group">
                                                        <label class="control-label" for="submit_form"></label>
                                                        <div class="controls">
                                                            <button id="submit_form" name="submit_form" class="btn btn-info" onclick="submit_form();">Заполнить договор</button>
                                                            <button id="reset_form" name="reset_form" class="btn btn-warning">Очистить форму</button>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="lB">
                            <div class="tab-pane active" id="lA1">
                                <div class="span10">
                                    <ul class="nav nav-tabs" id="myTab1">
                                        <li class="active"><a href="#pril_DN">ДН</a></li>
                                        <li><a href="#pril_TK">ТК</a></li>
                                        <li><a href="#pril_VA">ВА</a></li>
                                        <li><a href="#pril_UL">ЮЛ</a></li>
                                        <li><a href="#pril_VF">ВФ</a></li>
                                        <li><a href="#pril_IT">ИТ</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="pril_DN">
                                            <legend><i class="icon-list"></i> Приложение к договору "ДН"</legend>
                                        </div>
                                        <div class="tab-pane" id="pril_TK">
                                            <legend><i class="icon-list"></i> Приложение к договору "ТК"</legend>
                                        </div>
                                        <div class="tab-pane" id="pril_VA">
                                            <legend><i class="icon-list"></i> Приложение к договору "ВА"</legend>
                                        </div>
                                        <div class="tab-pane" id="pril_UL">
                                            <legend><i class="icon-list"></i> Приложение к договору "ЮЛ"</legend>
                                        </div>
                                        <div class="tab-pane" id="pril_VF">
                                            <legend><i class="icon-list"></i> Приложение к договору "ВФ"</legend>
                                        </div>
                                        <div class="tab-pane" id="pril_IT">
                                            <legend><i class="icon-list"></i> Приложение к договору "ИТ"</legend>
                                        </div>
                            </div>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane" id="lC">
                                <p>And this is Section C.</p>
                            </div>
                        </div>
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