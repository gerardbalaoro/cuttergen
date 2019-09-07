<?php

namespace CutterGen;

/**
 * Library of Congress Cutter Number Generation Library.
 * This package follows the specifications provided at the
 * Classification and Shelflisting Manual Instruction Sheet G63
 * 
 * @package CutterGen\CutterGen
 * @author Gerard Balaoro <gmbalaoro@outlook.com>
 * @version 1.0.0
 * @license MIT
 * @copyright 2019 Gerard Balaoro
 */
class CutterGen
{
	/**
	 * @var integer Default expansion length
	 */
	protected $length = 1;

	/**
	 * @var array Custom handlers
	 */
	protected $handlers = [];

	/**
	 * Initialize new CutterGen instance
	 * 
	 * @param integer $length Default cutter expansion length
	 */
	public function __construct(int $length = 1)
	{
		$this->setLength($length);
	}

	/**
	 * Generate cutter number from name 
	 * 
	 * @param string $name
	 * @param integer $length Expansion length
	 * 
	 * @return string
	 */
	public function generate(string $name = null, int $length = null)
	{
		$name = self::sanitize($name);

		if ($name) {
			return $this->getCutterInitials($name) . $this->getCutterExpansion($name, $length ?: $this->getLength());
		} else {
			return false;
		}
	}

	/**
	 * Set default expansion length
	 *
	 * @param integer $value
	 */
	public function setLength(int $value)
	{
		$this->length = ($value >= -1) ? $value : $this->length;
	}

	/**
	 * Get default expansion length
	 * 
	 * @return integer
	 */
	public function getLength()
	{
		return $this->length;
	}

	/**
	 * Set custom handler method
	 *
	 * @param string $key Handler name
	 * @param callable|null $action Callable object or `null`
	 * 
	 * Supported handlers are as follows:
	 * 	- **qa-qt** - passes: second letter as $char; return value to be appended to initial 'Q'
	 * 
	 * To unset a custom handler, pass `null` and the package will
	 * use the default handler.
	 */
	public function setHandler(string $key, $action)
	{
		$this->handlers[$key] = $action;
	}

	/**
	 * Get handler method
	 *
	 * @param string $key handler name
	 * @return callable
	 */
	protected function getHandler(string $key)
	{
		return (array_key_exists($key, $this->handlers) ? $this->handlers : [
			'qa-qt' => function ($char) {
				return (string) ($char ? ord(strtolower($char)) - 95 : 0);
			},
		])[$key];
	}

	/**
	 * Get cutter number initials
	 *
	 * @param string $name 
	 * @return string
	 */
	protected function getCutterInitials(string $name)
	{
		list($first, $second, $third) = self::getNthChar(strtolower($name), 0, 1, 2);
		$initials = strtoupper($first);

		if (in_array($first, ['a', 'e', 'i', 'o', 'u'])) {
			if (in_array($second, range('a', 'c'))) {
				$initials .= '2';
			} elseif (in_array($second, range('d', 'k'))) {
				$initials .= '3';
			} elseif (in_array($second, range('l', 'm'))) {
				$initials .= '4';
			} elseif (in_array($second, range('n', 'o'))) {
				$initials .= '5';
			} elseif (in_array($second, range('p', 'q'))) {
				$initials .= '6';
			} elseif (in_array($second, ['r'])) {
				$initials .= '7';
			} elseif (in_array($second, range('s', 't'))) {
				$initials .= '8';
			} elseif (in_array($second, range('u', 'z'))) {
				$initials .= '9';
			}
		} elseif ($first == 's') {
			if ($second . $third == 'ch') {
				$initials .= '3';
			} elseif (in_array($second, range('a', 'd'))) {
				$initials .= '2';
			} elseif (in_array($second, range('e', 'g'))) {
				$initials .= '4';
			} elseif (in_array($second, range('h', 'l'))) {
				$initials .= '5';
			} elseif (in_array($second, range('m', 's'))) {
				$initials .= '6';
			} elseif (in_array($second, ['t'])) {
				$initials .= '7';
			} elseif (in_array($second, range('u', 'v'))) {
				$initials .= '8';
			} elseif (in_array($second, range('w', 'z'))) {
				$initials .= '9';
			}
		} elseif ($first == 'q') {
			if ($second == 'u') {
				if (in_array($third, range('a', 'd'))) {
					$initials .= '3';
				} elseif (in_array($third, range('e', 'h'))) {
					$initials .= '4';
				} elseif (in_array($third, range('i', 'n'))) {
					$initials .= '5';
				} elseif (in_array($third, range('o', 'q'))) {
					$initials .= '6';
				} elseif (in_array($third, range('r', 's'))) {
					$initials .= '7';
				} elseif (in_array($third, range('t', 'x'))) {
					$initials .= '8';
				} elseif (in_array($third, range('y', 'z'))) {
					$initials .= '9';
				}
			} elseif (in_array($second, range('a', 't'))) {
				$initials .= $this->getHandler('qa-qt')($second);
			} else {
				goto other_consonants;
			}
		} else {
			other_consonants: {
				if (in_array($second, range('a', 'd'))) {
					$initials .= '3';
				} elseif (in_array($second, range('e', 'h'))) {
					$initials .= '4';
				} elseif (in_array($second, range('i', 'n'))) {
					$initials .= '5';
				} elseif (in_array($second, range('o', 'q'))) {
					$initials .= '6';
				} elseif (in_array($second, range('r', 't'))) {
					$initials .= '7';
				} elseif (in_array($second, range('u', 'x'))) {
					$initials .= '8';
				} elseif (in_array($second, range('y', 'z'))) {
					$initials .= '9';
				}
			}
		}

		return $initials;
	}

