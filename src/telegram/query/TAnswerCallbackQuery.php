<?php
namespace telegram\query;


use telegram\TelegramBotApi;
use telegram\exception\TelegramException;
use telegram\object\TMessage;
use telegram\object\markup\AbstractMarkup;

/**
 * --EN--
 * Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
 *
 * --RU--
 * Метод для ответа на callbackQuery, поступающий при нажатии на кнопку InlineKeyboard
 * 
 * @see https://core.telegram.org/bots/api#answercallbackquery
 */
class TAnswerCallbackQuery extends TBaseQuery {
    public function __construct(TelegramBotApi $api){
        parent::__construct($api, 'answerCallbackQuery', false);
    }

    /**
     * --EN--
     * Unique identifier for the query to be answered
     * 
     * @param string $value
     * @return TAnswerCallbackQuery
     */
    public function callback_query_id(string $value){
        return $this->put(__FUNCTION__, $value);
    }

    /**
     * --EN--
     * Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     * 
     * @param string $value
     * @return TAnswerCallbackQuery
     */
    public function text(string $value){
        return $this->put(__FUNCTION__, $value);
    }

    /**
     * --EN--
     * URL that will be opened by the user's client. 
     * 
     * @param string $value
     * @return TAnswerCallbackQuery
     */
    public function url(string $value){
        return $this->put(__FUNCTION__, $value);
    }
    
    /**
     * --EN--
     * If true, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to false.
     * 
     * @param string $value
     * @return TAnswerCallbackQuery
     */
    public function show_alert(bool $value){
        return $this->put(__FUNCTION__, $value);
    }

    /**
     * --EN--
     * The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     * 
     * @param string $value
     * @return TAnswerCallbackQuery
     */
    public function cache_time(int $value){
        return $this->put(__FUNCTION__, $value);
    }
}