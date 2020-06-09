// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeRecordStatisticsSummaryResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalItems")]
        [Validation(Required=true)]
        public int? TotalItems { get; set; }

        [NameInMap("TotalPages")]
        [Validation(Required=true)]
        public int? TotalPages { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Statistics")]
        [Validation(Required=true)]
        public DescribeRecordStatisticsSummaryResponseStatistics Statistics { get; set; }
        public class DescribeRecordStatisticsSummaryResponseStatistics : TeaModel {
            [NameInMap("Statistic")]
            [Validation(Required=true)]
            public List<DescribeRecordStatisticsSummaryResponseStatisticsStatistic> Statistic { get; set; }
            public class DescribeRecordStatisticsSummaryResponseStatisticsStatistic : TeaModel {
                    public string SubDomain { get; set; }
                    public long Count { get; set; }
            }
        };

    }

}
