<?php


namespace App\Services;


class BaseService
{
    function updateLoadFile($request, $key, $nameFolder)
    {
        return $request->file($key)->store($nameFolder, 'public');
    }
}
