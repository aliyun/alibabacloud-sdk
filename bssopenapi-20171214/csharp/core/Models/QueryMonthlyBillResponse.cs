// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryMonthlyBillResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public QueryMonthlyBillResponseData Data { get; set; }
        public class QueryMonthlyBillResponseData : TeaModel {
            [NameInMap("OutstandingAmount")]
            [Validation(Required=true)]
            public float? OutstandingAmount { get; set; }
            [NameInMap("TotalOutstandingAmount")]
            [Validation(Required=true)]
            public float? TotalOutstandingAmount { get; set; }
            [NameInMap("NewInvoiceAmount")]
            [Validation(Required=true)]
            public float? NewInvoiceAmount { get; set; }
            [NameInMap("BillingCycle")]
            [Validation(Required=true)]
            public string BillingCycle { get; set; }
            [NameInMap("Items")]
            [Validation(Required=true)]
            public QueryMonthlyBillResponseDataItems Items { get; set; }
            public class QueryMonthlyBillResponseDataItems : TeaModel {
                [NameInMap("Item")]
                [Validation(Required=true)]
                public List<QueryMonthlyBillResponseDataItemsItem> Item { get; set; }
                public class QueryMonthlyBillResponseDataItemsItem : TeaModel {
                    [NameInMap("Item")]
                    [Validation(Required=true)]
                    public string Item { get; set; }

                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                    [NameInMap("SolutionCode")]
                    [Validation(Required=true)]
                    public string SolutionCode { get; set; }

                    [NameInMap("SolutionName")]
                    [Validation(Required=true)]
                    public string SolutionName { get; set; }

                    [NameInMap("PretaxGrossAmount")]
                    [Validation(Required=true)]
                    public float? PretaxGrossAmount { get; set; }

                    [NameInMap("InvoiceDiscount")]
                    [Validation(Required=true)]
                    public float? InvoiceDiscount { get; set; }

                    [NameInMap("DeductedByCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCoupons { get; set; }

                    [NameInMap("PretaxAmount")]
                    [Validation(Required=true)]
                    public float? PretaxAmount { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("PretaxAmountLocal")]
                    [Validation(Required=true)]
                    public float? PretaxAmountLocal { get; set; }

                    [NameInMap("Tax")]
                    [Validation(Required=true)]
                    public float? Tax { get; set; }

                    [NameInMap("AfterTaxAmount")]
                    [Validation(Required=true)]
                    public float? AfterTaxAmount { get; set; }

                    [NameInMap("OutstandingAmount")]
                    [Validation(Required=true)]
                    public float? OutstandingAmount { get; set; }

                    [NameInMap("DeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCashCoupons { get; set; }

                    [NameInMap("DeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public float? DeductedByPrepaidCard { get; set; }

                    [NameInMap("PaymentAmount")]
                    [Validation(Required=true)]
                    public float? PaymentAmount { get; set; }

                    [NameInMap("PaymentCurrency")]
                    [Validation(Required=true)]
                    public string PaymentCurrency { get; set; }

                }

            }
        };

    }

}
