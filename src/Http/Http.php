<?php
/**
 * A wrapper object that allows us to 
 * communicate through internet.
 *
 * There are options for 
 *      - Promise based = Guzzle\Http
 *
 * Provides chainable methods.
 *
 */

namespace OOP\Http;

use OOP\Http\HttpResponse;

class Http
{
    protected ?string $url = null;
    protected ?string $method = null;

    protected ?string $token = null;

    protected ?array $headers = null;

    protected ?string $basic_username = null;
    protected ?string $basic_password = null;

    protected HttpResponse $response;

    public function __construct()
    {
        // here really ..?
        $this->response = new HttpResponse();
    }

    public function token(string $token)
    {
        $this->token = $token;
        return $this->header(['Authorization: Bearer ' . $token]);
    }

    public function basic(string $username, string $password)
    {
        $this->basic_username = $username;
        $this->basic_password = $password;

        return $this->header(['Authorization: Basic ' . base64_encode($username . ':' . $password)]);
    }

    public function header(array $headers)
    {
        if (is_array($this->headers)) {
            $this->headers = array_merge($headers, $this->headers);
            return $this;
        }

        $this->headers = $headers;
        return $this;
    }

    public function method(string $method)
    {
        $this->method = strtoupper($method);
        return $this;
    }

    public function url(string $url)
    {
        $this->url = $url;
        return $this;
    }

    public function get()
    {
        return $this->response;       
    }

    public function post()
    {

    }
}
