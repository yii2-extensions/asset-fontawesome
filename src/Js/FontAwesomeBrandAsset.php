<?php

declare(strict_types=1);

namespace Yii2\Asset\Js;

use yii\web\AssetBundle;

use function array_merge;

/**
 * Asset bundle for the Font Awesome Brand js files.
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
            ? ['js/fontawesome.min.js', 'js/brands.min.js'] : ['js/fontawesome.js', 'js/brands.js'];

        $this->publishOptions['only'] = YII_ENV === 'prod'
            ? array_merge($this->css, ['/webfonts/fa-brands*']) : array_merge($this->css, ['/webfonts/fa-brands*']);
    }
}
