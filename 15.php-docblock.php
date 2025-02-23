<?php
echo "<h4 style='text-align:center'>PHP Docblock</h4>";

// single line comment

# single line comment

/*
* Multi line comment
*/

/**
 * Docblock for variables, properties, functions, methods, classes, interfaces
 * 
 * @param string $firstname
 * @param string $lastname
 * @return string
 */
function fullname($firstname, $lastname)
{
    return "{$firstname} {$lastname}";
}

echo fullname("Raj", "Kumar");


/**
 * This file is part of the ramsey/uuid library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * @deprecated DegradedUuid instances are no longer necessary to support 32-bit
 *     systems. Transition to {@see DefaultUuidBuilder}.
 *
 * @psalm-immutable
 */
class DegradedUuidBuilder implements UuidBuilderInterface
{
    /**
     * @var NumberConverterInterface
     */
    private $numberConverter;

    /**
     * @var TimeConverterInterface
     */
    private $timeConverter;

    /**
     * @param NumberConverterInterface $numberConverter The number converter to
     *     use when constructing the DegradedUuid
     * @param TimeConverterInterface|null $timeConverter The time converter to use
     *     for converting timestamps extracted from a UUID to Unix timestamps
     */
    public function __construct(
        NumberConverterInterface $numberConverter,
        ?TimeConverterInterface $timeConverter = null
    ) {
        $this->numberConverter = $numberConverter;
        $this->timeConverter = $timeConverter ?: new DegradedTimeConverter();
    }

    /**
     * Builds and returns a DegradedUuid
     *
     * @param CodecInterface $codec The codec to use for building this DegradedUuid instance
     * @param string $bytes The byte string from which to construct a UUID
     *
     * @return DegradedUuid The DegradedUuidBuild returns an instance of Ramsey\Uuid\DegradedUuid
     *
     * @psalm-pure
     */
    public function build(CodecInterface $codec, string $bytes): UuidInterface
    {
        return new DegradedUuid(
            new Rfc4122Fields($bytes),
            $this->numberConverter,
            $codec,
            $this->timeConverter
        );
    }
}



// Docblock tags 

// @param, @return, @var, @throws, @property, @method, @deprecated, @copyright, @license, @see