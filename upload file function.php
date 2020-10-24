<?php
public function uploadFile($request,$requestName,$filePath){
       $file = $request->file($requestName);
       $imageNewName = rand() . '.' . $file->getClientOriginalExtension();
       $storeFile = $file->move(public_path($filePath),$imageNewName);
       if ($storeFile) return true;
   }
?>
