// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryAccountBillResponse : TeaModel {
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
        public QueryAccountBillResponseData Data { get; set; }
        public class QueryAccountBillResponseData : TeaModel {
            [NameInMap("BillingCycle")]
            [Validation(Required=true)]
            public string BillingCycle { get; set; }
            [NameInMap("AccountID")]
            [Validation(Required=true)]
            public string AccountID { get; set; }
            [NameInMap("AccountName")]
            [Validation(Required=true)]
            public string AccountName { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("Items")]
            [Validation(Required=true)]
            public QueryAccountBillResponseDataItems Items { get; set; }
            public class QueryAccountBillResponseDataItems : TeaModel {
                [NameInMap("Item")]
                [Validation(Required=true)]
                public List<QueryAccountBillResponseDataItemsItem> Item { get; set; }
                public class QueryAccountBillResponseDataItemsItem : TeaModel {
                    [NameInMap("CostUnit")]
                    [Validation(Required=true)]
                    public string CostUnit { get; set; }

                    [NameInMap("OwnerID")]
                    [Validation(Required=true)]
                    public string OwnerID { get; set; }

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

                    [NameInMap("DeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCashCoupons { get; set; }

                    [NameInMap("DeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public float? DeductedByPrepaidCard { get; set; }

                    [NameInMap("PaymentAmount")]
                    [Validation(Required=true)]
                    public float? PaymentAmount { get; set; }

                    [NameInMap("OutstandingAmount")]
                    [Validation(Required=true)]
                    public float? OutstandingAmount { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("OwnerName")]
                    [Validation(Required=true)]
                    public string OwnerName { get; set; }

                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductName")]
                    [Validation(Required=true)]
                    public string ProductName { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                }

            }
        };

    }

}
