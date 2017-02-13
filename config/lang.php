<?php
return [
	'locale' =>    'zh-cn' ,  // 'en',
	'autoDetectLanguage' => true,
    /**
     * mapping for browser's accept language ,it affected  while 'autoDetectLanguage' set as true.
     * by default,the language folders are under directory 'resources/lang'.
     * 'language folder name' => ['accept language1',...]
     */
    'language_mapping' => [
        'zh-cn' => ['zh-CN','zh'],
        'en' => ['en-US','en']
    ],
	'path' => __DIR__ . "/../resources/lang"
];