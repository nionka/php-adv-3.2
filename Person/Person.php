<?php
declare(strict_types=1);

class Person
{
    public string $name;
    public string $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    /** @noinspection MagicMethodsValidityInspection */
    public function __set(string $type, int $value)
    {
        $this->$type = $value;
    }

    public function __get(string $type)
    {
        return $this->type;
    }

    public function __sleep()
    {
        $obj = get_object_vars($this);
        foreach ($obj as $key => $per) {
            $arr[] = $key;
        }
        return $arr;
    }

    public function __wakeup()
    {

    }

    public function __toString(): string
    {
        $str = "";
        $obj = get_object_vars($this);
        foreach ($obj as $key => $per) {
            $str .= $per. " ";
        }
        return $str;
    }
}
