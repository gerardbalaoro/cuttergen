<?php

namespace CutterGen;

/**
 * Cutter Number Generation Utility
 */
class CutterGen
{
	/**
	 * Author's name
	 *
	 * @var string
	 */
	protected $name = null;

	/**
	 * Cutter number expansion length
	 *
	 * @var integer
	 */
	protected $length = 1;

	/**
	 * Get/set author name
	 *
	 * @param string $name
	 * @return string
	 */
	public function name(string $name = null)
	{
		if ($name !== null) {
			$this->name = $name;
		}

		return $this->name;
	}

	/**
	 * Get/set cutter number expansion length
	 *
	 * @param integer $length
	 * @return integer
	 */
	public function length(int $length = null)
	{
		if ($length !== null && (int) $length < 1) {
			$this->length = (int) $length;
		}

		return $this->length;
	}

	/**
	 * Generate cutter number
	 *
	 * @param string $name
	 * @param integer $length
	 * @return string
	 */
	public function generate(string $name = null, int $length = null)
	{
		$name = $name ?: $this->name;

		if ($name) {
			return $this->getFirstCutterChar($name) . $this->getSecondCutterChar($name) . $this->getCutterExpansion($name, $length ?: $this->length);
		} else {
			return false;
		}
	}

	/**
	 * Get first cutter number character
	 *
	 * @param string $name
	 * @return string
	 */
	protected function getFirstCutterChar(string $name)
	{
		return strtoupper($this->getNthChar($name, 0));
	}

	/**
	 * Get second cutter number character
	 *
	 * @param string $name
	 * @return string
	 */
	protected function getSecondCutterChar(string $name)
	{
		$first = strtolower($this->getNthChar($name, 0));
		$second = strtolower($this->getNthChar($name, 1));
		$third = strtolower($this->getNthChar($name, 2));

		if (in_array($first, ['a', 'e', 'i', 'o', 'u'])) {
			if (in_array($second, range('a', 'c'))) {
				return '2';
			} elseif (in_array($second, range('d', 'k'))) {
				return '3';
			} elseif (in_array($second, range('l', 'm'))) {
				return '4';
			} elseif (in_array($second, range('n', 'o'))) {
				return '5';
			} elseif (in_array($second, range('p', 'q'))) {
				return '6';
			} elseif (in_array($second, ['r'])) {
				return '7';
			} elseif (in_array($second, range('s', 't'))) {
				return '8';
			} elseif (in_array($second, range('u', 'z'))) {
				return '9';
			}
		} elseif ($first == 's') {
			if ($second . $third == 'ch') {
				return '3';
			} elseif (in_array($second, range('a', 'd'))) {
				return '2';
			} elseif (in_array($second, range('e', 'g'))) {
				return '4';
			} elseif (in_array($second, range('h', 'l'))) {
				return '5';
			} elseif (in_array($second, range('m', 's'))) {
				return '6';
			} elseif (in_array($second, ['t'])) {
				return '7';
			} elseif (in_array($second, range('u', 'v'))) {
				return '8';
			} elseif (in_array($second, range('w', 'z'))) {
				return '9';
			}
		} elseif ($first == 'q') {
			if ($second == 'u') {
				if (in_array($third, range('a', 'd'))) {
					return '3';
				} elseif (in_array($third, range('e', 'h'))) {
					return '4';
				} elseif (in_array($third, range('i', 'n'))) {
					return '5';
				} elseif (in_array($third, range('o', 'q'))) {
					return '6';
				} elseif (in_array($third, range('r', 's'))) {
					return '7';
				} elseif (in_array($third, range('t', 'x'))) {
					return '8';
				} elseif (in_array($third, range('y', 'z'))) {
					return '9';
				}
			} else {
				return (string) $this->numerizeChar($third);
			}
		} else {
			if (in_array($second, range('a', 'd'))) {
				return '3';
			} elseif (in_array($second, range('e', 'h'))) {
				return '4';
			} elseif (in_array($second, range('i', 'n'))) {
				return '5';
			} elseif (in_array($second, range('o', 'q'))) {
				return '6';
			} elseif (in_array($second, range('r', 't'))) {
				return '7';
			} elseif (in_array($second, range('u', 'x'))) {
				return '8';
			} elseif (in_array($second, range('y', 'z'))) {
				return '9';
			}
		}
	}

	/**
	 * Get cutter number expansion characters
	 *
	 * @param string $name
	 * @param integer $length
	 * @return string
	 */
	protected function getCutterExpansion(string $name, int $length = 1)
	{
		$first = strtolower($this->getNthChar($name, 0));
		$second = strtolower($this->getNthChar($name, 1));
		$third = strtolower($this->getNthChar($name, 2));
		$expansion = '';

		if (($first == 'q' && !in_array($second, range('v', 'z'))) or ($first == 's' && $second . $third == 'ch')) {
			$substr = substr($name, 3);
		} else {
			$substr = substr($name, 2);
		}

		for ($i=0; $i < $length && $i < strlen($substr) ; $i++) {
			$expansion .= $this->getCharExpansion($this->getNthChar($substr, $i));
		}

		return $expansion;
	}

	/**
	 * Get numerical expansion of a character
	 *
	 * @param string $char
	 * @return integer
	 */
	protected function getCharExpansion(string $char)
	{
		$char = strtolower($this->getNthChar($char, 0));

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
	 * This converts non-latin characters to their closest latin counterparts
	 * and removes whitespace, numeric charaters, and symbols
	 *
	 * @param string $string
	 * @param integer $n Character position, counting from zero
	 * @return string
	 */
	protected function getNthChar(string $string, int $n)
	{
		return substr($this->sanitize($string), $n, 1);
	}

	/**
	 * Replace non-latin, numeric, and special characters from string
	 *
	 * This converts non-latin characters to their closest latin counterparts
	 * and removes whitespace, numeric charaters, and symbols
	 * 
	 * @param string $name
	 * @return string
	 */
	protected function sanitize(string $name)
	{
		return iconv('UTF-8', 'ASCII//TRANSLIT', preg_replace('/[^\p{L}\p{N}]/u', '', $name));
	}

	/**
	 * Get the numeric version of a letter
	 *  
	 * This converts non-latin characters to their closest latin counterparts
	 * and removes whitespace, numeric charaters, and symbols
	 *
	 * @param string $char
	 * @return integer
	 */
	protected function numerizeChar(string $char)
	{
		return $char ? ord(strtolower($this->sanitize($char))) - 95 : 0;
	}
}
