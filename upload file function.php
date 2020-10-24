<?php
public function uploadFile($request,$requestName,$filePath){
        $file = $request->file($requestName);
        $imageNewName = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($filePath),$imageNewName);
        return $filePath;
    }
?>
