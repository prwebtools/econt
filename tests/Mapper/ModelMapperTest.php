<?php

namespace Todstoychev\Econt\Tests\Mapper;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Todstoychev\Econt\Exception\ModelException;
use Todstoychev\Econt\Mapper\ModelMapper;
use Todstoychev\Econt\Model\Client;
use Todstoychev\Econt\Model\System;

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

    public function testMapOptionNormalization()
    {
        $model = new System();
        $data = [
            'validate' => true,
            'response_type' => 'test',
            'only_calculate' => false,
            'process_all_parcels' => false,
            'email_errors_to' => 'test',
        ];
        $this->mapper->map($model, $data);

        foreach ($data as $field => $value) {
            $methodName = 'get'.ucfirst($field);

            if (!method_exists($model, $methodName)) {
                $methodName = 'is'.ucfirst($field);
            }

            static::assertEquals($value, $model->{$methodName}());
        }
    }
}
