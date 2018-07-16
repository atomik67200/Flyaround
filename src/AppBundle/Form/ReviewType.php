<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 17/06/18
 * Time: 14:58
 */

namespace AppBundle\Form;

use AppBundle\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



/**
 * @Embedded\Embedded
 */
class ReviewType extends AbstractType
{

    /**
     * {@inheritdoc} Including all fields from Review entity.
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text')
            ->add('publicationDate')
            ->add('note')
            ->add('userRated')
            ->add('reviewAuthor')
            ->add( 'Send', SubmitType::class)
            ->add('Delete',SubmitType::class );
    }
    /**
     * {@inheritdoc} Targeting Review entity
     */

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Review'
        ));
    }
    /**
     * {@inheritdoc} getName() is now deprecated
     */

    public function getBlockPrefix()
    {
        return 'appbundle_review';
    }

}
