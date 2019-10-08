<?php
/**
 * Created by PhpStorm.
 * User: chinwe.jing
 * Date: 2019/10/8
 * Time: 14:58
 */

namespace numberFormat;


class NumberFormat
{
    /**
     * 格式化字节
     * @param int $num 数字
     * @param int $precision 精度
     * @return string
     */
    public static function byteFormat($num = 0, $precision = 1)
    {
        if ($num >= 10000000000000) {
            $num = round($num / 1099511627776, $precision);
            $unit = 'TB';
        } elseif ($num >= 10000000000) {
            $num = round($num / 1073741824, $precision);
            $unit = 'GB';
        } elseif ($num >= 1000000) {
            $num = round($num / 1048576, $precision);
            $unit = 'MB';
        } elseif ($num >= 1000) {
            $num = round($num / 1024, $precision);
            $unit = 'KB';
        } else {
            return number_format($num) . ' Bytes';
        }

        return number_format($num, $precision) . ' ' . $unit;
    }
}