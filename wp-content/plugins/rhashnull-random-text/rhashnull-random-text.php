<?php

/**
 * Plugin Name: Rhashnull random text
 * Plugin URI: https://wordpress.org/plugins/
 * Description: It's a random app text, so that's cool 
 * Version: 1.0.0
 * Requires at least: 5.1
 * Requires PHP: 7.4
 * Author:Rhashnull
 * Author URI: https://rhashnull.com/
 * Licence: GPLv2 later
 * Licence URI: https://rhashnull.com/
 */

defined("ABSPATH") || exit;

define("RHASHNULL_RANDOM_TEXT_VIEW", plugin_dir_path(__FILE__) . "view/");

function rhashnull_random_text_style()
{

    include(RHASHNULL_RANDOM_TEXT_VIEW . "style.php");
}

add_action("wp_head", "rhashnull_random_text_style");

function rhashnull_random_text_body()
{
    $texts = [
        [
            'content'   => 'و جن و انس را نيافريدم جز براى آنكه مرا بپرستند ',
            'path'      => 'ذاریات 56',
        ],
        [
            'content'   => 'خدا مقرر كرده است كه حتما من و فرستادگانم چيره خواهيم گرديد آرى خدا نيرومند شكست‏ناپذير است ',
            'path'      => '(مجادله 21)',
        ],
        [
            'content'   => 'اگر اين قرآن را بر كوهى فرومى‏فرستاديم يقينا آن [كوه] را از بيم خدا فروتن [و] از هم ‏پاشيده مى‏ديدى و اين مثلها را براى مردم مى‏زنيم باشد كه آنان بينديشند ',
            'path'      => '(حشر 21)',
        ],
        [
            'content'   => 'بى‏همسران خود و غلامان و كنيزان درستكارتان را همسر دهيد اگر تنگدستند خداوند آنان را از فضل خويش بى‏نياز خواهد كرد و خدا گشايشگر داناست ',
            'path'      => '(نور 32)',
        ],
        [
            'content'   => 'آن روز كه [ما] به دوزخ مى‏گوييم آيا پر شدى و مى‏گويد آيا باز هم هست ',
            'path'      => '(ق 30)',
        ],
        [
            'content'   => 'درباره شراب و قمار از تو مى‏پرسند بگو در آن دوگناهى بزرك و سودهايى براى مردم است و[لى] گناهشان از سودشان بزرگتر است و از تو مى‏پرسند چه چيزى انفاق كنند بگو مازاد [بر نيازمندى خود] را اين گونه خداوند آيات [خود را] براى شما روشن مى‏گرداند باشد كه بينديشيد ',
            'path'      => '(بقره 219)',
        ],
        [
            'content'   => 'اى كسانى كه ايمان آورده‏ايد از بسيارى از گمانها بپرهيزيد كه پاره‏اى از گمانها گناه است و جاسوسى مكنيد و بعضى از شما غيبت بعضى نكند آيا كسى از شما دوست دارد كه گوشت برادر مرده‏اش را بخورد از آن كراهت داريد [پس] از خدا بترسيد كه خدا توبه‏پذير مهربان است ',
            'path'      => '(حجرات 12)',
        ],
        [
            'content'   => 'بگو اى بندگان من كه بر خويشتن زياده‏روى روا داشته‏ايد از رحمت‏خدا نوميد مشويد در حقيقت‏خدا همه گناهان را مى‏آمرزد كه او خود آمرزنده مهربان است ',
            'path'      => '(زمر 53)',
        ],
        [
            'content'   => 'پس هر كه هموزن ذره‏اى نيكى كند [نتيجه] آن را خواهد ديد و هر كه هموزن ذره‏اى بدى كند [نتيجه] آن را خواهد ديد',
            'path'      => '(7و8 زلزال)',
        ],
        [
            'content'   => 'پس [بدان كه] با دشوارى آسانى است آرى با دشوارى آسانى است ',
            'path'      => '(5و6 انشراح)',
        ],
    ];

    $text = $texts[rand(0, count($texts)-1)];

    $path = $text["path"];
    $content = $text["content"];

    include(RHASHNULL_RANDOM_TEXT_VIEW . "body.php");
}

add_action("wp_footer", "rhashnull_random_text_body");