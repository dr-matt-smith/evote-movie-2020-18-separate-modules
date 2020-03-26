<?php


namespace Tudublin;


class MainController extends Controller
{
    public function home()
    {
        $template = 'index.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function about()
    {
        $template = 'about.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function contact()
    {
        $template = 'contact.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function sitemap()
    {
        $template = 'sitemap.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }



}