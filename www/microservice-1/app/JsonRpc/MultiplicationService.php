<?php

declare(strict_types=1);

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="MultiplicationService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class MultiplicationService
{
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }
}