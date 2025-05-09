<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Manga extends \App\Entity\Manga implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'author' => [parent::class, 'author', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'episodes' => [parent::class, 'episodes', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'photo' => [parent::class, 'photo', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'scans' => [parent::class, 'scans', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        'author' => [parent::class, 'author', null],
        'description' => [parent::class, 'description', null],
        'episodes' => [parent::class, 'episodes', null],
        'id' => [parent::class, 'id', null],
        'photo' => [parent::class, 'photo', null],
        'roles' => [parent::class, 'roles', null],
        'scans' => [parent::class, 'scans', null],
        'titre' => [parent::class, 'titre', null],
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
