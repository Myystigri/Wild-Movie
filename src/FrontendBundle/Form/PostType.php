<?php

namespace FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('author')
            ->remove('filmId')
            ->add('content')
            ->remove('date', 'datetime')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontendBundle\Entity\Post'
        ));
    }

    public function getRefererRoute()
    {
        $request = $this->getRequest();

        //récupère la route actuelle
        $referer = $request->headers->get('referer');
        $lastPath = substr($referer, strpos($referer, $request->getBaseUrl()));
        $lastPath = str_replace($request->getBaseUrl(), '', $lastPath);

        // récupère les informations du nom de la route (pas utile pour le besoin que l'on a)
        // $matcher = $this->get('router')->getMatcher();
        // $parameters = $matcher->match($lastPath);
        // $route = $parameters['_route'];

        return $lastPath;
    }
}
