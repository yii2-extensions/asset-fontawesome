<?php

declare(strict_types=1);

namespace Yii2\Asset\Cdn;

use yii\web\AssetBundle;

/**
 * Asset bundle CDN for the Font Awesome Regular css files.
 */
final class FontAwesomeRegularAsset extends AssetBundle
{
    /**
     * @inheritDoc
     *
     * @phpstan-var array<array-key, mixed>
     */
    public $css = [
        'https://use.fontawesome.com/releases/v6.4.2',
        'https://use.fontawesome.com/releases/v6.4.2/css/regular.css',
    ];
}
