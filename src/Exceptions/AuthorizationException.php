<?php

declare(strict_types=1);

namespace Tuupola\Middleware\Exceptions;

use RuntimeException;

final class AuthorizationException extends RuntimeException
{
    /**
     * @codeCoverageIgnore
     */
    public static function noTokenFound(): self
    {
        return new self('Token not found.');
    }
}
