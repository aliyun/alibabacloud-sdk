<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\container\readinessProbe;

use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    /**
     * @description readinessProbeHttpGetPath
     *
     * @var string
     */
    public $path;
    /**
     * @description readinessProbeHttpGetPort
     *
     * @var int
     */
    public $port;
    /**
     * @description readinessProbeHttpGetScheme
     *
     * @var string
     */
    public $scheme;
    protected $_name = [
        'path'   => 'Path',
        'port'   => 'Port',
        'scheme' => 'Scheme',
    ];

    public function toMap()
    {
        $res           = [];
        $res['Path']   = $this->path;
        $res['Port']   = $this->port;
        $res['Scheme'] = $this->scheme;

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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }

        return $model;
    }
}
