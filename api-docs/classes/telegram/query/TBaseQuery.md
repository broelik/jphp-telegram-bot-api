# TBaseQuery

- **class** `TBaseQuery` (`telegram\query\TBaseQuery`)
- **source** `telegram/query/TBaseQuery.php`

**Child Classes**

> [TEditMessageTextQuery](classes/telegram/query/TEditMessageTextQuery.md), [TForwardMessageQuery](classes/telegram/query/TForwardMessageQuery.md), [TGetFileQuery](classes/telegram/query/TGetFileQuery.md), [TGetMeQuery](classes/telegram/query/TGetMeQuery.md), [TGetUpdatesQuery](classes/telegram/query/TGetUpdatesQuery.md), [TGetUserProfilePhotosQuery](classes/telegram/query/TGetUserProfilePhotosQuery.md), [TKickChatMemberQuery](classes/telegram/query/TKickChatMemberQuery.md), [TSendAudioQuery](classes/telegram/query/TSendAudioQuery.md), [TSendChatActionQuery](classes/telegram/query/TSendChatActionQuery.md), [TSendContactQuery](classes/telegram/query/TSendContactQuery.md), [TSendDocumentQuery](classes/telegram/query/TSendDocumentQuery.md), [TSendLocationQuery](classes/telegram/query/TSendLocationQuery.md), [TSendMessageQuery](classes/telegram/query/TSendMessageQuery.md), [TSendPhotoQuery](classes/telegram/query/TSendPhotoQuery.md), [TSendStickerQuery](classes/telegram/query/TSendStickerQuery.md), [TSendVenueQuery](classes/telegram/query/TSendVenueQuery.md), [TSendVideoQuery](classes/telegram/query/TSendVideoQuery.md), [TSendVoiceQuery](classes/telegram/query/TSendVoiceQuery.md), [TUnbanChatMemberQuery](classes/telegram/query/TUnbanChatMemberQuery.md)

---

#### Properties

- `->`[`api`](#prop-api) : [`TelegramBotApi`](classes/telegram/TelegramBotApi.md)
- `->`[`method`](#prop-method) : `mixed`
- `->`[`multipart`](#prop-multipart) : `mixed`
- `->`[`data`](#prop-data) : `mixed`

---

#### Methods

- `->`[`__construct()`](#method-__construct)
- `->`[`getApi()`](#method-getapi)
- `->`[`isMultipart()`](#method-ismultipart)
- `->`[`getMethod()`](#method-getmethod)
- `->`[`put()`](#method-put)
- `->`[`query()`](#method-query)

---
# Methods

<a name="method-__construct"></a>

### __construct()
```php
__construct(telegram\TelegramBotApi $api, string $method, boolean $multipart): void
```

---

<a name="method-getapi"></a>

### getApi()
```php
getApi(): telegram\TelegramBotApi
```

---

<a name="method-ismultipart"></a>

### isMultipart()
```php
isMultipart(): boolean
```

---

<a name="method-getmethod"></a>

### getMethod()
```php
getMethod(): string
```

---

<a name="method-put"></a>

### put()
```php
put(string $key, mixed $value): void
```

---

<a name="method-query"></a>

### query()
```php
query(): void
```