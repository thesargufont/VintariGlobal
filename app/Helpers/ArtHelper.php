<?php
namespace artemis\Helpers;
use Carbon\Carbon;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

/**
 * Class Helper Artemis untuk fungsi-fungsi yang dapat digunakan secara umum di artemis
 */
class ArtHelper {
    /**
     * untuk format angka sesuai setting di file config/app.php
     * contoh penggunaan: Arthelper::number_format(1000.123); akan menghasilkan 1.000,12
     */
    public static function number_format($number, $decimals=2) {
        $decpoint = config('app.decimal_point',',');
        $thousandsep = config('app.thousand_separator','.');
        return number_format($number, $decimals, $decpoint, $thousandsep);
    }

    public static function realClientIp(){
        $ip = getenv('HTTP_CLIENT_IP')?:getenv('HTTP_X_FORWARDED_FOR')?:getenv('HTTP_X_FORWARDED')?:getenv('HTTP_FORWARDED_FOR')?:getenv('HTTP_FORWARDED')?:getenv('REMOTE_ADDR');
        return $ip;
    }

    /**
     * memeriksa apakah timestamp yang dimasukkan valid untuk mysql,
     * 
     * @param integer timestamp berupa integer, contoh: 1234
     * @return boolean Jika Valid untuk mysql, maka akan bernilai true, selain itu false 
     */
    public static function isValidMysqlTimestamp($timestamp)
    {
        return ((string) (int) $timestamp === (string) $timestamp) 
        && ($timestamp <= 2147483647)
        && ($timestamp >= 1);        
    }

    /**
     * Konversi dari timestamp ke timestamp yang valid untuk mysql,
     * jika lebih dari 2038-01-19 03:14:07 UTC akan diadjust ke 2038-01-19 03:14:07 UTC
     * jika kurang dari 1970-01-01 00:00:01 UTC akan diadjust ke 1970-01-01 00:00:01 UTC
     * 
     * @param integer timestamp berupa integer, contoh: 1234
     * @return integer timestamp berupa integer 
     */
    public static function validMysqlTimestamp($timestamp)
    {
        if ((string) (int) $timestamp === (string) $timestamp)
        {
            if($timestamp > 2147483647)
            {
                return 2147483647;
            } else if($timestamp < 1) {
                return 1;
            } else return $timestamp;
        } else {
            return 1;
        }
    }

    /**
     * Konversi dari Carbon object ke timestamp yang valid untuk mysql,
     * jika lebih dari 2038-01-19 03:14:07 UTC akan diadjust ke 2038-01-19 03:14:07 UTC
     * jika kurang dari 1970-01-01 00:00:01 UTC akan diadjust ke 1970-01-01 00:00:01 UTC
     * 
     * @param Carbon\Carbon datetime berupa object Carbon, contoh: Carbon::now()
     * @return integer timestamp berupa integer 
     */
    public static function carbonToValidMysqlTimestamp(Carbon $carbon)
    {
        $timestamp = $carbon->timestamp;
        if ((string) (int) $timestamp === (string) $timestamp)
        {
            if($timestamp > 2147483647)
            {
                return 2147483647;
            } else if($timestamp < 1) {
                return 1;
            } else return $timestamp;
        } else {
            return 1;
        }
    }

    /**
     * Konversi dari Carbon object ke timestamp yang valid untuk mysql dalam format Carbon object,
     * jika lebih dari 2038-01-19 03:14:07 UTC akan diadjust ke 2038-01-19 03:14:07 UTC
     * jika kurang dari 1970-01-01 00:00:01 UTC akan diadjust ke 1970-01-01 00:00:01 UTC
     * 
     * @param Carbon\Carbon datetime berupa object Carbon, contoh: Carbon::now()
     * @return Carbon\Carbon datetime berupa object Carbon
     */
    public static function carbonToValidMysqlTimestampCarbon(Carbon $carbon)
    {
        $timestamp = $carbon->timestamp;
        if ((string) (int) $timestamp === (string) $timestamp)
        {
            if($timestamp > 2147483647)
            {
                return Carbon::createFromTimeStamp(2147483647);
            } else if($timestamp < 1) {
                return Carbon::createFromTimeStamp(1);
            } else return Carbon::createFromTimeStamp($timestamp);
        } else {
            return Carbon::createFromTimeStamp(1);
        }
    }

    /**
     * Konversi dari string datetime ke timestamp yang valid untuk mysql,
     * jika lebih dari 2038-01-19 03:14:07 UTC akan diadjust ke 2038-01-19 03:14:07 UTC
     * jika kurang dari 1970-01-01 00:00:01 UTC akan diadjust ke 1970-01-01 00:00:01 UTC
     * 
     * @param string string datetime, contoh: '2020-11-03 09:00:10' / 'yesterday' / etc
     * @return integer timestamp berupa integer 
     */
    public static function datetimestrToValidMysqlTimestamp($datetimestr)
    {
        $timestamp = Carbon::parse($datetimestr)->timestamp;
        if ((string) (int) $timestamp === (string) $timestamp)
        {
            if($timestamp > 2147483647) // 2038-01-19 03:14:07 UTC
            {
                return 2147483647;
            } else if($timestamp < 1) {
                return 1; // 1970-01-01 00:00:01 UTC
            } else return $timestamp;
        } else {
            return 1;
        }
    }

}