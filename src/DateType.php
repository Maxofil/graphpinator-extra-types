<?php

declare(strict_types = 1);

namespace Graphpinator\ExtraTypes;

final class DateType extends \Graphpinator\Type\ScalarType
{
    protected const NAME = 'Date';
    protected const DESCRIPTION = 'Date type - string which contains valid date in "<YYYY>-<MM>-<DD>" format.';

    public function validateNonNullValue(mixed $rawValue) : bool
    {
        return \is_string($rawValue)
            && \Nette\Utils\DateTime::createFromFormat('Y-m-d', $rawValue) instanceof \Nette\Utils\DateTime;
    }
}
