<?php

namespace ORMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SitesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('idFtps')
            ->add('idRegistrar')
            ->add('idSqls')
            ->add('idIps')
            ->add('idHosts')
            ->add('idTypeProjet')
            ->add('idAnalytics')
            ->add('idBackOffice')
            ->add('idPageSpeed')
            ->add('idUrl')
            ->add('Priority')
            ->add('urls')
            ->add('ftps')
            ->add('analytics')
            ->add('registrar')
            ->add('sqls')
            ->add('ips')
            ->add('hosts')
            ->add('type_projet')
            ->add('page_speed')
            ->add('back_office')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ORMBundle\Entity\Sites'
        ));
    }
}
