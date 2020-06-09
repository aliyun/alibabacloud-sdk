// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeFileSystemStatisticsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("FileSystemStatistics")]
        [Validation(Required=true)]
        public DescribeFileSystemStatisticsResponseFileSystemStatistics FileSystemStatistics { get; set; }
        public class DescribeFileSystemStatisticsResponseFileSystemStatistics : TeaModel {
            [NameInMap("FileSystemStatistic")]
            [Validation(Required=true)]
            public List<DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic> FileSystemStatistic { get; set; }
            public class DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic : TeaModel {
                    public string FileSystemType { get; set; }
                    public int? TotalCount { get; set; }
                    public long MeteredSize { get; set; }
                    public int? ExpiredCount { get; set; }
                    public int? ExpiringCount { get; set; }
            }
        };

    }

}
