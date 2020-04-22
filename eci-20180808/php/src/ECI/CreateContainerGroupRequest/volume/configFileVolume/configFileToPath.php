<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\volume\configFileVolume;

use AlibabaCloud\Tea\Model;

class configFileToPath extends Model
{
    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description mode
     *
     * @var int
     */
    public $mode;
    protected $_name = [
        'content' => 'Content',
        'path'    => 'Path',
        'mode'    => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res            = [];
        $res['Content'] = $this->content;
        $res['Path']    = $this->path;
        $res['Mode']    = $this->mode;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configFileToPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
