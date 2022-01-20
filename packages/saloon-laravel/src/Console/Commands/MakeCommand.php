<?php

namespace Sammyjo20\SaloonLaravel\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $stub = '';

    /**
     * @var string
     */
    protected $namespace = '';

    /**
     * Get the stub
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/' . $this->stub);
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param string $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . $this->namespace;
    }
}
