<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\volume\configFileVolume;

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
    protected $_name = [
        'content' => 'Content',
        'path'    => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res            = [];
        $res['Content'] = $this->content;
        $res['Path']    = $this->path;

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

        return $model;
    }
}
