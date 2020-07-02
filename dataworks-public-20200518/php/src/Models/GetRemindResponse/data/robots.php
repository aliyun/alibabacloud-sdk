<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse\data;

use AlibabaCloud\Tea\Model;

class robots extends Model
{
    /**
     * @description webUrl
     *
     * @var string
     */
    public $webUrl;

    /**
     * @description atAll
     *
     * @var bool
     */
    public $atAll;
    protected $_name = [
        'webUrl' => 'WebUrl',
        'atAll'  => 'AtAll',
    ];

    public function validate()
    {
        Model::validateRequired('webUrl', $this->webUrl, true);
        Model::validateRequired('atAll', $this->atAll, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->atAll) {
            $res['AtAll'] = $this->atAll;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return robots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['AtAll'])) {
            $model->atAll = $map['AtAll'];
        }

        return $model;
    }
}
