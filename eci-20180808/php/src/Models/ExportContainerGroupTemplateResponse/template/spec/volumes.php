<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec;

use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\volumes\configFile;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\volumes\emptyDir;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\volumes\nfs;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description configFile
     *
     * @var configFile
     */
    public $configFile;

    /**
     * @description emptyDir
     *
     * @var emptyDir
     */
    public $emptyDir;

    /**
     * @description nfs
     *
     * @var nfs
     */
    public $nfs;
    protected $_name = [
        'name'       => 'Name',
        'configFile' => 'ConfigFile',
        'emptyDir'   => 'EmptyDir',
        'nfs'        => 'Nfs',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('configFile', $this->configFile, true);
        Model::validateRequired('emptyDir', $this->emptyDir, true);
        Model::validateRequired('nfs', $this->nfs, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Name']       = $this->name;
        $res['ConfigFile'] = null !== $this->configFile ? $this->configFile->toMap() : null;
        $res['EmptyDir']   = null !== $this->emptyDir ? $this->emptyDir->toMap() : null;
        $res['Nfs']        = null !== $this->nfs ? $this->nfs->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ConfigFile'])) {
            $model->configFile = configFile::fromMap($map['ConfigFile']);
        }
        if (isset($map['EmptyDir'])) {
            $model->emptyDir = emptyDir::fromMap($map['EmptyDir']);
        }
        if (isset($map['Nfs'])) {
            $model->nfs = nfs::fromMap($map['Nfs']);
        }

        return $model;
    }
}
