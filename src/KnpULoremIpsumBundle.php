<?php

namespace KnpU\LoremIpsumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of KnpuLoremIpsumBundle
 *
 * @author <Garamszegi Erik>
 * */
class KnpULoremIpsumBundle extends Bundle {
    
    public function getContainerExtension() {
        
        if(null === $this->extension){
            $this->extension = new DependencyInjection\KnpULoremIpsumExtension();
        }
        return $this->extension;
    }
    
}
