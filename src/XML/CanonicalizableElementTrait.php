<?php

/*
 * This file is part of the nuldark/stdlib.
 *
 * Copyright (C) 2023 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE.md file for details.
 */

namespace Nuldark\Stdlib\XML;

use Nuldark\Stdlib\XML;

trait CanonicalizableElementTrait
{
    /**
     * Gets an XML element.
     *
     * @return \DOMElement
     */
    abstract public function getXML(): \DOMElement;

    /**
     * Canonicalizes the current element.
     *
     * @param string $c14alg
     *  The canonicalization method.
     * @param string[]|null $xpaths
     *  An array of xpaths to filter the nodes.
     * @param string[]|null $prefixes
     *  An array of namespaces to filter the nodes.
     *
     * @return string
     */
    public function canonicalize(string $c14alg, ?array $xpaths = null, ?array $prefixes = null): string {
        return XML::canonicalizeData($this->getXML(), $c14alg, $xpaths, $prefixes);
    }
}
