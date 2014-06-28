<?php namespace JoshHornby\Http;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use SmokeSpots\HTTP\Exceptions\HttpRequestNotFound;

class HttpCore {


    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public static function get($request)
    {
        $client = new Client();
        $response = $client->get(strtolower($request));

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode().' status code returned');
    }
    
    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public static function post($request)
    {
        $client = new Client();
        $response = $client->post(strtolower($request));

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode().' status code returned');
    }
    
    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public static function put($request)
    {
        $client = new Client();
        $response = $client->put(strtolower($request));

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode().' status code returned');
    }
    
    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public static function delete($request)
    {
        $client = new Client();
        $response = $client->delete(strtolower($request));

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode().' status code returned');
    }
    
    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public static function head($request)
    {
        $client = new Client();
        $response = $client->head(strtolower($request));

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode().' status code returned');
    }

} 
