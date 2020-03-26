<?php


namespace Tudublin;


class Controller
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';
    protected $twig;

    public function __construct()
    {
        $this->twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(self::PATH_TO_TEMPLATES));
        $this->twig->addGlobal('session', $_SESSION);
    }
}