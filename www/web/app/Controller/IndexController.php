<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\JsonRpc\AdditionService;
use App\JsonRpc\MultiplicationService;

class IndexController extends Controller
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function add(AdditionService $addition)
    {
        $a = (int)$this->request->input('a', 1);
        $b = (int)$this->request->input('b', 2);

        return [
            'a' => $a,
            'b' => $b,
            'add' => $addition->add($a, $b)
        ];
    }

    public function multiply(MultiplicationService $multiplicaton)
    {
        $a = (int)$this->request->input('a', 1);
        $b = (int)$this->request->input('b', 2);

        return [
            'a' => $a,
            'b' => $b,
            'multiply' => $multiplicaton->multiply($a, $b)
        ];
    }
}
