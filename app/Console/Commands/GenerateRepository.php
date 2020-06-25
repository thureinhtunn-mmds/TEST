<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
class GenerateRepository extends GeneratorCommand
{
    protected $name = 'make:repository';

    protected $type = 'Repository';

    protected function getStub()
    {
        return __DIR__ .'./../stubs/repository.stub';
    }

    protected function getDefaultNamespace($rootNameSpace)
    {
        return $rootNameSpace.'\Repositories';
    }
}
