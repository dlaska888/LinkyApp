<?php

namespace src\Attributes\httpMethod;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class HttpPut extends HttpMethod
{
    public function __construct()
    {
        parent::__construct('PUT');
    }
}