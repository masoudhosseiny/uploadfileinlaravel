<?php
public function uploadFile($request,$requestName,$filePath){
       $file = $request->file($requestName);
       $storeFile = $file->move(public_path($filePath),$file->getClientOriginalName());
       if ($storeFile) return true;
   }
?>
