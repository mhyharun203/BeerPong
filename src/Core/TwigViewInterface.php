<?php
declare(strict_types=1);

namespace App\Core;

interface TwigViewInterface
{
    public function render(string $template, array $context): void;
    public function init():  void;
}