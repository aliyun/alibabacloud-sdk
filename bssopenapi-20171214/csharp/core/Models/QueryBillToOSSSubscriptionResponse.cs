// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryBillToOSSSubscriptionResponse : TeaModel {
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
        public QueryBillToOSSSubscriptionResponseData Data { get; set; }
        public class QueryBillToOSSSubscriptionResponseData : TeaModel {
            [NameInMap("AccountID")]
            [Validation(Required=true)]
            public string AccountID { get; set; }
            [NameInMap("AccountName")]
            [Validation(Required=true)]
            public string AccountName { get; set; }
            [NameInMap("Items")]
            [Validation(Required=true)]
            public QueryBillToOSSSubscriptionResponseDataItems Items { get; set; }
            public class QueryBillToOSSSubscriptionResponseDataItems : TeaModel {
                [NameInMap("Item")]
                [Validation(Required=true)]
                public List<QueryBillToOSSSubscriptionResponseDataItemsItem> Item { get; set; }
                public class QueryBillToOSSSubscriptionResponseDataItemsItem : TeaModel {
                    [NameInMap("SubscribeType")]
                    [Validation(Required=true)]
                    public string SubscribeType { get; set; }

                    [NameInMap("SubscribeBucket")]
                    [Validation(Required=true)]
                    public string SubscribeBucket { get; set; }

                    [NameInMap("BucketOwnerId")]
                    [Validation(Required=true)]
                    public long BucketOwnerId { get; set; }

                    [NameInMap("SubscribeTime")]
                    [Validation(Required=true)]
                    public string SubscribeTime { get; set; }

                    [NameInMap("SubscribeLanguage")]
                    [Validation(Required=true)]
                    public string SubscribeLanguage { get; set; }

                    [NameInMap("MultAccountRelSubscribe")]
                    [Validation(Required=true)]
                    public string MultAccountRelSubscribe { get; set; }

                }

            }
        };

    }

}
