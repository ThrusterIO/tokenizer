<?php

namespace Thruster\Component\Tokenizer\Token;

use Thruster\Component\Tokenizer\Token;

/**
 * Class InterfaceToken
 *
 * @package Thruster\Component\Tokenizer\Token
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class InterfaceToken extends Token
{
    const IDENTIFIER = T_INTERFACE;

    public function __construct(string $content, int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
