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
 * Class LFTPEntry
 * @package MitLFTPParser
 */
class LFTPEntry
{
    /**
     * @var
     */
    private $time;

    /**
     * @var
     */
    private $date;

    /**
     * @var
     */
    private $fromlink;

    /**
     * @var
     */
    private $tolink;

    /**
     * @var
     */
    private $speed;


    /**
     * @param $speed
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }


    /**
     * @param $tolink
     * @return $this
     */
    public function setTolink($tolink)
    {
        $this->tolink = $tolink;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getTolink()
    {
        return $this->tolink;
    }


    /**
     * @param $fromlink
     * @return $this
     */
    public function setFromlink($fromlink)
    {
        $this->fromlink = $fromlink;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getFromlink()
    {
        return $this->fromlink;
    }


    /**
     * @param $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }


    /**
     * @param $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

}
