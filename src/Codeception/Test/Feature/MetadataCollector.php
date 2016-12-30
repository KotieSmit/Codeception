<?php
namespace Codeception\Test\Feature;

use Codeception\Test\Metadata;

trait MetadataCollector
{
    /**
     * @var Metadata
     */
    private $metadata;

    protected function setMetadata(Metadata $metadata)
    {
        $this->metadata = $metadata;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function getName()
    {
        if (!($this->getMetadata()->getAltName()===null)){
            return $this->getMetadata()->getAltName();
        }
        return $this->getMetadata()->getName();
    }

    public function getFileName()
    {
        return $this->getMetadata()->getFilename();
    }
}
