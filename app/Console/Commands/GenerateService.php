<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
class GenerateService extends GeneratorCommand
{
    protected $name = 'make:service';

    protected $type = 'Service';

    protected function getStub()
    {
        return __DIR__.'./../stubs/service.stub';
    }

    protected function getDefaultNamespace($rootNameSpace)
    {
        return $rootNameSpace.'\Services';
    }
}
