<?php


namespace telegram\query;


use telegram\TelegramBotApi;
use telegram\exception\TelegramException;
use telegram\object\TMessage;
use telegram\object\markup\AbstractMarkup;

class TSendMessageQuery extends TBaseQuery{
    public function __construct(TelegramBotApi $api){
        parent::__construct($api, 'sendMessage', false);
    }
    /**
     * @return TSendMessageQuery
     */
    public function chat_id($value){
        return $this->put(__FUNCTION__, $value);
    }
    /**
     * @return TSendMessageQuery
     */
    public function text($value){
        return $this->put(__FUNCTION__, (string)$value);
    }
    /**
     * @return TSendMessageQuery
     */
    public function parse_mode($value){
        return $this->put(__FUNCTION__, (string)$value);
    }
    /**
     * @return TSendMessageQuery
     */
    public function disable_web_page_preview($value){
        return $this->put(__FUNCTION__, (bool)$value);
    }
    /**
     * @return TSendMessageQuery
     */
    public function disable_notification($value){
        return $this->put(__FUNCTION__, (bool)$value);
    }
    /**
     * @return TSendMessageQuery
     */
    public function reply_to_message_id($value){
        return $this->put(__FUNCTION__, (int)$value);
    }
    
    /**
     * @param array|TAbstractMarkup
     * @return TSendMessageQuery
     */
    public function reply_markup($value){
        if(is_array($value)){
            return $this->put(__FUNCTION__, $value);
        }
        elseif($value instanceof AbstractMarkup){
            return $this->put(__FUNCTION__, $value->getMarkup());
        }
        else {
            throw new TelegramException('Invalid reply_markup parameter');
        }
    }
    
    /**
     * @return TMessage
     */
    public function query(){
        return parent::query();
    }
}