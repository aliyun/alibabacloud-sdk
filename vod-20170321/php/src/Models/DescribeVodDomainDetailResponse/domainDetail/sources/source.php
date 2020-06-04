<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse\domainDetail\sources;

use AlibabaCloud\Tea\Model;

class source extends Model {
    protected $_name = [
        'content' => 'Content',
        'type' => 'Type',
        'port' => 'Port',
        'enabled' => 'Enabled',
        'priority' => 'Priority',
    ];
    public function validate() {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('priority', $this->priority, true);
    }
    public function toMap() {
        $res = [];
        $res['Content'] = $this->content;
        $res['Type'] = $this->type;
        $res['Port'] = $this->port;
        $res['Enabled'] = $this->enabled;
        $res['Priority'] = $this->priority;
        return $res;
    }
    /**
     * @param array $map
     * @return source
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Content'])){
            $model->content = $map['Content'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        if(isset($map['Enabled'])){
            $model->enabled = $map['Enabled'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        return $model;
    }
    /**
     * @description content
     * @var string
     */
    public $content;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description port
     * @var integer
     */
    public $port;

    /**
     * @description enabled
     * @var string
     */
    public $enabled;

    /**
     * @description priority
     * @var string
     */
    public $priority;

}
