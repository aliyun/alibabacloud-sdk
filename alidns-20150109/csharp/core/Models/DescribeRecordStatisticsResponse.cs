// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeRecordStatisticsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Statistics")]
        [Validation(Required=true)]
        public DescribeRecordStatisticsResponseStatistics Statistics { get; set; }
        public class DescribeRecordStatisticsResponseStatistics : TeaModel {
            [NameInMap("Statistic")]
            [Validation(Required=true)]
            public List<DescribeRecordStatisticsResponseStatisticsStatistic> Statistic { get; set; }
            public class DescribeRecordStatisticsResponseStatisticsStatistic : TeaModel {
                    public long Timestamp { get; set; }
                    public long Count { get; set; }
            }
        };

    }

}
