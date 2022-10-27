<?php
require_once 'Application.php';
require_once 'MysqlDb.php';

$app = new Application(
    new MysqlDb()
);

$app->db->getOrders();
echo '<br>';
$app->db->getOrderById(1);
echo '<br>';
$app->db->createOrder([]);
echo '<br>';
$app->db->updateOrder(1, []);
echo '<br>';
$app->db->deleteOrder(1);