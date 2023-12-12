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

   public function move(string $path, string $fileName = null): string|false
   {
      $storagePath = APP_PATH."/storage/$path";

      if (! is_dir($storagePath)) {
         mkdir($storagePath, 0777, true);
      }
      $fileName = $fileName ?? $this->name;
   }

   private function randomFileName()
   {
      return md5(uniqid(rand(), true));
   }
}

?>