<?php

declare (strict_types=1);
namespace RectorPrefix202411;

use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use RectorPrefix202411\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(TypedPropertyRector::class);
    $services->set(ClassPropertyAssignToConstructorPromotionRector::class);
};
