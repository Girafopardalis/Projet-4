<?php

namespace Louvre\BackendBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class EndOfDay extends Constraint
{
    public $message = 'musee.apres.dixsept';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT; // TODO: Change the autogenerated stub
    }



}