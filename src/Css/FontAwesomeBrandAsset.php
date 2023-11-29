<?php

declare(strict_types=1);

namespace Yii2\Asset\Css;

use yii\web\AssetBundle;

use function array_merge;

/**
 * Asset bundle for the Font Awesome Brand css files.
 */
final class FontAwesomeBrandAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@npm/fortawesome--fontawesome-free';

    public function __construct()
    {
        $this->css = YII_ENV === 'prod'
            ? ['css/fontawesome.min.css', 'css/brands.min.css'] : ['css/fontawesome.css', 'css/brands.css'];

        $this->publishOptions['only'] = YII_ENV === 'prod'
            ? array_merge($this->css, ['/webfonts/fa-brands*']) : array_merge($this->css, ['/webfonts/fa-brands*']);
    }
}
