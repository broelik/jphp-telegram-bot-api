# TMessage

- **class** `TMessage` (`telegram\object\TMessage`)
- **source** `telegram/object/TMessage.php`

---

#### Properties

- `->`[`message_id`](#prop-message_id) : `int`
- `->`[`from`](#prop-from) : [`TUser`](classes/telegram/object/TUser.md)
- `->`[`date`](#prop-date) : `int`
- `->`[`chat`](#prop-chat) : [`TChat`](classes/telegram/object/TChat.md)
- `->`[`forward_from`](#prop-forward_from) : [`TUser`](classes/telegram/object/TUser.md)
- `->`[`forward_date`](#prop-forward_date) : `int`
- `->`[`reply_to_message`](#prop-reply_to_message) : [`TMessage`](classes/telegram/object/TMessage.md)
- `->`[`text`](#prop-text) : `string`
- `->`[`entities`](#prop-entities) : `TMessageEntity[]`
- `->`[`audio`](#prop-audio) : [`TAudio`](classes/telegram/object/TAudio.md)
- `->`[`document`](#prop-document) : [`TDocument`](classes/telegram/object/TDocument.md)
- `->`[`photo`](#prop-photo) : `TPhotoSize[]`
- `->`[`sticker`](#prop-sticker) : [`TSticker`](classes/telegram/object/TSticker.md)
- `->`[`video`](#prop-video) : [`TVideo`](classes/telegram/object/TVideo.md)
- `->`[`voice`](#prop-voice) : [`TVoice`](classes/telegram/object/TVoice.md)
- `->`[`caption`](#prop-caption) : `string`
- `->`[`contact`](#prop-contact) : [`TContact`](classes/telegram/object/TContact.md)
- `->`[`location`](#prop-location) : [`TLocation`](classes/telegram/object/TLocation.md)
- `->`[`venue`](#prop-venue) : [`TVenue`](classes/telegram/object/TVenue.md)
- `->`[`new_chat_member`](#prop-new_chat_member) : [`TUser`](classes/telegram/object/TUser.md)
- `->`[`left_chat_member`](#prop-left_chat_member) : [`TUser`](classes/telegram/object/TUser.md)
- `->`[`new_chat_title`](#prop-new_chat_title) : `string`
- `->`[`new_chat_photo`](#prop-new_chat_photo) : `TPhotoSize[]`
- `->`[`delete_chat_photo`](#prop-delete_chat_photo) : `bool`
- `->`[`group_chat_created`](#prop-group_chat_created) : `bool`
- `->`[`supergroup_chat_created`](#prop-supergroup_chat_created) : `bool`
- `->`[`channel_chat_created`](#prop-channel_chat_created) : `bool`
- `->`[`migrate_to_chat_id`](#prop-migrate_to_chat_id) : `int`
- `->`[`migrate_from_chat_id`](#prop-migrate_from_chat_id) : `int`
- `->`[`pinned_message`](#prop-pinned_message) : [`TMessage`](classes/telegram/object/TMessage.md)