<?php

declare(strict_types=1);

namespace Teremun;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

final class Main extends PluginBase {

    use SingletonTrait {
        getInstance as protected _getInstance;
        setInstance as protected;
    }


    public static function getInstance(): Main {
        return Main::_getInstance();
    }



    protected function onLoad(): void {
        foreach ($this->getResources() as $resource) {
            $this->saveResource($resource->getFilename());
        }
    }

    protected function onEnable(): void { }

    protected function onDisable(): void { }

}