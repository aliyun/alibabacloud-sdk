<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\file;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\nodeConfiguration;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description file
     *
     * @var file
     */
    public $file;

    /**
     * @description nodeCfg
     *
     * @var nodeConfiguration
     */
    public $nodeConfiguration;
    protected $_name = [
        'file'              => 'File',
        'nodeConfiguration' => 'NodeConfiguration',
    ];

    public function validate()
    {
        Model::validateRequired('file', $this->file, true);
        Model::validateRequired('nodeConfiguration', $this->nodeConfiguration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->nodeConfiguration) {
            $res['NodeConfiguration'] = null !== $this->nodeConfiguration ? $this->nodeConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }
        if (isset($map['NodeConfiguration'])) {
            $model->nodeConfiguration = nodeConfiguration::fromMap($map['NodeConfiguration']);
        }

        return $model;
    }
}
