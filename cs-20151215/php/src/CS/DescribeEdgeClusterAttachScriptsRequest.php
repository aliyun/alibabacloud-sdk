<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class DescribeEdgeClusterAttachScriptsRequest extends Model
{
    /**
     * @description query
     *
     * @var DescribeEdgeClusterAttachScriptsQuery
     */
    public $query;
    /**
     * @description headers
     *
     * @var array
     */
    public $headers;
    /**
     * @description body
     *
     * @var DescribeEdgeClusterAttachScriptsBody
     */
    public $body;
    protected $_name = [
        'query'   => 'query',
        'headers' => 'headers',
        'body'    => 'body',
    ];

    public function validate()
    {
        Model::validateRequired('query', $this->query, true);
        Model::validateRequired('body', $this->body, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['query']   = null !== $this->query ? $this->query->toMap() : null;
        $res['headers'] = $this->headers;
        $res['body']    = null !== $this->body ? $this->body->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeClusterAttachScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = DescribeEdgeClusterAttachScriptsQuery::fromMap($map['query']);
        }
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['body'])) {
            $model->body = DescribeEdgeClusterAttachScriptsBody::fromMap($map['body']);
        }

        return $model;
    }
}
