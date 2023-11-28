<?php

declare(strict_types=1);

namespace Yii2\Asset\Tests;

use Yii2\Asset;
use Yii;
use yii\web\View;

final class AssetTest extends TestCase
{
    public function testCdnFontAwesomeAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Cdn\FontAwesomeAsset::class, $view->assetBundles);
    }

    public function testCdnFontAwesomeAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testCdnFontAwesomeBrandAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeBrandAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Cdn\FontAwesomeBrandAsset::class, $view->assetBundles);
    }

    public function testCdnFontAwesomeBrandAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeBrandAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="https://use.fontawesome.com/releases/v6.4.2/css/fontawesome.css" rel="stylesheet">
            <link href="https://use.fontawesome.com/releases/v6.4.2/css/brands.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testCdnFontAwesomeRegularAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeRegularAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Cdn\FontAwesomeRegularAsset::class, $view->assetBundles);
    }

    public function testCdnFontAwesomeRegularAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeBrandAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="https://use.fontawesome.com/releases/v6.4.2/css/fontawesome.css" rel="stylesheet">
            <link href="https://use.fontawesome.com/releases/v6.4.2/css/brands.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testCdnFontAwesomeSolidAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeSolidAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Cdn\FontAwesomeSolidAsset::class, $view->assetBundles);
    }

    public function testCdnFontAwesomeSolidAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Cdn\FontAwesomeSolidAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="https://use.fontawesome.com/releases/v6.4.2" rel="stylesheet">
            <link href="https://use.fontawesome.com/releases/v6.4.2/css/solid.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testCssFontAwesomeAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Css\FontAwesomeAsset::class, $view->assetBundles);
    }

    public function testCssFontAwesomeAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="/css/all.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testCssFontAwesomeBrandAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeBrandAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Css\FontAwesomeBrandAsset::class, $view->assetBundles);
    }

    public function testCssFontAwesomeBrandAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeBrandAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="/css/fontawesome.css" rel="stylesheet">
            <link href="/css/brands.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testCssFontAwesomeRegularAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeRegularAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Css\FontAwesomeRegularAsset::class, $view->assetBundles);
    }

    public function testCssFontAwesomeRegularAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeRegularAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="/css/fontawesome.css" rel="stylesheet">
            <link href="/css/regular.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testCssFontAwesomeSolidAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeSolidAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Css\FontAwesomeSolidAsset::class, $view->assetBundles);
    }

    public function testCssFontAwesomeSolidAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Css\FontAwesomeSolidAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="/css/fontawesome.css" rel="stylesheet">
            <link href="/css/solid.css" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testJsFontAwesomeAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Js\FontAwesomeAsset::class, $view->assetBundles);
    }

    public function testJsFontAwesomeAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="/js/all.js" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testJsFontAwesomeBrandAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeBrandAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Js\FontAwesomeBrandAsset::class, $view->assetBundles);
    }

    public function testJsFontAwesomeBrandAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeBrandAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="/js/fontawesome.js" rel="stylesheet">
            <link href="/js/brands.js" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testJsFontAwesomeRegularAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeRegularAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Js\FontAwesomeRegularAsset::class, $view->assetBundles);
    }

    public function testJsFontAwesomeRegularAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeRegularAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            <link href="/js/fontawesome.js" rel="stylesheet">
            <link href="/js/regular.js" rel="stylesheet">
            HTML,
            $result,
        );
    }

    public function testJsFontAwesomeSolidAssetSimpleDependency(): void
    {
        $view = Yii::$app->getView();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeSolidAsset::register($view);

        $this->assertCount(1, $view->assetBundles);
        $this->assertArrayHasKey(Asset\Js\FontAwesomeSolidAsset::class, $view->assetBundles);
    }

    public function testJsFontAwesomeSolidAssetRegister(): void
    {
        $view = new View();

        $this->assertEmpty($view->assetBundles);

        Asset\Js\FontAwesomeSolidAsset::register($view);

        $this->assertCount(1, $view->assetBundles);

        $result = $view->renderFile(__DIR__ . '/Support/main.php');

        $this->assertStringContainsString(
            <<<HTML
            HTML,
            $result,
        );
    }
}