	/**
	 * Get cutter expansion
	 *
	 * @param string $name
	 * @param integer $length Expansion length
	 * 
	 * @return string
	 */
	protected function getCutterExpansion(string $name, int $length = 1)
	{
		list($first, $second, $third) = self::getNthChar(strtolower($name), 0, 1, 2);
		$expansion = '';

		if (($first == 's' && $second . $third == 'ch') || ($first == 'q' && ($second == 'u'))) {
			$expandable = substr($name, 3);
		} else {
			$expandable = substr($name, 2);
		}

		for ($i = 0; $i < strlen($expandable) && ($length == -1 || $i < $length); $i++) {
			$expansion .= $this->getCharExpansion(self::getNthChar($expandable, $i));
		}

		return $expansion;
	}

	/**
	 * Get character expansion value
	 *
	 * @param string $char
	 * @return integer
	 */
	protected function getCharExpansion(string $char)
	{
		$char = strtolower(self::getNthChar($char, 0));

		if (in_array($char, range('a', 'd'))) {
			return 3;
		} elseif (in_array($char, range('e', 'h'))) {
			return 4;
		} elseif (in_array($char, range('i', 'l'))) {
			return 5;
		} elseif (in_array($char, range('m', 'o'))) {
			return 6;
		} elseif (in_array($char, range('p', 's'))) {
			return 7;
		} elseif (in_array($char, range('t', 'v'))) {
			return 8;
		} elseif (in_array($char, range('w', 'z'))) {
			return 9;
		} else {
			return 0;
		}
	}

	/**
	 * Get the nth character from string
	 * 
	 * If multiple $n is passed, the method will return an array
	 *
	 * @param string $string
	 * @param integer $n Character position, counting from zero
	 * 
	 * @return string|array
	 */
	private static function getNthChar(string $string, ...$n)
	{
		if (empty($n)) return null;

		$chars = [];
		foreach ($n as $i) {
			$chars[] = substr($string, $i, 1);
		}
		return count($chars) > 1 ? $chars : $chars[0];
	}

	/**
	 * Replace non-latin, numeric, and special characters from string
	 *
	 * This converts non-latin characters to their closest latin counterparts
	 * and removes whitespace, numeric charaters, and symbols
	 * 
	 * @param string $string
	 * @return string
	 */
	private static function sanitize(string $string)
	{
		return iconv('UTF-8', 'ASCII//TRANSLIT', preg_replace('/[^\p{L}\p{N}]/u', '', $string));
	}
}
