// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeSlowLogsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeSlowLogsResponseItems Items { get; set; }
        public class DescribeSlowLogsResponseItems : TeaModel {
            [NameInMap("SQLSlowLog")]
            [Validation(Required=true)]
            public List<DescribeSlowLogsResponseItemsSQLSlowLog> SQLSlowLog { get; set; }
            public class DescribeSlowLogsResponseItemsSQLSlowLog : TeaModel {
                    public string DBNodeId { get; set; }
                    public long ParseMaxRowCount { get; set; }
                    public long TotalLockTimes { get; set; }
                    public string DBName { get; set; }
                    public long MaxExecutionTime { get; set; }
                    public string SQLHASH { get; set; }
                    public string SQLText { get; set; }
                    public string CreateTime { get; set; }
                    public long TotalExecutionTimes { get; set; }
                    public long ReturnTotalRowCounts { get; set; }
                    public long TotalExecutionCounts { get; set; }
                    public long MaxLockTime { get; set; }
                    public long ReturnMaxRowCount { get; set; }
                    public long ParseTotalRowCounts { get; set; }
            }
        };

    }

}
