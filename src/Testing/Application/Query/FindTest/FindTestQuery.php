<?php

declare(strict_types=1);

namespace App\Testing\Application\Query\FindTest;

use App\Shared\Application\Query\Query;

readonly class FindTestQuery extends Query
{
    public function __construct(public string $id)
    {
    }
}
