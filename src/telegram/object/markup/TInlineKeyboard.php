<?php
namespace telegram\object\markup;

use telegram\exception\TelegramException;

/**
 * --EN--
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * --RU--
 * Отображает клавиатуру сразу под отправленным сообщением
 * 
 * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup
 */
class TInlineKeyboard extends TReplyKeyboard {
	/**
	 * Callback data limit
	 */
	const MAX_CBDATA_LENGTH = 64;

	/**
	 * Добавить кнопку
	 * @param  string   $text	Текст кнопки
	 * @param  string 	$data 	Данные, которые будут возвращены при нажатии или ссылка для перехода
	 * @return TInlineKeyboard
	 */
	public function button(string $text){
		$btn = ['text' => $text];

		if(func_num_args() < 2){
			throw new TelegramException('Parameter callback_data required for InlineKeyboard buttons');
		} else {
			$data = func_get_arg(1);
		}

		if(!is_string($data)){
			throw new TelegramException('Parameter callback_data should be a string');
		}

		if(strpos($data, 'http:') === 0 || strpos($data, 'https:') === 0 || strpos($data, 'tg:') === 0){
			$btn['url'] = $data;
		} else {
			if(strlen($data) > self::MAX_CBDATA_LENGTH){
				throw new TelegramException('Parameter callback_data should be a string no more than ' . MAX_CBDATA_LENGTH . ' bytes in size');
			}
			
			$btn['callback_data'] = $data;
		}

		$this->buttons[$this->row][] = $btn;
		
		return $this;
	}

	public function getMarkup(): array {
		$markup = $this->params;
		$markup['inline_keyboard'] = $this->buttons;

		return $markup;
	}
}