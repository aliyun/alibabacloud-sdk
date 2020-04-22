<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers\livenessProbe;

use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
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

    /**
     * @description scheme
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
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('scheme', $this->scheme, true);
    }

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
