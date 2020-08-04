<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponse\data;

use AlibabaCloud\Tea\Model;

class box extends Model
{
    /**
     * @var array
     */
    public $invoiceCodes;

    /**
     * @var array
     */
    public $invoiceNoes;

    /**
     * @var array
     */
    public $invoiceDates;

    /**
     * @var array
     */
    public $invoiceFakeCodes;

    /**
     * @var array
     */
    public $payerNames;

    /**
     * @var array
     */
    public $payerRegisterNoes;

    /**
     * @var array
     */
    public $payerAddresses;

    /**
     * @var array
     */
    public $payerBankNames;

    /**
     * @var array
     */
    public $withoutTaxAmounts;

    /**
     * @var array
     */
    public $taxAmounts;

    /**
     * @var array
     */
    public $sumAmounts;

    /**
     * @var array
     */
    public $invoiceAmounts;

    /**
     * @var array
     */
    public $payeeNames;

    /**
     * @var array
     */
    public $payeeRegisterNoes;

    /**
     * @var array
     */
    public $payeeAddresses;

    /**
     * @var array
     */
    public $payeeBankNames;

    /**
     * @var array
     */
    public $payees;

    /**
     * @var array
     */
    public $checkers;

    /**
     * @var array
     */
    public $clerks;
    protected $_name = [
        'invoiceCodes'      => 'InvoiceCodes',
        'invoiceNoes'       => 'InvoiceNoes',
        'invoiceDates'      => 'InvoiceDates',
        'invoiceFakeCodes'  => 'InvoiceFakeCodes',
        'payerNames'        => 'PayerNames',
        'payerRegisterNoes' => 'PayerRegisterNoes',
        'payerAddresses'    => 'PayerAddresses',
        'payerBankNames'    => 'PayerBankNames',
        'withoutTaxAmounts' => 'WithoutTaxAmounts',
        'taxAmounts'        => 'TaxAmounts',
        'sumAmounts'        => 'SumAmounts',
        'invoiceAmounts'    => 'InvoiceAmounts',
        'payeeNames'        => 'PayeeNames',
        'payeeRegisterNoes' => 'PayeeRegisterNoes',
        'payeeAddresses'    => 'PayeeAddresses',
        'payeeBankNames'    => 'PayeeBankNames',
        'payees'            => 'Payees',
        'checkers'          => 'Checkers',
        'clerks'            => 'Clerks',
    ];

