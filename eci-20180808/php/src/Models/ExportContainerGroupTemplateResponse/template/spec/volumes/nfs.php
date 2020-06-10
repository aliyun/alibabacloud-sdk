<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\volumes;

use AlibabaCloud\Tea\Model;

class nfs extends Model
{
    /**
     * @description server
     *
     * @var string
     */
    public $server;

    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description readOnly
     *
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'server'   => 'Server',
        'path'     => 'Path',
        'readOnly' => 'ReadOnly',
    ];

    public function validate()
    {
        Model::validateRequired('server', $this->server, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('readOnly', $this->readOnly, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nfs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}
