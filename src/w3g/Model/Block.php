<?php

namespace w3lib\w3g\Model;

use Exception;
use w3lib\Library\Model;
use w3lib\Library\Stream;

class Block extends Model
{
    public function read (Stream $stream)
    {
        $this->compressedSize   = $stream->uint16 ();
        $this->uncompressedSize = $stream->uint16 ();
        $this->checksum         = $stream->uint32 ();
        
        // 2 unknown bytes.
        $stream->char (2);

        $body = $stream->read ($this->compressedSize);

        // Last bit in the first byte needs to be set.
        $body [0] = chr (ord ($body [0]) | 1);
        
        // Decompress body.
        $body = gzinflate ($body);

        if (!$body) {
            throw new Exception ('Failed to gzinflate block.');
        }

        $actual = strlen ($body);

        if ($actual !== $this->uncompressedSize) {
            throw new Exception (
                sprintf (
                    'Found block length discrepency, expecting [%d] found [%d]',
                    $this->uncompressedSize,
                    $actual
                )
            );
        }

        $this->body = $body;
    }
}

?>