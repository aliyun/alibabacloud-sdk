// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainStatisticsSummaryResponse : TeaModel {
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
        public DescribeDomainStatisticsSummaryResponseStatistics Statistics { get; set; }
        public class DescribeDomainStatisticsSummaryResponseStatistics : TeaModel {
            [NameInMap("Statistic")]
            [Validation(Required=true)]
            public List<DescribeDomainStatisticsSummaryResponseStatisticsStatistic> Statistic { get; set; }
            public class DescribeDomainStatisticsSummaryResponseStatisticsStatistic : TeaModel {
                    public string DomainName { get; set; }
                    public long Count { get; set; }
            }
        };

    }

}
