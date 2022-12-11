<?php

/**
 * @since 8.1
 */
abstract class UnitEnum
{
    public readonly string $name;

    #[Pure]
    abstract public static function cases(): array;
}

/**
 * @since 8.1
 */
abstract class BackedEnum extends UnitEnum
{
    public readonly int|string $value;

    #[Pure]
    abstract public static function from(int|string $value): static;

    #[Pure]
    abstract public static function tryFrom(int|string $value): ?static;
}

/**
 * @since 8.1
 * @internal
 *
 * Internal interface to ensure precise type inference
 */
abstract class IntBackedEnum extends UnitEnum
{
    public readonly int $value;

    #[Pure]
    abstract public static function from(int $value): static;

    #[Pure]
    abstract public static function tryFrom(int $value): ?static;
}

/**
 * @since 8.1
 * @internal
 *
 * Internal interface to ensure precise type inference
 */
abstract class StringBackedEnum extends UnitEnum
{
    public readonly string $value;

    #[Pure]
    abstract public static function from(string $value): static;

    #[Pure]
    abstract public static function tryFrom(string $value): ?static;
}
