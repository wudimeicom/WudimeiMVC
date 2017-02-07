<?php
 
return [
		'path' => dirname(__DIR__,1) . '/resources/views/default' ,
		'compiled'  => dirname(__DIR__,1) . '/storage/views_c' ,
		'forceCompile' => false,  
		'skipCommentTags' => true, //skip html comment tags for <!-- {{$var}} --> ,<!-- @if() --> , <!-- @endif --> , and so on
        'source_filename_extension' => '.htm',//source view's file extenstion
        'dest_filename_extension' => '.view.php', //compiled view's file extenstion
];