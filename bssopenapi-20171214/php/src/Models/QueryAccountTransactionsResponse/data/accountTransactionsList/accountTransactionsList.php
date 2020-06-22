<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse\data\accountTransactionsList;

use AlibabaCloud\Tea\Model;

class accountTransactionsList extends Model
{
    /**
     * @description transactionNumber
     *
     * @var string
     */
    public $transactionNumber;

    /**
     * @description transactionTime
     *
     * @var string
     */
    public $transactionTime;

    /**
     * @description transactionFlow
     *
     * @var string
     */
    public $transactionFlow;

    /**
     * @description transactionType
     *
     * @var string
     */
    public $transactionType;

    /**
     * @description transactionChannel
     *
     * @var string
     */
    public $transactionChannel;

    /**
     * @description transactionChannelSN
     *
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @description fundType
     *
     * @var string
     */
    public $fundType;

    /**
     * @description recordID
     *
     * @var string
     */
    public $recordID;

    /**
     * @description remarks
     *
     * @var string
     */
    public $remarks;

    /**
     * @description billingCycle
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description amount
     *
     * @var string
     */
    public $amount;

    /**
     * @description balance
     *
     * @var string
     */
    public $balance;

    /**
     * @description transactionAccount
     *
     * @var string
     */
    public $transactionAccount;
    protected $_name = [
        'transactionNumber'    => 'TransactionNumber',
        'transactionTime'      => 'TransactionTime',
        'transactionFlow'      => 'TransactionFlow',
        'transactionType'      => 'TransactionType',
        'transactionChannel'   => 'TransactionChannel',
        'transactionChannelSN' => 'TransactionChannelSN',
        'fundType'             => 'FundType',
        'recordID'             => 'RecordID',
        'remarks'              => 'Remarks',
        'billingCycle'         => 'BillingCycle',
        'amount'               => 'Amount',
        'balance'              => 'Balance',
        'transactionAccount'   => 'TransactionAccount',
    ];

    public function validate()
    {
        Model::validateRequired('transactionNumber', $this->transactionNumber, true);
        Model::validateRequired('transactionTime', $this->transactionTime, true);
        Model::validateRequired('transactionFlow', $this->transactionFlow, true);
        Model::validateRequired('transactionType', $this->transactionType, true);
        Model::validateRequired('transactionChannel', $this->transactionChannel, true);
        Model::validateRequired('transactionChannelSN', $this->transactionChannelSN, true);
        Model::validateRequired('fundType', $this->fundType, true);
        Model::validateRequired('recordID', $this->recordID, true);
        Model::validateRequired('remarks', $this->remarks, true);
        Model::validateRequired('billingCycle', $this->billingCycle, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('balance', $this->balance, true);
        Model::validateRequired('transactionAccount', $this->transactionAccount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transactionNumber) {
            $res['TransactionNumber'] = $this->transactionNumber;
        }
        if (null !== $this->transactionTime) {
            $res['TransactionTime'] = $this->transactionTime;
        }
        if (null !== $this->transactionFlow) {
            $res['TransactionFlow'] = $this->transactionFlow;
        }
        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
        }
        if (null !== $this->transactionChannel) {
            $res['TransactionChannel'] = $this->transactionChannel;
        }
        if (null !== $this->transactionChannelSN) {
            $res['TransactionChannelSN'] = $this->transactionChannelSN;
        }
        if (null !== $this->fundType) {
            $res['FundType'] = $this->fundType;
        }
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->transactionAccount) {
            $res['TransactionAccount'] = $this->transactionAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountTransactionsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransactionNumber'])) {
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if (isset($map['TransactionTime'])) {
            $model->transactionTime = $map['TransactionTime'];
        }
        if (isset($map['TransactionFlow'])) {
            $model->transactionFlow = $map['TransactionFlow'];
        }
        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }
        if (isset($map['TransactionChannel'])) {
            $model->transactionChannel = $map['TransactionChannel'];
        }
        if (isset($map['TransactionChannelSN'])) {
            $model->transactionChannelSN = $map['TransactionChannelSN'];
        }
        if (isset($map['FundType'])) {
            $model->fundType = $map['FundType'];
        }
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['TransactionAccount'])) {
            $model->transactionAccount = $map['TransactionAccount'];
        }

        return $model;
    }
}
