<?php

namespace src\LinkyRouting\attributes\httpMethod;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class HttpPost extends HttpMethod
{
    public function __construct()
    {
        parent::__construct('POST');
    }
}