<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse\data\evaluateList;

use AlibabaCloud\Tea\Model;

class evaluate extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description userId
     *
     * @var int
     */
    public $userId;

    /**
     * @description userNick
     *
     * @var string
     */
    public $userNick;

    /**
     * @description outBizId
     *
     * @var string
     */
    public $outBizId;

    /**
     * @description billId
     *
     * @var int
     */
    public $billId;

    /**
     * @description itemId
     *
     * @var int
     */
    public $itemId;

    /**
     * @description billCycle
     *
     * @var string
     */
    public $billCycle;

    /**
     * @description bizType
     *
     * @var string
     */
    public $bizType;

    /**
     * @description originalAmount
     *
     * @var int
     */
    public $originalAmount;

    /**
     * @description presentAmount
     *
     * @var int
     */
    public $presentAmount;

    /**
     * @description canInvoiceAmount
     *
     * @var int
     */
    public $canInvoiceAmount;

    /**
     * @description invoicedAmount
     *
     * @var int
     */
    public $invoicedAmount;

    /**
     * @description offsetCostAmount
     *
     * @var int
     */
    public $offsetCostAmount;

    /**
     * @description offsetAcceptAmount
     *
     * @var int
     */
    public $offsetAcceptAmount;

    /**
     * @description status
     *
     * @var int
     */
    public $status;

    /**
     * @description opId
     *
     * @var string
     */
    public $opId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description bizTime
     *
     * @var string
     */
    public $bizTime;

    /**
     * @description type
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'id'                 => 'Id',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'userId'             => 'UserId',
        'userNick'           => 'UserNick',
        'outBizId'           => 'OutBizId',
        'billId'             => 'BillId',
        'itemId'             => 'ItemId',
        'billCycle'          => 'BillCycle',
        'bizType'            => 'BizType',
        'originalAmount'     => 'OriginalAmount',
        'presentAmount'      => 'PresentAmount',
        'canInvoiceAmount'   => 'CanInvoiceAmount',
        'invoicedAmount'     => 'InvoicedAmount',
        'offsetCostAmount'   => 'OffsetCostAmount',
        'offsetAcceptAmount' => 'OffsetAcceptAmount',
        'status'             => 'Status',
        'opId'               => 'OpId',
        'name'               => 'Name',
        'bizTime'            => 'BizTime',
        'type'               => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userNick', $this->userNick, true);
        Model::validateRequired('outBizId', $this->outBizId, true);
        Model::validateRequired('billId', $this->billId, true);
        Model::validateRequired('itemId', $this->itemId, true);
        Model::validateRequired('billCycle', $this->billCycle, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('originalAmount', $this->originalAmount, true);
        Model::validateRequired('presentAmount', $this->presentAmount, true);
        Model::validateRequired('canInvoiceAmount', $this->canInvoiceAmount, true);
        Model::validateRequired('invoicedAmount', $this->invoicedAmount, true);
        Model::validateRequired('offsetCostAmount', $this->offsetCostAmount, true);
        Model::validateRequired('offsetAcceptAmount', $this->offsetAcceptAmount, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('opId', $this->opId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('bizTime', $this->bizTime, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->billCycle) {
            $res['BillCycle'] = $this->billCycle;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->presentAmount) {
            $res['PresentAmount'] = $this->presentAmount;
        }
        if (null !== $this->canInvoiceAmount) {
            $res['CanInvoiceAmount'] = $this->canInvoiceAmount;
        }
        if (null !== $this->invoicedAmount) {
            $res['InvoicedAmount'] = $this->invoicedAmount;
        }
        if (null !== $this->offsetCostAmount) {
            $res['OffsetCostAmount'] = $this->offsetCostAmount;
        }
        if (null !== $this->offsetAcceptAmount) {
            $res['OffsetAcceptAmount'] = $this->offsetAcceptAmount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->opId) {
            $res['OpId'] = $this->opId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['BillCycle'])) {
            $model->billCycle = $map['BillCycle'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['PresentAmount'])) {
            $model->presentAmount = $map['PresentAmount'];
        }
        if (isset($map['CanInvoiceAmount'])) {
            $model->canInvoiceAmount = $map['CanInvoiceAmount'];
        }
        if (isset($map['InvoicedAmount'])) {
            $model->invoicedAmount = $map['InvoicedAmount'];
        }
        if (isset($map['OffsetCostAmount'])) {
            $model->offsetCostAmount = $map['OffsetCostAmount'];
        }
        if (isset($map['OffsetAcceptAmount'])) {
            $model->offsetAcceptAmount = $map['OffsetAcceptAmount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OpId'])) {
            $model->opId = $map['OpId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
