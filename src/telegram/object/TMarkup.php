<?php
namespace telegram\object;

use telegram\object\markup\TForceReply;
use telegram\object\markup\TInlineKeyboard;
use telegram\object\markup\TReplyKeyboard;
use telegram\object\markup\TReplyKeyboardRemove;

class TMarkup
{	
	/**
	 * @return TReplyKeyboard
	 */
	public static function replyKeyboard(){
		return new TReplyKeyboard;
	}

	/**
	 * @return TInlineKeyboard
	 */
	public static function inlineKeyboard(){
		return new TInlineKeyboard;
	}

	/**
	 * @return TForceReply
	 */
	public static function forceReply(){
		return new TForceReply;
	}

	/**
	 * @return TReplyKeyboardRemove
	 */
	public static function removeKeyboard(){
		return new TReplyKeyboardRemove;
	}
}