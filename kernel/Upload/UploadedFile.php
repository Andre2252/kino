<?php

namespace App\Kernel\Upload;

use App\Kernel\Upload\UploadedFileInterface;

class UploadedFile implements UploadedFileInterface
{
   public function __construct(
      public readonly string $name,
      public readonly string $type,
      public readonly string $tmpName,
      public readonly int $error,
      public readonly int $size,
   ) {
   }

   public function move(string $path): bool
   {
      // TODO: Implement move() method.
   }
}

?>