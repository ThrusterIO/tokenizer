<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class PlusToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class PlusToken extends CharacterToken
{
    const IDENTIFIER = T_PLUS;
    
    public function __construct(string $content = '+', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
