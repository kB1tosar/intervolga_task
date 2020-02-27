<?php
$title_json_file = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/static/title.json');
$title_list = json_decode($title_json_file,true);
foreach ($title_list['data_title'] as $title):
    if ($title['path'] === $_SERVER['SCRIPT_NAME']):?>
        <title><?=$title['title']?></title>
    <?endif;?>
<?endforeach;?>
