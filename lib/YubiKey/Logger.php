<?php
/**
 * This source file is subject to the new BSD license that is
 * available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @category   Pimcore
 * @copyright  Copyright (c) 2015 Weblizards GmbH (http://www.weblizards.de)
 * @author     Thomas Keil <thomas@weblizards.de>
 * @license    http://www.pimcore.org/license     New BSD License
 */

namespace YubiKey;
use Pimcore\Log;


/**
 * Class Logger
 * @package YubiKey
 *
 * Writes messages generated by the authentication process into
 * a dedicated logfile /website/var/log/YubiKey
 */
class Logger {
  /**
   * @param $message
   */
  public static function log($message) {
    self::_log($message);
  }

  /**
   * @param $message
   */
  public static function debug($message) {
    self::_log("Debug: ".$message);
  }

  /**
   * @param $message
   */
  public static function error($message) {
    self::_log("Error: ".$message);
  }

  /**
   * @param $message
   */
  private static function _log($message) {
    Log\Simple::log("YubiKey", "[Local Auth] ".$message);
  }
}