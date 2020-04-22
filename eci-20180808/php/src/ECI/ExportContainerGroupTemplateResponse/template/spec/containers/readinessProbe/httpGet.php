<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers\readinessProbe;

use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    /**
     * @description scheme
     *
     * @var string
     */
    public $scheme;

    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description port
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'scheme' => 'Scheme',
        'path'   => 'Path',
        'port'   => 'Port',
    ];

    public function validate()
    {
        Model::validateRequired('scheme', $this->scheme, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('port', $this->port, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Scheme'] = $this->scheme;
        $res['Path']   = $this->path;
        $res['Port']   = $this->port;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpGet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
