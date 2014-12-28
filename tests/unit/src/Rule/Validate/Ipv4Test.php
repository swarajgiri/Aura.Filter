<?php
namespace Aura\Filter\Rule\Validate;

class Ipv4Test extends AbstractValidateTest
{
    public function providerIs()
    {
        return [
            ['141.225.185.101'],
            ['255.0.0.0'],
            ['0.255.0.0'],
            ['0.0.255.0'],
            ['0.0.0.255'],
            ['127.0.0.1'],
        ];
    }

    public function providerIsNot()
    {
        return [
            [' '],
            [''],
            ['127.0.0.1234'],
            ['127.0.0.0.1'],
            ['256.0.0.0'],
            ['0.256.0.0'],
            ['0.0.256.0'],
            ['0.0.0.256'],
            ['1.'],
            ['1.2.'],
            ['1.2.3.'],
            ['1.2.3.4.'],
            ['a.b.c.d'],
        ];
    }
}
