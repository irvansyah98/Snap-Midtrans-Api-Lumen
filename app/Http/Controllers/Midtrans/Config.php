<?php

namespace App\Http\Controllers\Midtrans;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

class Config extends Controller
{
    public static $serverKey;
    /**
     * Your merchant's client key
     * 
     * @static
     */
    public static $clientKey;
    /**
     * True for production
     * false for sandbox mode
     * 
     * @static
     */
    public static $isProduction = true;
    /**
     * Set it true to enable 3D Secure by default
     * 
     * @static
     */
    public static $is3ds = false;
    /**
     * Enable request params sanitizer (validate and modify charge request params).
     * See Midtrans_Sanitizer for more details
     * 
     * @static
     */
    public static $isSanitized = false;
    /**
     * Default options for every request
     * 
     * @static
     */
    public static $curlOptions = array();

    const SANDBOX_BASE_URL = 'https://api.sandbox.midtrans.com/v2';
    const PRODUCTION_BASE_URL = 'https://api.midtrans.com/v2';
    const SNAP_SANDBOX_BASE_URL = 'https://app.sandbox.midtrans.com/snap/v1';
    const SNAP_PRODUCTION_BASE_URL = 'https://app.midtrans.com/snap/v1';

    /**
     * Get baseUrl
     * 
     * @return string Midtrans API URL, depends on $isProduction
     */
    public static function getBaseUrl()
    {
        return Config::PRODUCTION_BASE_URL;
    }

    /**
     * Get snapBaseUrl
     * 
     * @return string Snap API URL, depends on $isProduction
     */
    public static function getSnapBaseUrl()
    {
        return Config::SNAP_PRODUCTION_BASE_URL;
    }
}
