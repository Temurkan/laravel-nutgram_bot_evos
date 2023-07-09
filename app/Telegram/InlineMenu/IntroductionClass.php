<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\Telegram\InlineMenu;

use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class IntroductionClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsani tanlang', [
            'reply_markup' => InlineKeyboardMarkup::make()
                ->addRow(
                    InlineKeyboardButton::make('Install', callback_data: 'install'),
                    InlineKeyboardButton::make('Laravel', callback_data: 'laravel')
                )
                ->addRow(
                    InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),

                )
            ]
        );

        $bot->onCallbackQueryData('install', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'text' => 'Darslar tez kunda yuklanadi'
            ]);
        });

        $bot->onCallbackQueryData('laravel', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'text' => 'Darslar tez kunda yuklanadi'
            ]);
        });
    }
}
