// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryProductListResponse : TeaModel {
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
        public QueryProductListResponseData Data { get; set; }
        public class QueryProductListResponseData : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("ProductList")]
            [Validation(Required=true)]
            public QueryProductListResponseDataProductList ProductList { get; set; }
            public class QueryProductListResponseDataProductList : TeaModel {
                [NameInMap("Product")]
                [Validation(Required=true)]
                public List<QueryProductListResponseDataProductListProduct> Product { get; set; }
                public class QueryProductListResponseDataProductListProduct : TeaModel {
                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductName")]
                    [Validation(Required=true)]
                    public string ProductName { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                }

            }
        };

    }

}
