<?php

namespace KnpU\LoremIpsumBundle;

use KnpU\LoremIpsumBundle\WordProviderInterface;

class KnpUIpsum {

    private $unicornsAreReal;
    private $minSunshine;
    private $wordProvider;

    public function __construct(WordProviderInterface $wordProvider, bool $unicornsAreReal = true, $minSunshine = 3) {
        $this->unicornsAreReal = $unicornsAreReal;
        $this->minSunshine = $minSunshine;
        $this->wordProvider = $wordProvider;
    }

    /**
     * 
     * @return string
     */
    public function getParagraphs(): string {

        return $this->wordProvider->getWordList();
    }

}
