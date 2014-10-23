<?php namespace JoshHornby\Http;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use JoshHornby\Http\Exceptions\HttpRequestNotFound;

class HttpCore
{
    /**
     * @param $request
     * @throws Exceptions\HttpRequestNotFound
     * @return mixed
     */
    public static function get($request, $options = [])
    {
        $client = new Client();

        $response = $client->get(strtolower($request),$options);

        if ($response->getStatusCode() == '200' OR '201') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @param array $data
     * @throws Exceptions\HttpRequestNotFound
     * @return mixed
     */
    public static function post($request, array $data)
    {
        $client = new Client();

        $request = $client->post(strtolower($request), [], $data);

        $response = $request->send();

        if ($response->getStatusCode() == '200' OR '201') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @param array $data
     * @throws Exceptions\HttpRequestNotFound
     * @return mixed
     */
    public static function put($request, array $data)
    {
        $client = new Client();

        $request = $client->put(strtolower($request), [], $data);

        $response = $request->send();

        if ($response->getStatusCode() == '200' OR '201') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @throws Exceptions\HttpRequestNotFound
     * @return mixed
     */
    public static function delete($request)
    {
        $client = new Client();

        $request = $client->delete(strtolower($request));

        $response = $request->send();

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @throws Exceptions\HttpRequestNotFound
     * @return mixed
     */
    public static function head($request)
    {
        $client = new Client();

        $request = $client->head(strtolower($request));

        $response = $request->send();

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

} 
