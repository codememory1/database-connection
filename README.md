# Database Connection

# Установка

```
composer require codememory/database-connection
```

# Поддерживаются драйвера
- [x] MySQL
- [x] PostgreSQL
- [x] SQLite

# Методы класса *Connection*
- `getConnector(): ConnectorInterface` Получить коннектор
    - string **$connectorName**
- `getConnectors(): ConnectorInterface[]` Получить массив всех коннекторов
- `reconnect(): ConnectorInterface|ConnectionInterface` Переопределить данные коннектора
  - string **$connectorName**
  - callable **$callback**
  - string|null **$newConnectorName**
- `connectorExist(): bool` Проверить существование коннектора
  - string **$connectorName**

# Методы класса *Connector*
- `isConnection(): bool` Проверить подключение к базе данных
- `getConnection(): PDO` Получить PDO объект, если подключение успешное
- `getConnectorData(): ConnectorConfigurationInterface` Получить данные подключенного юзера
- `getConnectorName(): string` Получить имя текущего коннектора

# Пример создания коннектора
```php
<?php

use Codememory\Components\Database\Connection\Connection;
use Codememory\Components\Database\Connection\Interfaces\ConnectorConfigurationInterface;
use Codememory\Components\Database\Connection\Drivers\MySQLDriver;

require_once 'vendor/autoload.php';

$connection = new Connection();

// Добавление коннектора в список всех коннекторов
$connection->addConnector('connector-name', function (ConnectorConfigurationInterface $configuration) {
    $configuration
        ->host('localhost')
        ->dbname('dbname')
        ->username('username')
        ->password('user password')
        ->driver(new MySQLDriver())
});
```

# Пример переопределения данных коннектора
```php
// Возьмем ранее добавленный коннектор "connector-name"

$connection->reconnect('connector-name', function (ConnectorConfigurationInterface $configuration) {
    $configuration->dbname('new-dbname');
});

$connection
    ->getConnector('connector-name')
    ->getConnectorData()
    ->getDbname(); // new-dbname
```