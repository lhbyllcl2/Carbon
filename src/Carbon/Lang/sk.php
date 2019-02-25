<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Authors:
 * - Philippe Vaucher
 * - Martin Suja
 * - Tsutomu Kuroda
 * - tjku
 * - Max Melentiev
 * - Juanito Fatas
 * - Ivan Stana
 * - Akira Matsuda
 * - Christopher Dell
 * - James McKinney
 * - Enrique Vidal
 * - Simone Carletti
 * - Aaron Patterson
 * - Jozef Fulop
 * - Nicolás Hock Isaza
 * - Tom Hughes
 * - Simon Hürlimann (CyT)
 * - jofi
 */
return [
    'year' => 'rok|:count roky|:count rokov',
    'y' => ':count r',
    'month' => 'mesiac|:count mesiace|:count mesiacov',
    'm' => ':count m',
    'week' => 'týždeň|:count týždne|:count týždňov',
    'w' => ':count t',
    'day' => 'deň|:count dni|:count dní',
    'd' => ':count d',
    'hour' => 'hodinu|:count hodiny|:count hodín',
    'h' => ':count h',
    'minute' => 'minútu|:count minúty|:count minút',
    'min' => ':count min',
    'second' => 'sekundu|:count sekundy|:count sekúnd',
    's' => ':count s',
    'ago' => 'pred :time',
    'from_now' => 'za :time',
    'after' => 'o :time neskôr',
    'before' => ':time predtým',
    'year_ago' => 'rokom|:count rokmi|:count rokmi',
    'month_ago' => 'mesiacom|:count mesiacmi|:count mesiacmi',
    'week_ago' => 'týždňom|:count týždňami|:count týždňami',
    'day_ago' => 'dňom|:count dňami|:count dňami',
    'hour_ago' => 'hodinou|:count hodinami|:count hodinami',
    'minute_ago' => 'minútou|:count minútami|:count minútami',
    'second_ago' => 'sekundou|:count sekundami|:count sekundami',
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'list' => [', ', ' a '],
    'formats' => [
        'L' => 'DD.MM.YYYY',
        'LL' => 'DD. MMMM YYYY',
        'LLL' => 'D. M. HH:MM',
        'LLLL' => 'dddd D. MMMM YYYY HH:MM',
    ],
    'weekdays' => ['Nedeľa', 'Pondelok', 'Utorok', 'Streda', 'Štvrtok', 'Piatok', 'Sobota'],
    'weekdays_short' => ['Ne', 'Po', 'Ut', 'St', 'Št', 'Pi', 'So'],
    'weekdays_min' => ['Ne', 'Po', 'Ut', 'St', 'Št', 'Pi', 'So'],
    'months' => ['Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December'],
    'months_short' => ['Jan', 'Feb', 'Mar', 'Apr', 'Máj', 'Jún', 'Júl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
    'meridiem' => ['dopoludnia', 'popoludní'],
];
