<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Scan extends \App\Entity\Scan implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'date_modification' => [parent::class, 'date_modification', null],
        "\0".parent::class."\0".'date_sortie' => [parent::class, 'date_sortie', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'liens' => [parent::class, 'liens', null],
        "\0".parent::class."\0".'manga_id' => [parent::class, 'manga_id', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        'date_modification' => [parent::class, 'date_modification', null],
        'date_sortie' => [parent::class, 'date_sortie', null],
        'id' => [parent::class, 'id', null],
        'liens' => [parent::class, 'liens', null],
        'manga_id' => [parent::class, 'manga_id', null],
        'nom' => [parent::class, 'nom', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
