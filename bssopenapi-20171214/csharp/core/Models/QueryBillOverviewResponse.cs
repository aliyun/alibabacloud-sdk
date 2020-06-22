// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryBillOverviewResponse : TeaModel {
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
        public QueryBillOverviewResponseData Data { get; set; }
        public class QueryBillOverviewResponseData : TeaModel {
            [NameInMap("BillingCycle")]
            [Validation(Required=true)]
            public string BillingCycle { get; set; }
            [NameInMap("AccountID")]
            [Validation(Required=true)]
            public string AccountID { get; set; }
            [NameInMap("AccountName")]
            [Validation(Required=true)]
            public string AccountName { get; set; }
            [NameInMap("Items")]
            [Validation(Required=true)]
            public QueryBillOverviewResponseDataItems Items { get; set; }
            public class QueryBillOverviewResponseDataItems : TeaModel {
                [NameInMap("Item")]
                [Validation(Required=true)]
                public List<QueryBillOverviewResponseDataItemsItem> Item { get; set; }
                public class QueryBillOverviewResponseDataItemsItem : TeaModel {
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

                    [NameInMap("ProductName")]
                    [Validation(Required=true)]
                    public string ProductName { get; set; }

                    [NameInMap("ProductDetail")]
                    [Validation(Required=true)]
                    public string ProductDetail { get; set; }

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

                    [NameInMap("PaymentAmount")]
                    [Validation(Required=true)]
                    public float? PaymentAmount { get; set; }

                    [NameInMap("OutstandingAmount")]
                    [Validation(Required=true)]
                    public float? OutstandingAmount { get; set; }

                    [NameInMap("DeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCashCoupons { get; set; }

                    [NameInMap("DeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public float? DeductedByPrepaidCard { get; set; }

                    [NameInMap("PretaxAmountLocal")]
                    [Validation(Required=true)]
                    public float? PretaxAmountLocal { get; set; }

                    [NameInMap("Tax")]
                    [Validation(Required=true)]
                    public float? Tax { get; set; }

                    [NameInMap("AfterTaxAmount")]
                    [Validation(Required=true)]
                    public float? AfterTaxAmount { get; set; }

                    [NameInMap("PaymentCurrency")]
                    [Validation(Required=true)]
                    public string PaymentCurrency { get; set; }

                    [NameInMap("RoundDownDiscount")]
                    [Validation(Required=true)]
                    public string RoundDownDiscount { get; set; }

                }

            }
        };

    }

}
