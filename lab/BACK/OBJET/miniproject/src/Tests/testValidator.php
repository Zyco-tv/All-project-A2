<?php
namespace App\Tests;
use PHPUnit\Framework\TestCase;
use App\Validator;

class ValidatorTest extends TestCase{
    public function testValidationField()
    {
        $validator = new Validator();
        $_POST = [
            "username" => "azertyui"
        ];
        $validator->validationField("username", ["required", "alpha"]);
        $this->assertCount(0, $validator->errors());
    }
}
