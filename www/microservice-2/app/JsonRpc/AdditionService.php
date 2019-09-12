<?php

declare(strict_types=1);

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="AdditionService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class AdditionService
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}