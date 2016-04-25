<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),


            // Sonata
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            // Deploy bundle
            new Hpatoio\DeployBundle\DeployBundle(),
            // APC Bundle
            new Ornicar\ApcBundle\OrnicarApcBundle(),
            //KNP
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            // CKEditor
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new FM\ElfinderBundle\FMElfinderBundle(),
            // Friends Of Symfony
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),


            // Liip Imagine
            new Liip\ImagineBundle\LiipImagineBundle(),
            // ICE Satis Bundle
            new Ice\FileUploadBundle\IceFileUploadBundle(),
            new Ice\SonataAdminBundle\IceSonataAdminBundle(),
            new Ice\SonataDoctrineORMAdminBundle\IceSonataDoctrineORMAdminBundle(),

            // Project Bundles
            new Ice\UserBundle\IceUserBundle('FOSUserBundle'),
            new Ice\EntityBundle\IceEntityBundle(),
            new Ice\FrontendBundle\IceFrontendBundle(),
            new Ice\AdminBundle\IceAdminBundle(),
            new Ice\CommonBundle\IceCommonBundle(),

        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
