<?php
namespace telegram\object\markup;

/**
 * --EN--
 * Upon receiving a message with this object, Telegram clients will remove the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button
 * 
 * @see https://core.telegram.org/bots/api#replykeyboardremove
 */
class TReplyKeyboardRemove extends AbstractMarkup {
	public function __construct(){
		$this->markup['remove_keyboard'] = true;
	}

	/**
	 * --EN--
	 * Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
	 * 
	 * @param bool $value 
	 */
	public function setSelective(bool $value){
		$this->markup['selective'] = $value;
		return $this;
	}
}