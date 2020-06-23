<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ImportAppAlertRulesRequest extends Model
{
    /**
     * @description templateAlertId
     *
     * @var string
     */
    public $templateAlertId;

    /**
     * @description pids
     *
     * @var string
     */
    public $pids;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description contactGroupIds
     *
     * @var string
     */
    public $contactGroupIds;

    /**
     * @description isAutoStart
     *
     * @var bool
     */
    public $isAutoStart;

    /**
     * @description templageAlertConfig
     *
     * @var string
     */
    public $templageAlertConfig;

    /**
     * @description proxyUserId
     *
     * @var string
     */
    public $proxyUserId;
    protected $_name = [
        'templateAlertId'     => 'TemplateAlertId',
        'pids'                => 'Pids',
        'regionId'            => 'RegionId',
        'contactGroupIds'     => 'ContactGroupIds',
        'isAutoStart'         => 'IsAutoStart',
        'templageAlertConfig' => 'TemplageAlertConfig',
        'proxyUserId'         => 'ProxyUserId',
    ];

    public function validate()
    {
        Model::validateRequired('pids', $this->pids, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateAlertId) {
            $res['TemplateAlertId'] = $this->templateAlertId;
        }
        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->isAutoStart) {
            $res['IsAutoStart'] = $this->isAutoStart;
        }
        if (null !== $this->templageAlertConfig) {
            $res['TemplageAlertConfig'] = $this->templageAlertConfig;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportAppAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateAlertId'])) {
            $model->templateAlertId = $map['TemplateAlertId'];
        }
        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['IsAutoStart'])) {
            $model->isAutoStart = $map['IsAutoStart'];
        }
        if (isset($map['TemplageAlertConfig'])) {
            $model->templageAlertConfig = $map['TemplageAlertConfig'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }

        return $model;
    }
}
