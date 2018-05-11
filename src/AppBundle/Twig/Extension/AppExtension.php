<?php

namespace AppBundle\Twig\Extension;


use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;

class AppExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'twigext';
    }

    /*public function getFunctions()
    {
        return array(
            'competing' => new \Twig_SimpleFunction('competing', []),
        );
    }

    public function competing()
    {
        echo "lol";
    }
*/
}