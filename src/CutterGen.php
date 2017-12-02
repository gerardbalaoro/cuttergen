<?php

class CutterGen {
	public $name = null;
	public $length = 2;

	public function name($name = null) {
		$name = preg_replace('/[^\p{L}\p{N}\s]/u', '', $name);
		$name = str_replace(' ', '', $name);
		$this->name = $name ?: $this->name;
		return $this->name;
	  }
  
	public function length($length = 2) {
		$this->length = (int) $length < 2 ? $this->length : (int) $length;
		return $this->length;
 	}
	
	public function generate($name = null, $length = null) {
		$name = $this->name($name);

		if ($name) {
			return $this->get_initial($name).$this->get_second($name).$this->get_expansion($name, $length);
		} else {
			return false;
		}	
	}

	protected function get_initial($name) {
		$data = $this->initialize($name);
		return strtoupper($data['first']);
	}
	
	protected function get_second($name) {
		$data = $this->initialize($name);
		// If vowel
		if (in_array($data['first'], ['a', 'e', 'i', 'o', 'u'])) {
			if (in_array($data['second'], range('a', 'c'))) {
				return '2';
			} elseif (in_array($data['second'], range('d', 'k'))) {
				return '3';
			} elseif (in_array($data['second'], range('l', 'm'))) {
				return '4';
			} elseif (in_array($data['second'], range('n', 'o'))) {
				return '5';
			} elseif (in_array($data['second'], range('p', 'q'))) {
				return '6';
			} elseif (in_array($data['second'], ['r'])) {
				return '7';
			} elseif (in_array($data['second'], range('s', 't'))) {
				return '8';
			} elseif (in_array($data['second'], range('u', 'z'))) {
				return '9';
			}
		// If s
		} elseif ($data['first'] == 's') {
			if (in_array($data['second'], range('a', 'b'))) {
				return '2';
			} elseif (in_array($data['second'], range('c', 'd')) or ($data['second'].$data['third'] == 'ch')) {
				return '3';
			} elseif (in_array($data['second'], range('e', 'g'))) {
				return '4';
			} elseif (in_array($data['second'], range('h', 'l'))) {
				return '5';
			} elseif (in_array($data['second'], range('m', 's'))) {
				return '6';
			} elseif (in_array($data['second'], ['t'])) {
				return '7';
			} elseif (in_array($data['second'], range('u', 'v'))) {
				return '8';
			} elseif (in_array($data['second'], range('w', 'z'))) {
				return '9';
			}
		// If qa - qu
		} elseif ($data['first'] == 'q' && !in_array($data['second'], range('v', 'z'))) {
			if ($data['second'] == 'u') {
				if (in_array($data['third'], range('a', 'd'))) {
					return '3';
				} elseif (in_array($data['third'], range('e', 'h'))) {
					return '4';
				} elseif (in_array($data['third'], range('i', 'n'))) {
					return '5';
				} elseif (in_array($data['third'], range('o', 'q'))) {
					return '6';
				} elseif (in_array($data['third'], range('r', 's'))) {
					return '7';
				} elseif (in_array($data['third'], range('t', 'x'))) {
					return '8';
				} elseif (in_array($data['third'], range('y', 'z'))) {
					return '9';
				}
			} else {
				return (string) $this->toNumber($data['third']);
			}
		// If other consonants
		} else {
			if (in_array($data['second'], range('a', 'd'))) {
				return '3';
			} elseif (in_array($data['second'], range('e', 'h'))) {
				return '4';
			} elseif (in_array($data['second'], range('i', 'n'))) {
				return '5';
			} elseif (in_array($data['second'], range('o', 'q'))) {
				return '6';
			} elseif (in_array($data['second'], range('r', 't'))) {
				return '7';
			} elseif (in_array($data['second'], range('u', 'x'))) {
				return '8';
			} elseif (in_array($data['second'], range('y', 'z'))) {
				return '9';
			}
		}
	}
	
	protected function get_expansion($name, $length = 2) {
		$data = $this->initialize($name, $length);
		$length = $this->length($length);
		$expand = null;

		if ($data['first'] == 'q' && !in_array($data['second'], range('v', 'z'))) {
			for ($i = 3; $i <= ($length); $i ++) {
				$expand .= $this->expand(strtolower(substr($name, $i , 1)));
			}
		} elseif ($data['first'] == 's' && $data['second'].$data['third'] == 'ch') {
			for ($i = 3; $i <= ($length); $i ++) {
				$expand .= $this->expand(strtolower(substr($name, $i, 1)));
			}
		} else {
			for ($i = 2; $i <= $length - 1; $i ++) {
				$expand .= $this->expand(strtolower(substr($name, $i, 1)));
			}
		}

		return $expand;
	}

	protected function initialize($name) {
		$name = $this->name($name);
		$data['first'] = strtolower(substr($name, 0, 1));
		$data['second'] = strtolower(substr($name, 1, 1));
		$data['third'] = strtolower(substr($name, 2, 1));
		return $data;
	}
	
	protected function expand($char) {
		if (in_array($char, range('a', 'd'))) {
			return '3';
		} elseif (in_array($char, range('e', 'h'))) {
			return '4';
		} elseif (in_array($char, range('i', 'l'))) {
			return '5';
		} elseif (in_array($char, range('m', 'o'))) {
			return '6';
		} elseif (in_array($char, range('p', 's'))) {
			return '7';
		} elseif (in_array($char, range('t', 'v'))) {
			return '8';
		} elseif (in_array($char, range('w', 'z'))) {
			return '9';
		}
	}
	
	protected function toNumber($char) {
    	return $char ? ord(strtolower($char)) - 95 : 0;
	}
}

?>