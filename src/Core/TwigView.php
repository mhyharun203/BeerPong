<?php
declare(strict_types=1);

namespace App\Core;

use Twig\Environment;



final class TwigView implements TwigViewInterface
{

    private Environment $twig;

    /**
     * @return void
     */
    public function init(): void
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../View');

        $this->twig = new \Twig\Environment($loader);
    }

    /**
     * @param string $template
     * @param array $context
     *
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function render(string $template, array $context): void
    {
        $this->init();
        echo $this->twig->render($template, $context);
    }


}