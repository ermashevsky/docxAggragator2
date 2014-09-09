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
                            <th>Размер</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php
                    $structure = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/uploads/' . $user->username . '/';

                    if (!file_exists($structure)) {
                        mkdir($structure, 0777, true);
                    }
                    
                    $path = 'uploads/' . $user->username . '/';
                    $structure = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/uploads/' . $user->username . '/';
                    
                    $dir = new DirectoryIterator($path);
                    $n = 1;
                    foreach ($dir as $fileinfo) {
                        if($fileinfo->getType()==='file'){
                            echo '<tr>'
                                    . '<td>'.$n++.'</td><td>'.$fileinfo->getFilename().'</td>'
                                    . '<td>'.date("d.m.Y H:m",$fileinfo->getMTime()).'</td>'
                                    . '<td>'.General::formatSizeUnits($fileinfo->getSize()).'</td>';
                            echo "<td><a href='#' class='btn btn-small' onclick=sendMail('".$structure.$fileinfo->getFilename()."'); return false;><i class='icon-envelope'> </i>Отправить на почту</a>";
                            echo '</td><td><a href="'.site_url($path.$fileinfo->getFilename()).'" class="btn btn-small"><i class="icon-download-alt"> </i>Скачать файл</a></td>';
                            echo "<td><a href='#' class='btn btn-small' onclick=deleteFile('".$structure.$fileinfo->getFilename()."','".$fileinfo->getFilename()."'); return false;><i class='icon-trash'> </i>Удалить файл</a></tr>";
                        }
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