    public function validate()
    {
        Model::validateRequired('invoiceCodes', $this->invoiceCodes, true);
        Model::validateRequired('invoiceNoes', $this->invoiceNoes, true);
        Model::validateRequired('invoiceDates', $this->invoiceDates, true);
        Model::validateRequired('invoiceFakeCodes', $this->invoiceFakeCodes, true);
        Model::validateRequired('payerNames', $this->payerNames, true);
        Model::validateRequired('payerRegisterNoes', $this->payerRegisterNoes, true);
        Model::validateRequired('payerAddresses', $this->payerAddresses, true);
        Model::validateRequired('payerBankNames', $this->payerBankNames, true);
        Model::validateRequired('withoutTaxAmounts', $this->withoutTaxAmounts, true);
        Model::validateRequired('taxAmounts', $this->taxAmounts, true);
        Model::validateRequired('sumAmounts', $this->sumAmounts, true);
        Model::validateRequired('invoiceAmounts', $this->invoiceAmounts, true);
        Model::validateRequired('payeeNames', $this->payeeNames, true);
        Model::validateRequired('payeeRegisterNoes', $this->payeeRegisterNoes, true);
        Model::validateRequired('payeeAddresses', $this->payeeAddresses, true);
        Model::validateRequired('payeeBankNames', $this->payeeBankNames, true);
        Model::validateRequired('payees', $this->payees, true);
        Model::validateRequired('checkers', $this->checkers, true);
        Model::validateRequired('clerks', $this->clerks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invoiceCodes) {
            $res['InvoiceCodes'] = $this->invoiceCodes;
        }
        if (null !== $this->invoiceNoes) {
            $res['InvoiceNoes'] = $this->invoiceNoes;
        }
        if (null !== $this->invoiceDates) {
            $res['InvoiceDates'] = $this->invoiceDates;
        }
        if (null !== $this->invoiceFakeCodes) {
            $res['InvoiceFakeCodes'] = $this->invoiceFakeCodes;
        }
        if (null !== $this->payerNames) {
            $res['PayerNames'] = $this->payerNames;
        }
        if (null !== $this->payerRegisterNoes) {
            $res['PayerRegisterNoes'] = $this->payerRegisterNoes;
        }
        if (null !== $this->payerAddresses) {
            $res['PayerAddresses'] = $this->payerAddresses;
        }
        if (null !== $this->payerBankNames) {
            $res['PayerBankNames'] = $this->payerBankNames;
        }
        if (null !== $this->withoutTaxAmounts) {
            $res['WithoutTaxAmounts'] = $this->withoutTaxAmounts;
        }
        if (null !== $this->taxAmounts) {
            $res['TaxAmounts'] = $this->taxAmounts;
        }
        if (null !== $this->sumAmounts) {
            $res['SumAmounts'] = $this->sumAmounts;
        }
        if (null !== $this->invoiceAmounts) {
            $res['InvoiceAmounts'] = $this->invoiceAmounts;
        }
        if (null !== $this->payeeNames) {
            $res['PayeeNames'] = $this->payeeNames;
        }
        if (null !== $this->payeeRegisterNoes) {
            $res['PayeeRegisterNoes'] = $this->payeeRegisterNoes;
        }
        if (null !== $this->payeeAddresses) {
            $res['PayeeAddresses'] = $this->payeeAddresses;
        }
        if (null !== $this->payeeBankNames) {
            $res['PayeeBankNames'] = $this->payeeBankNames;
        }
        if (null !== $this->payees) {
            $res['Payees'] = $this->payees;
        }
        if (null !== $this->checkers) {
            $res['Checkers'] = $this->checkers;
        }
        if (null !== $this->clerks) {
            $res['Clerks'] = $this->clerks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return box
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvoiceCodes'])) {
            if (!empty($map['InvoiceCodes'])) {
                $model->invoiceCodes = $map['InvoiceCodes'];
            }
        }
        if (isset($map['InvoiceNoes'])) {
            if (!empty($map['InvoiceNoes'])) {
                $model->invoiceNoes = $map['InvoiceNoes'];
            }
        }
        if (isset($map['InvoiceDates'])) {
            if (!empty($map['InvoiceDates'])) {
                $model->invoiceDates = $map['InvoiceDates'];
            }
        }
        if (isset($map['InvoiceFakeCodes'])) {
            if (!empty($map['InvoiceFakeCodes'])) {
                $model->invoiceFakeCodes = $map['InvoiceFakeCodes'];
            }
        }
        if (isset($map['PayerNames'])) {
            if (!empty($map['PayerNames'])) {
                $model->payerNames = $map['PayerNames'];
            }
        }
        if (isset($map['PayerRegisterNoes'])) {
            if (!empty($map['PayerRegisterNoes'])) {
                $model->payerRegisterNoes = $map['PayerRegisterNoes'];
            }
        }
        if (isset($map['PayerAddresses'])) {
            if (!empty($map['PayerAddresses'])) {
                $model->payerAddresses = $map['PayerAddresses'];
            }
        }
        if (isset($map['PayerBankNames'])) {
            if (!empty($map['PayerBankNames'])) {
                $model->payerBankNames = $map['PayerBankNames'];
            }
        }
        if (isset($map['WithoutTaxAmounts'])) {
            if (!empty($map['WithoutTaxAmounts'])) {
                $model->withoutTaxAmounts = $map['WithoutTaxAmounts'];
            }
        }
        if (isset($map['TaxAmounts'])) {
            if (!empty($map['TaxAmounts'])) {
                $model->taxAmounts = $map['TaxAmounts'];
            }
        }
        if (isset($map['SumAmounts'])) {
            if (!empty($map['SumAmounts'])) {
                $model->sumAmounts = $map['SumAmounts'];
            }
        }
        if (isset($map['InvoiceAmounts'])) {
            if (!empty($map['InvoiceAmounts'])) {
                $model->invoiceAmounts = $map['InvoiceAmounts'];
            }
        }
        if (isset($map['PayeeNames'])) {
            if (!empty($map['PayeeNames'])) {
                $model->payeeNames = $map['PayeeNames'];
            }
        }
        if (isset($map['PayeeRegisterNoes'])) {
            if (!empty($map['PayeeRegisterNoes'])) {
                $model->payeeRegisterNoes = $map['PayeeRegisterNoes'];
            }
        }
        if (isset($map['PayeeAddresses'])) {
            if (!empty($map['PayeeAddresses'])) {
                $model->payeeAddresses = $map['PayeeAddresses'];
            }
        }
        if (isset($map['PayeeBankNames'])) {
            if (!empty($map['PayeeBankNames'])) {
                $model->payeeBankNames = $map['PayeeBankNames'];
            }
        }
        if (isset($map['Payees'])) {
            if (!empty($map['Payees'])) {
                $model->payees = $map['Payees'];
            }
        }
        if (isset($map['Checkers'])) {
            if (!empty($map['Checkers'])) {
                $model->checkers = $map['Checkers'];
            }
        }
        if (isset($map['Clerks'])) {
            if (!empty($map['Clerks'])) {
                $model->clerks = $map['Clerks'];
            }
        }

        return $model;
    }
}
