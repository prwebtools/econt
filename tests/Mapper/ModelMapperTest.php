<?php

namespace Todstoychev\Econt\Tests\Mapper;

use PHPUnit\Framework\TestCase;
use Todstoychev\Econt\Exception\ModelException;
use Todstoychev\Econt\Mapper\ModelMapper;
use Todstoychev\Econt\Model\Client;

class ModelMapperTest extends TestCase
{
    /**
     * @var ModelMapper
     */
    private $mapper;

    protected function setUp()
    {
        $this->mapper = new ModelMapper();
    }

    public function testMapWithExistingValues()
    {
        $model = new Client();
        $data = ['username' => 'user', 'password' => 'pass'];
        $this->mapper->map($model, $data);

        foreach ($data as $field => $value) {
            $methodName = 'get'.ucfirst($field);
            static::assertEquals($value, $model->{$methodName}());
        }
    }

    public function testMapWithWrongValues()
    {
        static::expectException(ModelException::class);

        $model = new Client();
        $data = ['user' => 'user', 'pass' => 'pass'];
        $this->mapper->map($model, $data);

        foreach ($data as $field => $value) {
            $methodName = 'get'.ucfirst($field);
            $model->{$methodName}();
        }
    }
}
