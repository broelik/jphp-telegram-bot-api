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
### Использование клавиатуры
#### Клавиатура под полем ввода (ReplyKeyboard)
![ReplyKeyboard](https://sun9-45.userapi.com/c205624/v205624150/12151/u119tArN_LE.jpg)
```php
$api = new TelegramBotApi($bot_token);

$keyboard = TMarkup::replyKeyboard()
    ->button('Button 1')->button('Button 2')
    ->row()
    ->button('Row 2')->button('Hello world')->button('test 123')
    ->row()
    ->button('Button in row 3');

$api->sendMessage()
	->chat_id(123456)
	->text('Hello world')
	->reply_markup($keyboard)
	->query();
```

#### Удаление клавиатуры под полем ввода (ReplyKeyboard)
```php
$api = new TelegramBotApi($bot_token);

$hideKeyboard = TMarkup::removeKeyboard();

$api->sendMessage()
	->chat_id(123456)
	->text('Hello world')
	->reply_markup($hideKeyboard)
	->query();
```

#### Клавиатура под сообщением (InlineKeyboard)
![InlineKeyboard](https://sun9-59.userapi.com/c205624/v205624829/11e6f/itNoz8qnyFE.jpg)
```php
$api = new TelegramBotApi($bot_token);

// Обязательно вторым аргументом у button указывать данные для callback_data или url-ссылку
$keyboard = TMarkup::inlineKeyboard()
    ->button('Button with callback', 'press_1')->button('Button 2', 'press_2')
    ->row()
    ->button('Link to google', 'https://google.com')->button('Link to git', 'http://github.com')
    ->row()
    ->button('1', 'btn_1')->button('2', 'btn_2')->button('3', 'btn_3')->button('4', 'btn_4')->button('5', 'btn_5')->button('6', 'btn_6')->button('7', 'btn_7')->button('8', 'btn_8');

$api->sendMessage()
	->chat_id(123456)
	->text('Hello world')
	->reply_markup($keyboard)
	->query();
```

#### Ответ на сообщение (ForceReply)
![ForceReply](https://sun9-23.userapi.com/c205624/v205624829/11e98/pyW0VWHtPJ0.jpg)
```php
$api = new TelegramBotApi($bot_token);

$reply = TMarkup::forceReply();

$api->sendMessage()
	->chat_id(123456)
	->text('Hello world')
	->reply_markup($reply)
	->query();
```

## Расширение для DevelNext
[Скачать](https://github.com/broelik/jphp-telegram-bot-api/releases/latest)

## Дополнительно

[DevelNext - extensions & manuals.](https://vk.com/dn_extension)

[Venity](https://vk.com/venity)