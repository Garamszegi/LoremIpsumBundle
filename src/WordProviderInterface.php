<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KnpU\LoremIpsumBundle;

/**
 *
 * @author <Garamszegi Erik>
 */
interface WordProviderInterface {
    
    /**
     * 
     * @return array
     */
    public function getWordList(): array;
    
}
