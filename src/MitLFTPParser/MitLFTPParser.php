<?php
/**
 *
 * This software is distributed under the GNU GPL v3.0 license.
 *
 * @author    XpamAmAdEuS
 * @copyright 2017 http://muzikaito.hr
 * @license   http://www.gnu.org/licenses/gpl-3.0.txt
 * @link      https://github.com/XpamAmAdEuS/MitLFTPParser
 *
 */

namespace MitLFTPParser;

/**
 * Class MitLFTPParser
 * @package MitLFTPParser
 */
class MitLFTPParser
{
    /**
     * @param $file
     * @return array
     * @throws Exception
     */
    public  function parseDatafromFile($file)
    {
        $str = @file_get_contents($file);
        if (false === $str) {
            throw new Exception('Can\'t read file.');
        }

        return $this->parseData($str);
    }

    /**
     * @param $str
     * @return array
     */
    public function parseData($str)
    {
        $data = array();
        $lines = explode("\n", $str);

        while (list(, $line) = each($lines)) {

            $entry = $this->parseDataLine($line, $lines);
            if (null === $entry) {
                continue;
            }

            $data[] = $entry;
        }

        return $data;
    }

    /**
     * @param $lineStr
     * @param array $linesStr
     * @return LFTPEntry
     */
    protected function parseDataLine($lineStr, array $linesStr)
    {
        $entry = new LFTPEntry();
        $lineStr = trim($lineStr);
        $pieces = explode(' ',"$lineStr       ");
        $dateStr = $pieces[0];
        $timeStr = $pieces[1];
        $fromStr = $pieces[2];
        $toStr = $pieces[4];
        $speedStr = $pieces[6].' /'.$pieces[7];
        $entry->setDate($dateStr);
        $entry->setTime($timeStr);
        $entry->setFromlink($fromStr);
        $entry->setTolink($toStr);
        $entry->setSpeed($speedStr);
        return $entry;

    }
}