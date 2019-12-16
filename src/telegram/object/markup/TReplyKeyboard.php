<?php
namespace telegram\object\markup;

/**
 * --EN--
 * This object represents a custom keyboard with reply options 
 *
 * --RU--
 * Отображает клавиатуру возле поля для ввода сообщения
 * 
 * @see https://core.telegram.org/bots/api#replykeyboardmarkup
 */
class TReplyKeyboard extends AbstractMarkup {

	/**
	 * @var array
	 */
	protected $params = [];

	/**
	 * Кнопки
	 * @var array
	 */
	protected $buttons = [];

	/**
	 * Указатель текущей строки в кнопках
	 * @var int
	 */
	protected $row = -1;

	public function __construct(array $params = []){
		$this->params = $params;
		$this->row();
	}

	/**
     * Добавить новую строку в панель кнопок
	 * @return TReplyKeyboard
	 */
	public function row(){
		$this->row++;
		if(!isset($this->buttons[$this->row])) $this->buttons[$this->row] = [];

		return $this;
	}

	/**
	 * Добавить кнопку
	 * @param  string      $text     			Текст кнопки
	 * @return TReplyKeyboard
	 */
	public function button(string $text){
		$this->buttons[$this->row][] = ['text' => $text];
		
		return $this;
	}

	/**
	 * Указывает клиенту подогнать высоту клавиатуры под количество кнопок 
	 * (сделать её меньше, если кнопок мало и наоборот)
	 * @param bool $value 
	 * @return TReplyKeyboard
	 */
	public function setResize(bool $value){
		$this->params['resize_keyboard'] = $value;
		return $this;
	}

	/**
	 * Указывает клиенту скрыть клавиатуру после использования (после нажатия на кнопку). 
	 * Её по-прежнему можно будет открыть через иконку в поле ввода сообщения.  
	 * @param bool $value 
	 * @return TReplyKeyboard
	 */
	public function setOneTime(bool $value){
		$this->params['one_time_keyboard'] = $value;
		return $this;
	}

	/**
	 * @param bool $value 
	 * @return TReplyKeyboard
	 */
	public function setSelective(bool $value){
		$this->params['selective'] = $value;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getMarkup(): array {
		$markup = $this->params;
		$markup['keyboard'] = $this->buttons;

		return $markup;
	}
}