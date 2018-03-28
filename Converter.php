<?php

namespace omidsaifpanahi\converter;
use Yii;
/**
 * This is just an example.
 */
class Converter extends \yii\base\Widget
{
    public function persianDate($timestamp = null, $format = 'yyyy/MM/dd', $calenderLang = 'en-US', $calender = 'persian')
    {
        if ($timestamp == null) $timestamp = time();
        $fmt = datefmt_create($calenderLang . "@calendar=" . $calender, \IntlDateFormatter::FULL, \IntlDateFormatter::NONE, 'Asia/Tehran', \IntlDateFormatter::TRADITIONAL, $format);
        return $fmt->format($timestamp);
    }
}
