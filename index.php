<?php
declare(strict_types=1);

spl_autoload_register(function($class) {
    $a = explode('\\', $class);
    $last = array_pop($a);
    $fn = $class . '/' . $last . '.php';
    $fn = str_replace('\\', '/', $fn);

    //echo '<b>autoload: ' . $class . '</b> file: ' . $fn . '<br>';

    if (file_exists($fn)) require $fn;
});

$worker = new Person('Oleg', 'Ivanov');
$worker->salary = 1000;

echo $worker. "<br>";

$workerString = serialize($worker);

$workerReplace = str_replace("Oleg", "Ivan", $workerString);

$newWorker = unserialize($workerReplace);

echo $newWorker. "<br>";

$list = new PeopleList();
$list->addPerson(new Person("irina", "ivanova"));
$list->addPerson(new Person("oleg", "smirnov"));
$list->addPerson(new Person("alex", "sidorov"));

foreach ($list as $key=>$person) {
    echo $key + 1 . ". " . $person. "<br>";
}
