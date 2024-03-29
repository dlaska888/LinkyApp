<?php

namespace src\Validators;

class FileValidator extends BaseValidator
{
    private const MAX_FILE_SIZE = 500 * 500;
    private const SUPPORTED_TYPES = ['image/png', 'image/jpeg', 'image/jpg', 'image/webp'];

    protected function addValidation(): void
    {
        $this
            ->notNull('tmp_name')
            ->notNull('size')
            ->maxValue('size', self::MAX_FILE_SIZE, 'File exceeds allowed size')
            ->notNull('type')
            ->in_array('type', self::SUPPORTED_TYPES, 'Unsupported file type');
    }
}