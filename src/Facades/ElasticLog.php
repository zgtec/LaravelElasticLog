<?php
declare(strict_types=1);

namespace Zgtec\ElasticLog\Facades;

use Illuminate\Support\Facades\Facade;
use Zgtec\ElasticLog\ElasticLog as Model;

/**
 * @method static search(array<string, mixed> $data = [])
 * @method static uniqueValues(string $field, int $limit = 100, array<string, mixed> $where = [])
 * @method static create(array<string, mixed> $data)
 * @method static truncate()
 */
class ElasticLog extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return Model::class;
    }
}
