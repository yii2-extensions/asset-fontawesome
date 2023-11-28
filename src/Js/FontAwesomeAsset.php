<?php

declare(strict_types=1);

namespace Yii2\Asset\Js;

use yii\web\AssetBundle;

use function array_merge;

/**
 * Asset bundle for the Font Awesome All js files.
 */
final class FontAwesomeAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@npm/fortawesome--fontawesome-free';

    public function init(): void
    {
        $this->css = YII_ENV === 'prod' ? ['/js/all.min.js'] : ['/js/all.js'];

        $this->publishOptions['only'] = YII_ENV === 'prod'
            ? array_merge($this->css, ['/webfonts/*']) : array_merge($this->css, ['/webfonts/*']);
    }
}
