<?php

namespace KnpU\LoremIpsumBundle;
use KnpU\LoremIpsumBundle\WordProviderInterface;

/**
 * Description of knpUWordProvider
 *
 * @author <Garamszegi Erik>
 * */
class KnpUWordProvider implements WordProviderInterface{
   
    /**
     * 
     * @return array
     */
    public function getWordList(): array
    {
        return [
            'adorable',
            'active',
            'admire',
            'adventurous',
        ];
    }
    
}
