<?php

class CutterGen {
	public $name = null;
	public $year = null;
	public $version = null;
	public $lenght = 3;

  	public function values($name = null, $year = null, $version = null) {
		$this->name = $name ?: $this->name;
		$this->year = $year ?: $this->year;
		$this->version = $version ?: $this->version;
		return ['name' => $this->name, 'year' => $this->year, 'version' => $this->version];
  	}
  
	public function length($value = null) {
		$this->length = $length ?: $this->length;
		return $this->lenght;
 	}

	public function get_1st_char() {
		if ($this->name) {
			return strtolower(substr($this->name, 0, 1));
		} else {
			return false;
		}
	}
	
	public function get_2nd_char() {
		$first = get_1st_char();
		$second = strtolower(substr($this->name, 0, 2));
		$second = strtolower(substr($this->name, 0, 3));
		// If vowel
		if (in_array($first, ['a', 'e', 'i', 'o', 'u'])) {
			if (in_array($second, ['a', 'b', 'c'])) {
				return '2';
			} elseif (in_array($second, ['d', 'e', 'f', 'g', 'h', 'i', 'j', 'k'])) {
				return '3';
			} elseif (in_array($second, ['l', 'm'])) {
				return '4';
			} elseif (in_array($second, ['n', 'o'])) {
				return '5';
			} elseif (in_array($second, ['p', 'q'])) {
				return '6';
			} elseif (in_array($second, ['r'])) {
				return '7';
			} elseif (in_array($second, ['s', 't'])) {
				return '8';
			} elseif (in_array($first, ['u', 'v', 'w', 'x', 'y', 'z'])) {
				return '9';
			}
		// IF s
		} elseif ($first == 's') {
			if (in_array($second, ['a', 'b'])) {
				return '2';
			} elseif (in_array($second, ['c','d']) or ($second.$third == 'ch'))) {
				return '3';
			} elseif (in_array($second, ['e', 'f', 'g'])) {
				return '4';
			} elseif (in_array($second, ['n', 'o'])) {
				return '5';
			} elseif (in_array($second, ['p', 'q'])) {
				return '6';
			} elseif (in_array($second, ['r'])) {
				return '7';
			} elseif (in_array($second, ['s', 't'])) {
				return '8';
			}elseif (in_array($first, ['u', 'v', 'w', 'x', 'y', 'z'])) {
				return '9';
			}
		}
	}


  
}

?>