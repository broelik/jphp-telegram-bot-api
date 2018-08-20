# TUpdateListener

- **class** `TUpdateListener` (`telegram\tools\TUpdateListener`)
- **source** `telegram/tools/TUpdateListener.php`

---

#### Properties

- `->`[`api`](#prop-api) : [`TelegramBotApi`](classes/telegram/TelegramBotApi.md)
- `->`[`async`](#prop-async) : `mixed`
- `->`[`threadsCount`](#prop-threadscount) : `mixed`
- `->`[`onUpdate`](#prop-onupdate) : `SharedValue`
- `->`[`threadPool`](#prop-threadpool) : `ThreadPool`
- `->`[`thread`](#prop-thread) : `Thread`
- `->`[`started`](#prop-started) : `mixed`

---

#### Methods

- `->`[`__construct()`](#method-__construct)
- `->`[`start()`](#method-start)
- `->`[`stop()`](#method-stop)
- `->`[`listen()`](#method-listen)
- `->`[`getApi()`](#method-getapi)
- `->`[`setAsync()`](#method-setasync)
- `->`[`getAsync()`](#method-getasync)
- `->`[`setThreadsCount()`](#method-setthreadscount)
- `->`[`getThreadsCount()`](#method-getthreadscount)
- `->`[`addListener()`](#method-addlistener)
- `->`[`removeListener()`](#method-removelistener)

---
# Methods

<a name="method-__construct"></a>

### __construct()
```php
__construct(telegram\TelegramBotApi $api): void
```

---

<a name="method-start"></a>

### start()
```php
start(): void
```

---

<a name="method-stop"></a>

### stop()
```php
stop(): void
```

---

<a name="method-listen"></a>

### listen()
```php
listen(): void
```

---

<a name="method-getapi"></a>

### getApi()
```php
getApi(): telegram\TelegramBotApi
```

---

<a name="method-setasync"></a>

### setAsync()
```php
setAsync(boolean $value): void
```

---

<a name="method-getasync"></a>

### getAsync()
```php
getAsync(): boolean
```

---

<a name="method-setthreadscount"></a>

### setThreadsCount()
```php
setThreadsCount(int $value): void
```

---

<a name="method-getthreadscount"></a>

### getThreadsCount()
```php
getThreadsCount(): int
```

---

<a name="method-addlistener"></a>

### addListener()
```php
addListener(callable $callback): void
```

---

<a name="method-removelistener"></a>

### removeListener()
```php
removeListener(callable $callback): boolean
```