<?php
/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace EzSystems\RepositoryForms\Limitation\Mapper;

class ParentDepthLimitationMapper extends MultipleSelectionBasedMapper
{
    /**
     * @var int The maximum possible depth to use in a limitation
     */
    private $maxDepth;

    public function __construct($maxDepth)
    {
        $this->maxDepth = $maxDepth;
    }

    protected function getSelectionChoices()
    {
        $choices = [];
        foreach (range(1, $this->maxDepth) as $depth) {
            $choices[$depth] = $depth;
        }

        return $choices;
    }
}
