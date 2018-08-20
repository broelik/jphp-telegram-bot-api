# TelegramBotApi

- **class** `TelegramBotApi` (`telegram\TelegramBotApi`)
- **source** `telegram/TelegramBotApi.php`

---

#### Properties

- `->`[`baseURL`](#prop-baseurl) : `mixed`
- `->`[`token`](#prop-token) : `mixed`
- `->`[`proxy`](#prop-proxy) : `Proxy`
- `->`[`json`](#prop-json) : `JsonProcessor`

---

#### Methods

- `->`[`__construct()`](#method-__construct)
- `->`[`getMe()`](#method-getme)
- `->`[`sendMessage()`](#method-sendmessage)
- `->`[`forwardMessage()`](#method-forwardmessage)
- `->`[`sendPhoto()`](#method-sendphoto)
- `->`[`sendAudio()`](#method-sendaudio)
- `->`[`sendDocument()`](#method-senddocument)
- `->`[`sendSticker()`](#method-sendsticker)
- `->`[`sendVideo()`](#method-sendvideo)
- `->`[`sendVoice()`](#method-sendvoice)
- `->`[`sendLocation()`](#method-sendlocation)
- `->`[`sendVenue()`](#method-sendvenue)
- `->`[`sendContact()`](#method-sendcontact)
- `->`[`sendChatAction()`](#method-sendchataction)
- `->`[`getUserProfilePhotos()`](#method-getuserprofilephotos)
- `->`[`getFile()`](#method-getfile)
- `->`[`kickChatMember()`](#method-kickchatmember)
- `->`[`unbanChatMember()`](#method-unbanchatmember)
- `->`[`getUpdates()`](#method-getupdates)
- `->`[`setProxy()`](#method-setproxy)
- `->`[`getProxy()`](#method-getproxy)
- `->`[`setToken()`](#method-settoken)
- `->`[`getToken()`](#method-gettoken)
- `->`[`query()`](#method-query)
- `->`[`formatMultipart()`](#method-formatmultipart)
- `->`[`createConnection()`](#method-createconnection)

---
# Methods

<a name="method-__construct"></a>

### __construct()
```php
__construct([ string $token): void
```

---

<a name="method-getme"></a>

### getMe()
```php
getMe(): TGetMeQuery
```

---

<a name="method-sendmessage"></a>

### sendMessage()
```php
sendMessage(): TSendMessageQuery
```

---

<a name="method-forwardmessage"></a>

### forwardMessage()
```php
forwardMessage(): TForwardMessageQuery
```

---

<a name="method-sendphoto"></a>

### sendPhoto()
```php
sendPhoto(): TSendPhotoQuery
```

---

<a name="method-sendaudio"></a>

### sendAudio()
```php
sendAudio(): TSendAudioQuery
```

---

<a name="method-senddocument"></a>

### sendDocument()
```php
sendDocument(): TSendDocumentQuery
```

---

<a name="method-sendsticker"></a>

### sendSticker()
```php
sendSticker(): TSendStickerQuery
```

---

<a name="method-sendvideo"></a>

### sendVideo()
```php
sendVideo(): TSendVideoQuery
```

---

<a name="method-sendvoice"></a>

### sendVoice()
```php
sendVoice(): TSendVoiceQuery
```

---

<a name="method-sendlocation"></a>

### sendLocation()
```php
sendLocation(): TSendLocationQuery
```

---

<a name="method-sendvenue"></a>

### sendVenue()
```php
sendVenue(): TSendVenueQuery
```

---

<a name="method-sendcontact"></a>

### sendContact()
```php
sendContact(): TSendContactQuery
```

---

<a name="method-sendchataction"></a>

### sendChatAction()
```php
sendChatAction(): TSendChatActionQuery
```

---

<a name="method-getuserprofilephotos"></a>

### getUserProfilePhotos()
```php
getUserProfilePhotos(): TGetUserProfilePhotosQuery
```

---

<a name="method-getfile"></a>

### getFile()
```php
getFile(): TGetFileQuery
```

---

<a name="method-kickchatmember"></a>

### kickChatMember()
```php
kickChatMember(): TKickChatMemberQuery
```

---

<a name="method-unbanchatmember"></a>

### unbanChatMember()
```php
unbanChatMember(): TUnbanChatMemberQuery
```

---

<a name="method-getupdates"></a>

### getUpdates()
```php
getUpdates(): TGetUpdatesQuery
```

---

<a name="method-setproxy"></a>

### setProxy()
```php
setProxy([ php\net\Proxy $proxy): void
```

---

<a name="method-getproxy"></a>

### getProxy()
```php
getProxy(): php\net\Proxy
```

---

<a name="method-settoken"></a>

### setToken()
```php
setToken([ string $token): void
```

---

<a name="method-gettoken"></a>

### getToken()
```php
getToken(): string
```

---

<a name="method-query"></a>

### query()
```php
query(mixed $method, array $args, bool $multipart): mixed
```

---

<a name="method-formatmultipart"></a>

### formatMultipart()
```php
formatMultipart(array $args, string $boundary): void
```

---

<a name="method-createconnection"></a>

### createConnection()
```php
createConnection(string $method, bool $multipart, [ string $boundary): URLConnection
```