<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/2/18
 * Time: 7:12 AM
 */

namespace Todstoychev\Econt\Tests\Normalizer;

use Todstoychev\Econt\Normalizer\ArrayNormalizer;
use PHPUnit\Framework\TestCase;

class ArrayNormalizerTest extends TestCase
{
    /**
     * @var ArrayNormalizer
     */
    private $normalizer;

    protected function setUp()
    {
        $this->normalizer = new ArrayNormalizer();
    }

    public function testToCamelCase()
    {
        $data = [
            'props' => [
                'prop_one' => 'test',
                'prop_two' => 'test1',
                'something' => 'nothing',
            ],
            'another_prop' => 1,
        ];
        $expected = [
            'props' => [
                'propOne' => 'test',
                'propTwo' => 'test1',
                'something' => 'nothing',
            ],
            'anotherProp' => 1,
        ];
        $result = $this->normalizer->toCamelCase($data);

        static::assertArraySubset($expected, $result, true);
    }

    public function testToSnakeCase()
    {
        $expected = [
            'props' => [
                'prop_one' => 'test',
                'prop_two' => 'test1',
                'something' => 'nothing',
            ],
            'another_prop' => 1,
        ];
        $data = [
            'props' => [
                'propOne' => 'test',
                'propTwo' => 'test1',
                'something' => 'nothing',
            ],
            'anotherProp' => 1,
        ];
        $result = $this->normalizer->toSnakeCase($data);

        static::assertArraySubset($expected, $result, true);
    }
}
