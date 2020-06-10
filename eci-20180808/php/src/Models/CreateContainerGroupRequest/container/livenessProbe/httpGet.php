<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe;

use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    /**
     * @description livenessProbeHttpGetPath
     *
     * @var string
     */
    public $path;

    /**
     * @description livenessProbeHttpGetPort
     *
     * @var int
     */
    public $port;

    /**
     * @description livenessProbeHttpGetScheme
     *
     * @var string
     */
    public $scheme;
    protected $_name = [
        'path'   => 'Path',
        'port'   => 'Port',
        'scheme' => 'Scheme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
        }

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
