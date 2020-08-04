// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSpotPriceHistoryResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NextOffset")]
        [Validation(Required=true)]
        public int? NextOffset { get; set; }

        [NameInMap("Currency")]
        [Validation(Required=true)]
        public string Currency { get; set; }

        [NameInMap("SpotPrices")]
        [Validation(Required=true)]
        public DescribeSpotPriceHistoryResponseSpotPrices SpotPrices { get; set; }
        public class DescribeSpotPriceHistoryResponseSpotPrices : TeaModel {
            [NameInMap("SpotPriceType")]
            [Validation(Required=true)]
            public List<DescribeSpotPriceHistoryResponseSpotPricesSpotPriceType> SpotPriceType { get; set; }
            public class DescribeSpotPriceHistoryResponseSpotPricesSpotPriceType : TeaModel {
                    public string ZoneId { get; set; }
                    public string InstanceType { get; set; }
                    public string IoOptimized { get; set; }
                    public string Timestamp { get; set; }
                    public string NetworkType { get; set; }
                    public float? SpotPrice { get; set; }
                    public float? OriginPrice { get; set; }
            }
        };

    }

}
