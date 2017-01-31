<?php

namespace Thruster\Component\Tokenizer\Token;

use Thruster\Component\Tokenizer\Token;

/**
 * Class DoubleCastToken
 *
 * @package Thruster\Component\Tokenizer\Token
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DoubleCastToken extends Token
{
    const IDENTIFIER = T_DOUBLE_CAST;

    public function __construct(string $content, int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
