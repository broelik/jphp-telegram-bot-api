# TelegramBotApi
Расширение для работы с Telegram Bot API
## Установка
```
jppm add telegram-bot-api
```
## Примеры
### Инициализация API
```php
$api = new TelegramBotApi($bot_token);
```
### Использование прокси
```php
$api = new TelegramBotApi($bot_token);
$api->setProxy(new Proxy('HTTP', $host, $port));
```
### Запросы
```php
$api = new TelegramBotApi($bot_token);

$botInfo = $api->getMe()->query(); // Получить данные о боте

$message = $api->sendMessage()->chat_id(1234567890)->text('Privet')->query(); // Отправить текстовое сообщение

$message = $api->sendPhoto()->chat_id(1234567890)->photo(new File($path_to_photo))->query(); // Отправить фото
$message = $api->sendPhoto()->chat_id(1234567890)->photo($fileID)->query(); // Отправить фото по ID

$message = $api->sendVoice()->chat_id(1234567890)->voice(new File($path_to_voice))->query(); // Отправить аудио
$message = $api->sendVoice()->chat_id(1234567890)->voice($fileID)->query(); // Отправить аудио по ID
```
### Использование Long Polling
```php
$api = new TelegramBotApi('387286051:AAH1aSyFgFCaWnXZHLqA8eymhyqXxRhWrvM');

$listener = new TUpdateListener($api);
$listener->setAsync(true); // События будут прослушиваться в отдельном потоке
$listener->setThreadsCount(4); // Для каждого обновления будет использоваться отдельный поток
/** @var TUpdate $update */
$listener->addListener(function($update){
    var_dump($update->message);
});
$listener->start();
```
## Расширение для DevelNext
[Скачать](https://github.com/broelik/jphp-telegram-bot-api/releases/latest)

## Дополнительно

[DevelNext - extensions & manuals.](https://vk.com/dn_extension)

[Venity](https://vk.com/venity)