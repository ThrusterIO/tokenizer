<?php

namespace Thruster\Component\Tokenizer\Token;

use Thruster\Component\Tokenizer\Token;

/**
 * Class LnumberToken
 *
 * @package Thruster\Component\Tokenizer\Token
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class LnumberToken extends Token
{
    const IDENTIFIER = T_LNUMBER;

    public function __construct(string $content, int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
