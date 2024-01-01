<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

class SeleniumController extends Controller
{
    public function executeSelenium(Request $request)
    {
        Log::info('Selenium API called with URL: ' . $request->query('url'));
        $host = 'http://selenium-hub:4444/wd/hub'; // Selenium Grid HubのURL
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
        // タイムアウトを30秒に設定
        $driver->manage()->timeouts()->setScriptTimeout(30);

        try {
            $url = $request->query('url', 'https://google.com'); // リクエストのURLクエリパラメータを使用
            $driver->get($url);

            // ページが完全にロードされるのを待つ
            $driver->executeAsyncScript("var callback = arguments[arguments.length - 1]; if (document.readyState === 'complete') { callback(); } else { window.addEventListener('load', function() { callback(); }); }");

            // JavaScriptの関数を非同期で実行
            $jsCode = "return generateBase64();";
            $base64Array = $driver->executeScript($jsCode);

            return response()->json(['images' => $base64Array]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        } finally {
            $driver->quit();
        }
    }
}
