<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec;

use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    public $name;
    public $configFile;
    public $emptyDir;
    public $nfs;
    protected $_required = [
        'name'       => true,
        'configFile' => true,
        'emptyDir'   => true,
        'nfs'        => true,
    ];
    protected $_name = [
        'name'       => 'Name',
        'configFile' => 'ConfigFile',
        'emptyDir'   => 'EmptyDir',
        'nfs'        => 'Nfs',
    ];
    protected $_description = [
        'name'       => 'name',
        'configFile' => 'configFile',
        'emptyDir'   => 'emptyDir',
        'nfs'        => 'nfs',
    ];
}
