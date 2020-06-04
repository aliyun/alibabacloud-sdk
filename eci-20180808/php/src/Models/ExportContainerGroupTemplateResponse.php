<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\resources;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\securityContext;

class ExportContainerGroupTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'template' => 'Template',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('template', $this->template, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ExportContainerGroupTemplateResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Template'])){
            $model->template = template::fromMap($map['Template']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var template
     */
    public $template;

}
