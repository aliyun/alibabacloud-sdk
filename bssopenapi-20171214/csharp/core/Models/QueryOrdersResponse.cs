// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryOrdersResponse : TeaModel {
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
        public QueryOrdersResponseData Data { get; set; }
        public class QueryOrdersResponseData : TeaModel {
            [NameInMap("HostName")]
            [Validation(Required=true)]
            public string HostName { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("OrderList")]
            [Validation(Required=true)]
            public QueryOrdersResponseDataOrderList OrderList { get; set; }
            public class QueryOrdersResponseDataOrderList : TeaModel {
                [NameInMap("Order")]
                [Validation(Required=true)]
                public List<QueryOrdersResponseDataOrderListOrder> Order { get; set; }
                public class QueryOrdersResponseDataOrderListOrder : TeaModel {
                    [NameInMap("OrderId")]
                    [Validation(Required=true)]
                    public string OrderId { get; set; }

                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                    [NameInMap("OrderType")]
                    [Validation(Required=true)]
                    public string OrderType { get; set; }

                    [NameInMap("CreateTime")]
                    [Validation(Required=true)]
                    public string CreateTime { get; set; }

                    [NameInMap("PaymentTime")]
                    [Validation(Required=true)]
                    public string PaymentTime { get; set; }

                    [NameInMap("PaymentStatus")]
                    [Validation(Required=true)]
                    public string PaymentStatus { get; set; }

                    [NameInMap("PretaxGrossAmount")]
                    [Validation(Required=true)]
                    public string PretaxGrossAmount { get; set; }

                    [NameInMap("PretaxAmount")]
                    [Validation(Required=true)]
                    public string PretaxAmount { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("PretaxAmountLocal")]
                    [Validation(Required=true)]
                    public string PretaxAmountLocal { get; set; }

                    [NameInMap("Tax")]
                    [Validation(Required=true)]
                    public string Tax { get; set; }

                    [NameInMap("AfterTaxAmount")]
                    [Validation(Required=true)]
                    public string AfterTaxAmount { get; set; }

                    [NameInMap("PaymentCurrency")]
                    [Validation(Required=true)]
                    public string PaymentCurrency { get; set; }

                    [NameInMap("RelatedOrderId")]
                    [Validation(Required=true)]
                    public string RelatedOrderId { get; set; }

                }

            }
        };

    }

}
