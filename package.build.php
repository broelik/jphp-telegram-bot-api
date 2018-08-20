<?php

use php\io\File;
use php\lib\str;
use php\lib\fs;
use packager\Event;

/**
 * @jppm-task create-bundle
 */
function task_hubPublish(Event $e)
{
    $package = $e->package();
    $data = $package->getAny('develnext-bundle');
    $vendorName = str::replace($data['class'], '\\', '.');
    $parent = new File("src-bundle/vendor/{$vendorName}");
    if($parent->isDirectory()){
        fs::clean($parent);
    }
    foreach($package->getAny('sources') as $source){
        fs::scan($source, function(File $file)use($parent, $source){
            if($file->isFile()){
                $newPath = new File($parent, fs::relativize($file, $source));
                fs::ensureParent($newPath);
                fs::copy($file, $newPath);
            }
        });
    }
    Tasks::run('bundle:build');
}