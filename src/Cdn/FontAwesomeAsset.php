<?php

declare(strict_types=1);

namespace Yii2\Asset\Cdn;

use yii\web\AssetBundle;

/**
 * Asset bundle CDN for the Font Awesome All css files.
 */
final class FontAwesomeAsset extends AssetBundle
{
    /**
     * @inheritDoc
     *
     * @phpstan-var array<array-key, mixed>
     */
    public $css = ['https://use.fontawesome.com/releases/v6.4.2/css/all.css'];
}
