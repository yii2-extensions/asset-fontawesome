<?php

declare(strict_types=1);

namespace Yii2\Asset\Css;

use yii\web\AssetBundle;

use function array_merge;

/**
 * Asset bundle for the Font Awesome All css files.
 */
final class FontAwesomeAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@npm/fortawesome--fontawesome-free';

    public function init(): void
    {
        $this->css = YII_ENV === 'prod' ? ['css/all.min.css'] : ['css/all.css'];

        $this->publishOptions['only'] = YII_ENV === 'prod'
            ? array_merge($this->css, ['/webfonts/*']) : array_merge($this->css, ['/webfonts/*']);
    }
}
