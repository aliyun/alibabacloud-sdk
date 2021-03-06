<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\volumes\configFile;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description mode
     *
     * @var int
     */
    public $mode;

    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description content
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'mode'    => 'Mode',
        'path'    => 'Path',
        'content' => 'Content',
    ];

    public function validate()
    {
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
