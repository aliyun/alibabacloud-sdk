// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainStatisticsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Statistics")]
        [Validation(Required=true)]
        public DescribeDomainStatisticsResponseStatistics Statistics { get; set; }
        public class DescribeDomainStatisticsResponseStatistics : TeaModel {
            [NameInMap("Statistic")]
            [Validation(Required=true)]
            public List<DescribeDomainStatisticsResponseStatisticsStatistic> Statistic { get; set; }
            public class DescribeDomainStatisticsResponseStatisticsStatistic : TeaModel {
                    public long Timestamp { get; set; }
                    public long Count { get; set; }
            }
        };

    }

}
