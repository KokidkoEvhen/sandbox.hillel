<?php

class Autoloader
{
    protected array $prefixes = [];

    public function register()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    public function addNamespace($prefix, $baseDir)
    {
        $this->prefixes[$prefix] = $baseDir;
    }

    public function autoload($class)
    {
        $file = null;

        foreach ($this->prefixes as $prefix => $dir) {
            if (strpos($class, $prefix) !== false) {
                $class = explode('\\', $class);
                array_shift($class);
                $file = realpath($dir . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $class) . '.php');
            }
        }

        if ($file !== null) {
            require $file;
        }
    }
}

$autoloader = new Autoloader();
$autoloader->addNamespace('App', __DIR__ . '/src');
$autoloader->register();
