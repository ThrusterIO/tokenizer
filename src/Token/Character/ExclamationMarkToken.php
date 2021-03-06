<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class ExclamationMarkToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ExclamationMarkToken extends CharacterToken
{
    const IDENTIFIER = T_EXCLAMATION_MARK;
    
    public function __construct(string $content = '!', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
