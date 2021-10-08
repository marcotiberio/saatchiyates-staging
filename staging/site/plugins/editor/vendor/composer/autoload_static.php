<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fe0d5a5ee97e41e655e73e42ef39b9f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPHtmlParser\\' => 14,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPHtmlParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        's' => 
        array (
            'stringEncode' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/string-encode/src',
            ),
        ),
    );

    public static $classMap = array (
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'PHPHtmlParser\\Content' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Content.php',
        'PHPHtmlParser\\Curl' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Curl.php',
        'PHPHtmlParser\\CurlInterface' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/CurlInterface.php',
        'PHPHtmlParser\\Dom' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom.php',
        'PHPHtmlParser\\Dom\\AbstractNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/AbstractNode.php',
        'PHPHtmlParser\\Dom\\ArrayNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/ArrayNode.php',
        'PHPHtmlParser\\Dom\\Collection' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/Collection.php',
        'PHPHtmlParser\\Dom\\HtmlNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/HtmlNode.php',
        'PHPHtmlParser\\Dom\\InnerNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/InnerNode.php',
        'PHPHtmlParser\\Dom\\LeafNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/LeafNode.php',
        'PHPHtmlParser\\Dom\\Tag' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/Tag.php',
        'PHPHtmlParser\\Dom\\TextNode' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Dom/TextNode.php',
        'PHPHtmlParser\\Exceptions\\ChildNotFoundException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/ChildNotFoundException.php',
        'PHPHtmlParser\\Exceptions\\CircularException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/CircularException.php',
        'PHPHtmlParser\\Exceptions\\CurlException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/CurlException.php',
        'PHPHtmlParser\\Exceptions\\EmptyCollectionException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/EmptyCollectionException.php',
        'PHPHtmlParser\\Exceptions\\LogicalException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/LogicalException.php',
        'PHPHtmlParser\\Exceptions\\NotLoadedException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/NotLoadedException.php',
        'PHPHtmlParser\\Exceptions\\ParentNotFoundException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/ParentNotFoundException.php',
        'PHPHtmlParser\\Exceptions\\StrictException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/StrictException.php',
        'PHPHtmlParser\\Exceptions\\UnknownChildTypeException' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/UnknownChildTypeException.php',
        'PHPHtmlParser\\Finder' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Finder.php',
        'PHPHtmlParser\\Options' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Options.php',
        'PHPHtmlParser\\Selector\\Parser' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Selector/Parser.php',
        'PHPHtmlParser\\Selector\\ParserInterface' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Selector/ParserInterface.php',
        'PHPHtmlParser\\Selector\\Selector' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/Selector/Selector.php',
        'PHPHtmlParser\\StaticDom' => __DIR__ . '/..' . '/paquettg/php-html-parser/src/PHPHtmlParser/StaticDom.php',
        'stringEncode\\Encode' => __DIR__ . '/..' . '/paquettg/string-encode/src/stringEncode/Encode.php',
        'stringEncode\\Exception' => __DIR__ . '/..' . '/paquettg/string-encode/src/stringEncode/Exception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fe0d5a5ee97e41e655e73e42ef39b9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fe0d5a5ee97e41e655e73e42ef39b9f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2fe0d5a5ee97e41e655e73e42ef39b9f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2fe0d5a5ee97e41e655e73e42ef39b9f::$classMap;

        }, null, ClassLoader::class);
    }
}
