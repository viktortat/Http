<?php namespace JoshHornby\Http;

use GuzzleHttp\Client as Client;
use Illuminate\Http\Request;
use SmokeSpots\HTTP\Exceptions\HttpRequestNotFound;

class HttpCore
{

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @param Client $client
     */
    function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public function get($request)
    {
        $response = $this->client->get(strtolower($request));

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @param array $data
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public function post($request, array $data)
    {
        $request = $this->client->post(strtolower($request), [], $data);

        $response = $request->send();

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @param array $data
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public function put($request, array $data)
    {
        $request = $this->client->put(strtolower($request), [], $data);

        $response = $request->send();

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public function delete($request)
    {
        $request = $this->client->delete(strtolower($request));

        $response = $request->send();

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

    /**
     * @param $request
     * @return mixed
     * @throws \SmokeSpots\HTTP\Exceptions\HttpRequestNotFound
     */
    public function head($request)
    {
        $request = $this->client->head(strtolower($request));

        $response = $request->send();

        if ($response->getStatusCode() == '200') {
            return $response->json();
        }

        throw new HttpRequestNotFound($response->getStatusCode() . ' status code returned');
    }

} 
