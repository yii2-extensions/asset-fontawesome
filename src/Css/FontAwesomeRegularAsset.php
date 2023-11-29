<?php

declare(strict_types=1);

namespace Yii2\Asset\Css;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Font Awesome Regular css files.
 */
final class FontAwesomeRegularAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@npm/fortawesome--fontawesome-free';

    public function __construct()
    {
        $this->css = YII_ENV === 'prod'
            ? ['css/fontawesome.min.css', 'css/regular.min.css'] : ['css/fontawesome.css', 'css/regular.css'];

        $this->publishOptions['only'] = YII_ENV === 'prod'
            ? array_merge($this->css, ['/webfonts/fa-regular*']) : array_merge($this->css, ['/webfonts/fa-regular*']);
    }
}
