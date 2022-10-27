<?php

require_once 'DBInterface.php';

class MysqlDb implements DBInterface
{

    public function getOrders(): array
    {
        echo "Calling method " . __METHOD__ . PHP_EOL; // __METHOD__ returns the name of the class along with the name of the function
        return[];
    }

    public function getOrderById(int $id)
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
    }

    public function createOrder(array $data): bool
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
        return true;
    }

    public function updateOrder(int $id, array $data): bool
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
        return true;
    }

    public function deleteOrder(int $id): bool
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
        return true;
    }
}