<?php

return [
    'paths' => [
        BASE_PATH . '/resources/views/default'
    ],
    'compiled' => BASE_PATH . '/storage/view_c',
    //view's file extension, html
    'ext' => 'html',
    //if true,recompile anyhow
    'force_compile' => true,
    //if view is modified,recompile again.
    'compile_check' => true,
    //write "don't edit this content" in compiled file
    'write_do_not_edit_comment' => false,
    //multiple white characters to one blank char
    'reduce_white_chars' => false,
];
;
