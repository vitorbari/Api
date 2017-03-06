<?php
/**
 * Created by PhpStorm.
 * User: iGusev
 * Date: 14/04/16
 * Time: 23:48
 */

namespace TelegramBot\Api\Types\Inline;

class InlineKeyboardMarkup
{
    /**
     * Array of button rows, each represented by an Array of Strings
     * Array of Array of String
     *
     * @var array
     */
    public $inline_keyboard;

    public function __construct($inline_keyboard)
    {
        $this->inline_keyboard = $inline_keyboard;
    }

    public function toJson($inner = false)
    {
        return json_encode($this);
    }
}
