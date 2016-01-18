<?php
namespace AuronConsultingOSS\Docker\Interfaces;

/**
 * Interface for archive files.
 *
 * @package AuronConsultingOSS\Docker\Interfaces
 */
interface ArchiveInterface
{
    /**
     * Returns the filename to serve.
     *
     * @return string
     */
    public function getFilename() : string;

    /**
     * Returns the filename of the temporary file on temp storage.
     *
     * @return string
     */
    public function getTmpFilename() : string;
}