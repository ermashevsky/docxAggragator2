<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span16">
                <div class="row-fluid">
                    <legend><i class="icon-tasks"></i> Форма договора "Юридические лица"</legend>
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
                                    <p class="help-block" id="help-block-boss_name" style="display:none;">Введите ФИО руководителя полностью (<i>Иванов Иван Иванович</i>)</p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="boss_work_position">Должность</label>
                                <div class="controls">
                                    <input id="boss_work_position" name="boss_work_position" type="text" placeholder="" class="input-large" required="">
                                    <p class="help-block" id="help-block-boss_work_position" style="display:none;">Введите должность руководителя (<i>Директор</i>)</p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="basis_name">Действует на основании</label>
                                <div class="controls">
                                    <input id="basis_name" name="basis_name" type="text" placeholder="" class="input-large" required="">
                                    <p class="help-block" id="help-block-basis_name" style="display:none;">Введите на основании чего действует (<i>Устава, Доверенности и прочее</i>)</p>
                                </div>
                            </div>

                            <div class="accordion"id="accordion2">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                            Банковские реквизиты
                                        </a>
                                    </div>
                                    <div id="collapseOne"class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="inn_kpp">ИНН/КПП</label>
                                                <div class="controls">
                                                    <input id="inn_kpp" name="inn_kpp" type="text" placeholder="" class="input-large" maxlength="20" pattern="^\d[0-9]?.*" required="">
                                                    <p class="help-block" id="help-block-inn_kpp" style="display:none;">Введите ИНН и КПП через дробь</p>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="current_account">Расчетный счет</label>
                                                <div class="controls">
                                                    <input id="current_account" name="current_account" type="text" placeholder="" class="input-large" maxlength="20" pattern="^[0-9]{20}" required="">
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
                                                    <input id="correspondent_account" name="correspondent_account" type="text" placeholder="" class="input-large" maxlength="20" pattern="^[ 0-9]{20}" required="">
                                                    <p class="help-block" id="help-block-correspondent_account" style="display:none;">Введите номер корреспондентского счета</p>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="bik">БИК</label>
                                                <div class="controls">
                                                    <input id="bik" name="bik" type="text" placeholder="" class="input-small" maxlength="9" pattern="^[0-9]{9}" required="">
                                                    <p class="help-block" id="help-block-bik" style="display:none;">Введите номер БИК</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                            Юридический адрес
                                        </a>
                                    </div>
                                    <div id="collapseTwo"class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="address">Адрес</label>
                                                <div class="controls">
                                                    <input id="address" name="address" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-address" style="display:none;">Введите юридический адрес</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle"data-toggle="collapse"data-parent="#accordion2" href="#collapseThree">
                                            Почтовый адрес
                                        </a>
                                    </div>
                                    <div id="collapseThree"class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_zipcode">Индекс</label>
                                                <div class="controls">
                                                    <input id="post_zipcode" name="post_zipcode" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_zipcode" style="display:none;">Введите почтовый индекс</p>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_city">Город</label>
                                                <div class="controls">
                                                    <input id="post_city" name="post_city" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_city" style="display:none;">Введите название города</p>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_street">Улица</label>
                                                <div class="controls">
                                                    <input id="post_street" name="post_street" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_street" style="display:none;">Введите название улицы</p>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_house">Дом</label>
                                                <div class="controls">
                                                    <input id="post_house" name="post_house" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_house" style="display:none;">Введите номер дома</p>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_house_block">Корпус</label>
                                                <div class="controls">
                                                    <input id="post_house_block" name="post_house_block" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_house_block" style="display:none;">Введите номер корпуса</p>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_office">Офис</label>
                                                <div class="controls">
                                                    <input id="post_office" name="post_office" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_office" style="display:none;">Введите номер офиса</p>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_box">Аб.ящик</label>
                                                <div class="controls">
                                                    <input id="post_box" name="post_box" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_box" style="display:none;">Введите номер абонентского ящика</p>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="post_appartment">Квартира</label>
                                                <div class="controls">
                                                    <input id="post_appartment" name="post_appartment" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-post_appartment" style="display:none;">Введите номер квартиры</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle"data-toggle="collapse"data-parent="#accordion2" href="#collapseFour">
                                            Контактные данные
                                        </a>
                                    </div>
                                    <div id="collapseFour"class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for="contact_person">ФИО контактного лица</label>
                                                <div class="controls">
                                                    <input id="contact_person" name="contact_person" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-contact_person" style="display:none;">Введите ФИО контактного лица</p>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                                <label class="control-label" for=job_contact_person">Должность контактного лица</label>
                                                <div class="controls">
                                                    <input id="job_contact_person" name="job_contact_person" type="text" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-job_contact_person" style="display:none;">Введите должность контактного лица</p>
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
                                                    <input id="email" name="email" type="email" placeholder="" class="input-large" required="">
                                                    <p class="help-block" id="help-block-email" style="display:none;">Введите адрес электронной почты</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
</body>
</html>