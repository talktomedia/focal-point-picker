<?php

/*
 * Copyright (c) Rasso Hilber
 * https://rassohilber.com
 */

namespace Hirasso\FocalPointPicker;

use WP_CLI;

class CLI
{
    public static function init(): void
    {
        if (self::isWPCLI()) {
            WP_CLI::add_command(
                'fcp apply-default-position',
                fn () => self::applyDefaultPositionCommand()
            );
        }
    }

    private static function isWPCLI(): bool
    {
        return! \defined('WP_CLI')
            ? false
            : WP_CLI;

    }

    public static function applyDefaultPositionCommand(): void
    {
        $defaultPosition = FocalPointPicker::getDefaultPosition();
    }


}
