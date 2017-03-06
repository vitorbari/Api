<?php namespace TelegramBot\Api\Types\Inline;

class InlineKeyboardButton
{
    /**
     * Label text on the button
     *
     * @var string
     */
    public $text;

    /**
     * Optional. HTTP url to be opened when button is pressed
     *
     * @var null
     */
    public $url;

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed,
     * 1-64 bytes
     *
     * @var null
     */
    public $callback_data;

    /**
     * Optional. If set, pressing the button will prompt the user
     * to select one of their chats, open that chat and insert the
     * bot‘s username and the specified inline query in the input field.
     * Can be empty, in which case just the bot’s username will be inserted.
     *
     * @var null
     */
    public $switch_inline_query;

    /**
     * Optional. If set, pressing the button will insert the bot‘s
     * username and the specified inline query in the current chat's input field.
     * Can be empty, in which case only the bot’s username will be inserted.
     *
     * @var null
     */
    public $switch_inline_query_current_chat;

    public function __construct(
        $text,
        $url = '',
        $callback_data = '',
        $switch_inline_query = '',
        $switch_inline_query_current_chat = ''
    ) {
        $this->text                             = $text;
        $this->url                              = $url;
        $this->callback_data                    = $callback_data;
        $this->switch_inline_query              = $switch_inline_query;
        $this->switch_inline_query_current_chat = $switch_inline_query_current_chat;
    }
}