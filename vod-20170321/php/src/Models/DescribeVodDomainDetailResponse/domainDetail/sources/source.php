<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse\domainDetail\sources;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description port
     *
     * @var int
     */
    public $port;

    /**
     * @description enabled
     *
     * @var string
     */
    public $enabled;

    /**
     * @description priority
     *
     * @var string
     */
    public $priority;
    protected $_name = [
        'content'  => 'Content',
        'type'     => 'Type',
        'port'     => 'Port',
        'enabled'  => 'Enabled',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('priority', $this->priority, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
