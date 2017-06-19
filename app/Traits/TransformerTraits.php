<?php
namespace App\Traits;

use Illuminate\Support\Collection;
use League\Fractal\Manager;
use League\Fractal\Serializer\ArraySerializer;
use League\Fractal\Resource\Collection as collects;
use League\Fractal\Resource\Item;

trait TransformerTraits
{
    protected function fetch($data, $callback, $key = 'data')
    {
        if (empty($data)) {
            return [];
        }

        if (!$data instanceof Collection) {
            $data = $this->item($data, $callback);
        } else {
            $data = $this->collection($data, $callback, $key);
        }

        return $this->internalTransform($data);
    }

    protected function item($item, $callback, $key = 'data')
    {
        return new Item($item, $callback, $key);
    }

    protected function collection($collection, $callback, $key = 'data')
    {
        return new collects($collection, $callback, $key);
    }

    protected function internalTransform($data)
    {
        $manager = new Manager();
        $manager->setSerializer(new ArraySerializer());
        $data = $manager->createData($data)->toArray();

        return array_key_exists('data', $data) ? $data['data'] : $data;
    }
}
