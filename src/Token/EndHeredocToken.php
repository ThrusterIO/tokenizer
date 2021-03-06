<?php

namespace Thruster\Component\Tokenizer\Token;

use Thruster\Component\Tokenizer\Token;

/**
 * Class EndHeredocToken
 *
 * @package Thruster\Component\Tokenizer\Token
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class EndHeredocToken extends Token
{
    const IDENTIFIER = T_END_HEREDOC;

    public function __construct(string $content, int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
