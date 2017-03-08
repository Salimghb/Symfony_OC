<?php

namespace Salim\PlateformeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder
    	->add('date',      DateTimeType::class)
    	->add('title',     TextType::class)
    	->add('author',    TextType::class)
    	->add('content',   TextareaType::class)
    	->add('published', CheckboxType::class, array('required' => false))
    	->add('save',      SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    	$resolver->setDefaults(array(
    		'data_class' 
    		=> 'Salim\PlateformeBundle\Entity\Advert'
    		));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    	return 'salim_plateformebundle_advert';
    }


}