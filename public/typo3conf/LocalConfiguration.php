<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '',
        'loginSecurityLevel' => 'rsa',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => '',
                'driver' => 'mysqli',
                'host' => 'localhost',
                'password' => '',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'root',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [            
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'cart_products' => [
            'categoryRestriction' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'gdlib_png' => true,
        'imagefile_ext' => 'gif,jpg,jpeg,png',
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/local/bin/',
        'processor_path_lzw' => '/usr/local/bin/',
        'thumbnails' => 0,
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        5 => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'defaultMailFromName' => ' ',
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '',
        'exceptionalErrors' => 12290,
        'features' => [
            'newTranslationServer' => true,
            'unifiedPageTranslationHandling' => true,
        ],
        'fileCreateMask' => '0644',
        'folderCreateMask' => '0755',
        'phpTimeZone' => 'Europe/Berlin',
        'sitename' => '',
        'systemLocale' => 'de_DE.utf8',
        'systemLogLevel' => 0,
        'systemMaintainers' => [
        ],
    ],
];
