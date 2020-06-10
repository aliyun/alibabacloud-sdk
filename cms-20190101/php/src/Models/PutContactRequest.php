<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutContactRequest\channels;
use AlibabaCloud\Tea\Model;

class PutContactRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $contactName;

    /**
     * @description desc
     *
     * @var string
     */
    public $describe;

    /**
     * @description Channels
     *
     * @var channels
     */
    public $channels;
    protected $_name = [
        'contactName' => 'ContactName',
        'describe'    => 'Describe',
        'channels'    => 'Channels',
    ];

    public function validate()
    {
        Model::validateRequired('contactName', $this->contactName, true);
        Model::validateRequired('describe', $this->describe, true);
        Model::validateRequired('channels', $this->channels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }

        return $model;
    }
}
