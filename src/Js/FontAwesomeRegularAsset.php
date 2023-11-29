<?php

declare(strict_types=1);

namespace Yii2\Asset\Js;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Font Awesome Regular js files.
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
            ? ['js/fontawesome.min.js', 'js/regular.min.js'] : ['js/fontawesome.js', 'js/regular.js'];

        $this->publishOptions['only'] = YII_ENV === 'prod'
            ? array_merge($this->css, ['/webfonts/fa-regular*']) : array_merge($this->css, ['/webfonts/fa-regular*']);
    }
}
