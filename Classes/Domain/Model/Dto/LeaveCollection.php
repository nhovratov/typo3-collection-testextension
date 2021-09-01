<?php


namespace NH\Testextension\Domain\Model\Dto;

use NH\Testextension\Domain\Model\Leave;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class LeaveCollection
{
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
}
