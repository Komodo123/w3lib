<?php

namespace w3lib\w3g\Model;

use w3lib\Library\Model;
use w3lib\Library\Stream;

class Header extends Model
{
    public function read (Stream $stream)
    {
        $this->intro            = $stream->string ();
        $this->headerSize       = $stream->uint32 ();

        $this->compressedSize   = $stream->uint32 ();
        $this->headerVersion    = $stream->uint32 ();
        $this->uncompressedSize = $stream->uint32 ();

        $this->numBlocks        = $stream->uint32 ();
        $this->identification   = $stream->char (4);
        $this->majorVersion     = $stream->uint32 ();
        $this->buildVersion     = $stream->uint16 ();

        $this->flags            = $stream->uint16 ();
        $this->length           = $stream->uint32 ();
        $this->checksum         = $stream->uint32 ();
    }
}

?>