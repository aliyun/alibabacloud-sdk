<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListResourceTagsResponse\tags;
use AlibabaCloud\Tea\Model;

class ListResourceTagsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.tags
     *
     * @var ListResourceTagsResponse.tags
     */
    public $tags;
    protected $_name = [
        'requestId' => 'RequestId',
        'tags'      => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['RequestId'] = $this->requestId;
        $res['Tags']      = null !== $this->tags ? $this->tags->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTagsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
