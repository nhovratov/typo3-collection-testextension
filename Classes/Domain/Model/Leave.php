<?php


namespace NH\Testextension\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Leave extends AbstractEntity
{
    protected string $name = '';

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
