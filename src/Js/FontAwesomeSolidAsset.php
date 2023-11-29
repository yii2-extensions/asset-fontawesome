<?php

declare(strict_types=1);

namespace Yii2\Asset\Js;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Font Awesome Solid js files.
 */
final class FontAwesomeSolidAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@npm/fortawesome--fontawesome-free';

    public function __construct()
    {
        $this->css = YII_ENV === 'prod'
            ? ['js/fontawesome.min.js', 'js/solid.min.js'] : ['js/fontawesome.js', 'js/solid.js'];

        $this->publishOptions['only'] = YII_ENV === 'prod'
            ? array_merge($this->css, ['/webfonts/fa-solid*']) : array_merge($this->css, ['/webfonts/fa-solid*']);
    }
}
