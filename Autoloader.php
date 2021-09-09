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
        $prefix = trim($prefix, '\\') . '\\';

        $baseDir = rtrim($baseDir, DIRECTORY_SEPARATOR) . '/';

        if (isset($this->prefixes[$prefix]) === false) {
            $this->prefixes[$prefix] = array();
        }

        array_push($this->prefixes[$prefix], $baseDir);
    }

    public function autoload($class)
    {
        $prefix = $class;

        while (false !== $pos = strrpos($prefix, '\\')) {

            $prefix = substr($class, 0, $pos + 1);

            $relativeClass = substr($class, $pos + 1);

            $file = $this->loadFile($prefix, $relativeClass);

            if ($file) {
                return $file;
            }

            $prefix = rtrim($prefix, '\\');
        }

        return false;
    }

    protected function loadFile($prefix, $relativeClass)
    {
        if (isset($this->prefixes[$prefix]) === false) {
            return false;
        }

        foreach ($this->prefixes[$prefix] as $baseDir) {

            $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

            if (file_exists($file)) {
                require $file;
                return $file;
            }
        }

        return false;
    }

}

$autoloader = new Autoloader();
$autoloader->addNamespace('App', __DIR__ . '/src');
$autoloader->register();
