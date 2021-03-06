<?php

namespace Thruster\Component\Tokenizer;

use Thruster\Component\Tokenizer\Token\Character;

/**
 * Interface TokenInterface
 *
 * @package Thruster\Component\Tokenizer
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
interface TokenInterface
{
    const TOKEN_MAP = [
        T_SEMICOLON              => 'T_SEMICOLON',
        T_OPENING_CURLY_BRACKET  => 'T_OPENING_CURLY_BRACKET',
        T_CLOSING_CURLY_BRACKET  => 'T_CLOSING_CURLY_BRACKET',
        T_OPENING_PARENTHESES    => 'T_OPENING_PARENTHESES',
        T_CLOSING_PARENTHESES    => 'T_CLOSING_PARENTHESES',
        T_EQUALS                 => 'T_EQUALS',
        T_OPENING_SQUARE_BRACKET => 'T_OPENING_SQUARE_BRACKET',
        T_COMMA                  => 'T_COMMA',
        T_CLOSING_SQUARE_BRACKET => 'T_CLOSING_SQUARE_BRACKET',
        T_DOT                    => 'T_DOT',
        T_QUESTION_MARK          => 'T_QUESTION_MARK',
        T_COLON                  => 'T_COLON',
        T_EXCLAMATION_MARK       => 'T_EXCLAMATION_MARK',
        T_AT_SIGN                => 'T_AT_SIGN',
        T_ASTERISK               => 'T_ASTERISK',
        T_GREATER_THAN           => 'T_GREATER_THAN',
        T_MINUS                  => 'T_MINUS',
        T_PLUS                   => 'T_PLUS',
        T_LESS_THAN              => 'T_LESS_THAN',
        T_AMPERSAND              => 'T_AMPERSAND',
        T_TILDE                  => 'T_TILDE',
        T_SLASH                  => 'T_SLASH',
        T_PERCENT                => 'T_PERCENT',
        T_DOUBLE_QUOTES          => 'T_DOUBLE_QUOTES',
        T_SINGLE_QUOTES          => 'T_SINGLE_QUOTES',
        T_PIPE                   => 'T_PIPE',
        T_DOLLAR                 => 'T_DOLLAR',
        T_TICK                   => 'T_TICK',
        T_CARET                  => 'T_CARET',
        T_NEWLINE                => 'T_NEWLINE',
    ];

    const CHARACTER_TO_CLASS_MAP = [
        ';'  => Character\SemiColonToken::class,
        '{'  => Character\OpeningCurlyBracketToken::class,
        '}'  => Character\ClosingCurlyBracketToken::class,
        '('  => Character\OpeningParenthesesToken::class,
        ')'  => Character\ClosingParenthesesToken::class,
        '='  => Character\EqualsToken::class,
        '['  => Character\OpeningSquareBracketToken::class,
        ','  => Character\CommaToken::class,
        ']'  => Character\ClosingSquareBracketToken::class,
        '.'  => Character\DotToken::class,
        '?'  => Character\QuestionMarkToken::class,
        ':'  => Character\ColonToken::class,
        '!'  => Character\ExclamationMarkToken::class,
        '@'  => Character\AtSignToken::class,
        '*'  => Character\AsteriskToken::class,
        '>'  => Character\GreaterThanToken::class,
        '-'  => Character\MinusToken::class,
        '+'  => Character\PlusToken::class,
        '<'  => Character\LessThanToken::class,
        '&'  => Character\AmpersandToken::class,
        '~'  => Character\TildeToken::class,
        '/'  => Character\SlashToken::class,
        '%'  => Character\PercentToken::class,
        '"'  => Character\DoubleQuotesToken::class,
        '\'' => Character\SingleQuotesToken::class,
        '|'  => Character\PipeToken::class,
        '$'  => Character\DollarToken::class,
        '`'  => Character\TickToken::class,
        '^'  => Character\CaretToken::class,
    ];

    const TOKEN_TO_CLASS_MAP = [
        T_REQUIRE_ONCE             => Token\RequireOnceToken::class,
        T_REQUIRE                  => Token\RequireToken::class,
        T_EVAL                     => Token\EvalToken::class,
        T_INCLUDE_ONCE             => Token\IncludeOnceToken::class,
        T_INCLUDE                  => Token\IncludeToken::class,
        T_LOGICAL_OR               => Token\LogicalOrToken::class,
        T_LOGICAL_XOR              => Token\LogicalXorToken::class,
        T_LOGICAL_AND              => Token\LogicalAndToken::class,
        T_PRINT                    => Token\PrintToken::class,
        T_YIELD                    => Token\YieldToken::class,
        T_DOUBLE_ARROW             => Token\DoubleArrowToken::class,
        T_YIELD_FROM               => Token\YieldFromToken::class,
        T_POW_EQUAL                => Token\PowEqualToken::class,
        T_SR_EQUAL                 => Token\SrEqualToken::class,
        T_SL_EQUAL                 => Token\SlEqualToken::class,
        T_XOR_EQUAL                => Token\XorEqualToken::class,
        T_OR_EQUAL                 => Token\OrEqualToken::class,
        T_AND_EQUAL                => Token\AndEqualToken::class,
        T_MOD_EQUAL                => Token\ModEqualToken::class,
        T_CONCAT_EQUAL             => Token\ConcatEqualToken::class,
        T_DIV_EQUAL                => Token\DivEqualToken::class,
        T_MUL_EQUAL                => Token\MulEqualToken::class,
        T_MINUS_EQUAL              => Token\MinusEqualToken::class,
        T_PLUS_EQUAL               => Token\PlusEqualToken::class,
        T_COALESCE                 => Token\CoalesceToken::class,
        T_BOOLEAN_OR               => Token\BooleanOrToken::class,
        T_BOOLEAN_AND              => Token\BooleanAndToken::class,
        T_SPACESHIP                => Token\SpaceshipToken::class,
        T_IS_NOT_IDENTICAL         => Token\IsNotIdenticalToken::class,
        T_IS_IDENTICAL             => Token\IsIdenticalToken::class,
        T_IS_NOT_EQUAL             => Token\IsNotEqualToken::class,
        T_IS_EQUAL                 => Token\IsEqualToken::class,
        T_IS_GREATER_OR_EQUAL      => Token\IsGreaterOrEqualToken::class,
        T_IS_SMALLER_OR_EQUAL      => Token\IsSmallerOrEqualToken::class,
        T_SR                       => Token\SrToken::class,
        T_SL                       => Token\SlToken::class,
        T_INSTANCEOF               => Token\InstanceofToken::class,
        T_UNSET_CAST               => Token\UnsetCastToken::class,
        T_BOOL_CAST                => Token\BoolCastToken::class,
        T_OBJECT_CAST              => Token\ObjectCastToken::class,
        T_ARRAY_CAST               => Token\ArrayCastToken::class,
        T_STRING_CAST              => Token\StringCastToken::class,
        T_DOUBLE_CAST              => Token\DoubleCastToken::class,
        T_INT_CAST                 => Token\IntCastToken::class,
        T_DEC                      => Token\DecToken::class,
        T_INC                      => Token\IncToken::class,
        T_POW                      => Token\PowToken::class,
        T_CLONE                    => Token\CloneToken::class,
        T_NEW                      => Token\NewToken::class,
        T_ELSEIF                   => Token\ElseifToken::class,
        T_ELSE                     => Token\ElseToken::class,
        T_ENDIF                    => Token\EndifToken::class,
        T_PUBLIC                   => Token\PublicToken::class,
        T_PROTECTED                => Token\ProtectedToken::class,
        T_PRIVATE                  => Token\PrivateToken::class,
        T_FINAL                    => Token\FinalToken::class,
        T_ABSTRACT                 => Token\AbstractToken::class,
        T_STATIC                   => Token\StaticToken::class,
        T_LNUMBER                  => Token\LnumberToken::class,
        T_DNUMBER                  => Token\DnumberToken::class,
        T_STRING                   => Token\StringToken::class,
        T_VARIABLE                 => Token\VariableToken::class,
        T_INLINE_HTML              => Token\InlineHtmlToken::class,
        T_ENCAPSED_AND_WHITESPACE  => Token\EncapsedAndWhitespaceToken::class,
        T_CONSTANT_ENCAPSED_STRING => Token\ConstantEncapsedStringToken::class,
        T_STRING_VARNAME           => Token\StringVarnameToken::class,
        T_NUM_STRING               => Token\NumStringToken::class,
        T_EXIT                     => Token\ExitToken::class,
        T_IF                       => Token\IfToken::class,
        T_ECHO                     => Token\EchoToken::class,
        T_DO                       => Token\DoToken::class,
        T_WHILE                    => Token\WhileToken::class,
        T_ENDWHILE                 => Token\EndwhileToken::class,
        T_FOR                      => Token\ForToken::class,
        T_ENDFOR                   => Token\EndforToken::class,
        T_FOREACH                  => Token\ForeachToken::class,
        T_ENDFOREACH               => Token\EndforeachToken::class,
        T_DECLARE                  => Token\DeclareToken::class,
        T_ENDDECLARE               => Token\EnddeclareToken::class,
        T_AS                       => Token\AsToken::class,
        T_SWITCH                   => Token\SwitchToken::class,
        T_ENDSWITCH                => Token\EndswitchToken::class,
        T_CASE                     => Token\CaseToken::class,
        T_DEFAULT                  => Token\DefaultToken::class,
        T_BREAK                    => Token\BreakToken::class,
        T_CONTINUE                 => Token\ContinueToken::class,
        T_GOTO                     => Token\GotoToken::class,
        T_FUNCTION                 => Token\FunctionToken::class,
        T_CONST                    => Token\ConstToken::class,
        T_RETURN                   => Token\ReturnToken::class,
        T_TRY                      => Token\TryToken::class,
        T_CATCH                    => Token\CatchToken::class,
        T_FINALLY                  => Token\FinallyToken::class,
        T_THROW                    => Token\ThrowToken::class,
        T_USE                      => Token\UseToken::class,
        T_INSTEADOF                => Token\InsteadofToken::class,
        T_GLOBAL                   => Token\GlobalToken::class,
        T_VAR                      => Token\VarToken::class,
        T_UNSET                    => Token\UnsetToken::class,
        T_ISSET                    => Token\IssetToken::class,
        T_EMPTY                    => Token\EmptyToken::class,
        T_HALT_COMPILER            => Token\HaltCompilerToken::class,
        T_CLASS                    => Token\ClassToken::class,
        T_TRAIT                    => Token\TraitToken::class,
        T_INTERFACE                => Token\InterfaceToken::class,
        T_EXTENDS                  => Token\ExtendsToken::class,
        T_IMPLEMENTS               => Token\ImplementsToken::class,
        T_OBJECT_OPERATOR          => Token\ObjectOperatorToken::class,
        T_LIST                     => Token\ListToken::class,
        T_ARRAY                    => Token\ArrayToken::class,
        T_CALLABLE                 => Token\CallableToken::class,
        T_LINE                     => Token\LineToken::class,
        T_FILE                     => Token\FileToken::class,
        T_DIR                      => Token\DirToken::class,
        T_CLASS_C                  => Token\ClassCToken::class,
        T_TRAIT_C                  => Token\TraitCToken::class,
        T_METHOD_C                 => Token\MethodCToken::class,
        T_FUNC_C                   => Token\FuncCToken::class,
        T_COMMENT                  => Token\CommentToken::class,
        T_DOC_COMMENT              => Token\DocCommentToken::class,
        T_OPEN_TAG                 => Token\OpenTagToken::class,
        T_OPEN_TAG_WITH_ECHO       => Token\OpenTagWithEchoToken::class,
        T_CLOSE_TAG                => Token\CloseTagToken::class,
        T_WHITESPACE               => Token\WhitespaceToken::class,
        T_START_HEREDOC            => Token\StartHeredocToken::class,
        T_END_HEREDOC              => Token\EndHeredocToken::class,
        T_DOLLAR_OPEN_CURLY_BRACES => Token\DollarOpenCurlyBracesToken::class,
        T_CURLY_OPEN               => Token\CurlyOpenToken::class,
        T_PAAMAYIM_NEKUDOTAYIM     => Token\PaamayimNekudotayimToken::class,
        T_NAMESPACE                => Token\NamespaceToken::class,
        T_NS_C                     => Token\NsCToken::class,
        T_NS_SEPARATOR             => Token\NsSeparatorToken::class,
        T_ELLIPSIS                 => Token\EllipsisToken::class,
        T_DOUBLE_COLON             => Token\DoubleColonToken::class,

        // Our custom Character tokens
        T_SEMICOLON                => Character\SemiColonToken::class,
        T_OPENING_CURLY_BRACKET    => Character\OpeningCurlyBracketToken::class,
        T_CLOSING_CURLY_BRACKET    => Character\ClosingCurlyBracketToken::class,
        T_OPENING_PARENTHESES      => Character\OpeningParenthesesToken::class,
        T_CLOSING_PARENTHESES      => Character\ClosingParenthesesToken::class,
        T_EQUALS                   => Character\EqualsToken::class,
        T_OPENING_SQUARE_BRACKET   => Character\OpeningSquareBracketToken::class,
        T_COMMA                    => Character\CommaToken::class,
        T_CLOSING_SQUARE_BRACKET   => Character\ClosingSquareBracketToken::class,
        T_DOT                      => Character\DotToken::class,
        T_QUESTION_MARK            => Character\QuestionMarkToken::class,
        T_COLON                    => Character\ColonToken::class,
        T_EXCLAMATION_MARK         => Character\ExclamationMarkToken::class,
        T_AT_SIGN                  => Character\AtSignToken::class,
        T_ASTERISK                 => Character\AsteriskToken::class,
        T_GREATER_THAN             => Character\GreaterThanToken::class,
        T_MINUS                    => Character\MinusToken::class,
        T_PLUS                     => Character\PlusToken::class,
        T_LESS_THAN                => Character\LessThanToken::class,
        T_AMPERSAND                => Character\AmpersandToken::class,
        T_TILDE                    => Character\TildeToken::class,
        T_SLASH                    => Character\SlashToken::class,
        T_PERCENT                  => Character\PercentToken::class,
        T_DOUBLE_QUOTES            => Character\DoubleQuotesToken::class,
        T_SINGLE_QUOTES            => Character\SingleQuotesToken::class,
        T_PIPE                     => Character\PipeToken::class,
        T_DOLLAR                   => Character\DollarToken::class,
        T_TICK                     => Character\TickToken::class,
        T_CARET                    => Character\CaretToken::class,
    ];
}