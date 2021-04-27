<?php

class CaesarCipher {
    private $key;
    private $string;

    public function encrypt(string $string, int $key = 3) :string
    {
        $this->key    = $key;
        $this->string = $string;

        return $this->execute();
    }

    public function decrypt(string $string, int $key = 3) :string
    {
        $this->key    = 26 - $key;
        $this->string = $string;

        return $this->execute();
    }

    private function execute() :string
    {
        $output = '';

        $stringArr = str_split($this->string);

        foreach ($stringArr as $char) {
            $output .= $this->shift($char, $this->key);
        }

        return $output;
    }

    private function shift(string $char, int $key):string
    {
        if (!ctype_alpha($char))
            return $char;

        $offset = ord(ctype_upper($char) ? 'A' : 'a');
        
        return chr(fmod(((ord($char) + $key) - $offset), 26) + $offset);
    }
}
