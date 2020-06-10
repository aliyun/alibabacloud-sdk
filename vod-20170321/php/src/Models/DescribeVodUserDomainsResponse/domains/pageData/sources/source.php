<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse\domains\pageData\sources;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description port
     *
     * @var int
     */
    public $port;

    /**
     * @description priority
     *
     * @var string
     */
    public $priority;
    protected $_name = [
        'type'     => 'Type',
        'content'  => 'Content',
        'port'     => 'Port',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('priority', $this->priority, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
