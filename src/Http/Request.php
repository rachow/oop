<?php
/**
 *
 *  This object can be replaced with symfony/http-foundation
 *
 */

namespace OOP\Http;

use Throwable;
use Exception;
use OOP\Exceptions\JsonException;

class Request
{

    public const METHOD_HEAD = 'HEAD';
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_PATCH = 'PATCH';
    public const METHOD_DELETE = 'DELETE';
    public const METHOD_PURGE = 'PURGE';
    public const METHOD_OPTIONS = 'OPTIONS';
    public const METHOD_TRACE = 'TRACE';
    public const METHOD_CONNECT = 'CONNECT';

    protected ?string $method = null;
    protected ?string $locale = null;
    protected ?string $pathInfo = null;

    protected string $baseLocale = 'en';

    public function __construct()
    {

    }
}
