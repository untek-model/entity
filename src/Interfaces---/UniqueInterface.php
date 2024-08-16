<?php

namespace Untek\Model\Entity\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

/**
 * Интерфейс описания уникальных полей сущности
 */
interface UniqueInterface
{

    /**
     * Уникальные группы полей
     * @return array
     */
    public function unique(): array;
}
