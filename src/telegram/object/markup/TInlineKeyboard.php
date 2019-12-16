<?php
namespace telegram\object\markup;

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
	 * Добавить кнопку
	 * @param  string   $text	Текст кнопки
	 * @param  string 	$data 	Данные, которые будут возвращены при нажатии или ссылка для перехода
	 * @return TInlineKeyboard
	 */
	public function button(string $text, string $data){
		$btn = ['text' => $text];

		if(strpos($data, 'http:') === 0 || strpos($data, 'https:') === 0){
			$btn['url'] = $data;
		} else {
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