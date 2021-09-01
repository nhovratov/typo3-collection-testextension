<?php

namespace NH\Testextension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Tree extends AbstractEntity
{
    protected string $name = '';

    /**
     * @var ObjectStorage<Leave>
     */
    protected ObjectStorage $leaves;

    /**
     * @return ObjectStorage<Leave>
     */
    public function getLeaves(): ObjectStorage
    {
        return $this->leaves;
    }

    /**
     * @param ObjectStorage<Leave> $leaves
     */
    public function setLeaves(ObjectStorage $leaves): void
    {
        $this->leaves = $leaves;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
