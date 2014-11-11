<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span10">
                <div class="row-fluid">
                    <legend><i class="icon-list"></i> Список договоров</legend>
                    <table class='table table-bordered table-hover' cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя файла</th>
                                <th>Дата/Время</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $structure = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/uploads/' . $user->username . '/';
                            date_default_timezone_set('Europe/Moscow');
                            if (!file_exists($structure)) {
                                mkdir($structure, 0777, true);
                            }

                            $path = 'uploads/' . $user->username . '/';
                            $structure = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/uploads/' . $user->username . '/';

                            $dir = new DirectoryIterator($path);
                            $n = 1;
                            if (is_dir($path)) {

                                $FoundFiles = array();

                                foreach (new DirectoryIterator($path) as $file) {

                                    if ($file->isDot())
                                        continue;

                                    $fileName = $file->getFilename();
                                    $date = $file->getMTime();

                                    $filetypes = array(
                                        "docx",
                                        "DOCX"
                                    );

                                    $filetype = pathinfo($file, PATHINFO_EXTENSION);
                                    if (in_array(strtolower($filetype), $filetypes)) {

                                        /**
                                         *  Place into an Array
                                         * */
                                        $FoundFiles[] = array(
                                            "fileName" => $fileName,
                                            "date" => $date
                                        );
                                        arsort($FoundFiles);

                                        /**
                                         *   After Sorting 
                                         * */
                                    }
                                }

                                foreach ($FoundFiles as $file):

                                    echo '<tr>'
                                    . '<td>' . $n++ . '</td><td>' . $file["fileName"] . '</td>'
                                    . '<td>' . date("d.m.Y H:i:s", $file["date"]) . '</td>';
                                    echo "<td><a href='#' class='btn btn-small' onclick=viewDocx('" . $structure . $file["fileName"] . "'); return false;><i class='icon-eye-open'> </i>Просмотр договора</a>";
                                    echo "<td><a href='#' class='btn btn-small' onclick=sendMail('" . $structure . $file["fileName"] . "'); return false;><i class='icon-envelope'> </i>Отправить на почту</a>";
                                    echo '</td><td><a href="' . site_url($path . $file["fileName"]) . '" class="btn btn-small"><i class="icon-download-alt"> </i>Скачать файл</a></td>';
                                    echo "<td><a href='#' class='btn btn-small' onclick=deleteFile('" . $structure . $file["fileName"] . "','" . $file["fileName"] . "'); return false;><i class='icon-trash'> </i>Удалить файл</a></tr>";

                                endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>