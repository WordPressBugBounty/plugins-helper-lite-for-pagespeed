<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36d2d5468d0845f00f10b6c1f8ec08af
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Karenina\\HelperLightForPageSpeed\\Admin\\AdminManager' => __DIR__ . '/../..' . '/src/admin/class-admin-manager.php',
        'Karenina\\HelperLightForPageSpeed\\Admin\\HLFP_OSA' => __DIR__ . '/../..' . '/src/admin/class-admin-fields.php',
        'Karenina\\HelperLightForPageSpeed\\Filter\\BaseFilter' => __DIR__ . '/../..' . '/src/filter/class-base-filter.php',
        'Karenina\\HelperLightForPageSpeed\\Filter\\BufferFilter' => __DIR__ . '/../..' . '/src/filter/class-buffer-filter.php',
        'Karenina\\HelperLightForPageSpeed\\Filter\\FilterManager' => __DIR__ . '/../..' . '/src/filter/class-filter.php',
        'Karenina\\HelperLightForPageSpeed\\Filter\\LightFilter' => __DIR__ . '/../..' . '/src/filter/class-light-filter.php',
        'Karenina\\HelperLightForPageSpeed\\Image\\ImageOptimize' => __DIR__ . '/../..' . '/src/image/class-image-optimize.php',
        'Karenina\\HelperLightForPageSpeed\\Main' => __DIR__ . '/../..' . '/src/class-main.php',
        'Karenina\\HelperLightForPageSpeed\\Script\\ScriptManager' => __DIR__ . '/../..' . '/src/script/class-script-manager.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit36d2d5468d0845f00f10b6c1f8ec08af::$classMap;

        }, null, ClassLoader::class);
    }
}
