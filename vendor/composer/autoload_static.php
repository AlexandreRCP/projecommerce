<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1dcccd9b354b8afdfa1c15932da4b10
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alex\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alex\\' => 
        array (
            0 => __DIR__ . '/..' . '/alexdev/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1dcccd9b354b8afdfa1c15932da4b10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1dcccd9b354b8afdfa1c15932da4b10::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb1dcccd9b354b8afdfa1c15932da4b10::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb1dcccd9b354b8afdfa1c15932da4b10::$classMap;

        }, null, ClassLoader::class);
    }
}
