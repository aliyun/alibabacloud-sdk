// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSlowLogsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

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
                    public long SlowLogId { get; set; }
                    public string SQLHASH { get; set; }
                    public string SQLIdStr { get; set; }
                    public string DBName { get; set; }
                    public string SQLText { get; set; }
                    public long MySQLTotalExecutionCounts { get; set; }
                    public long MySQLTotalExecutionTimes { get; set; }
                    public long TotalLockTimes { get; set; }
                    public long MaxLockTime { get; set; }
                    public long ParseTotalRowCounts { get; set; }
                    public long ParseMaxRowCount { get; set; }
                    public long ReturnTotalRowCounts { get; set; }
                    public long ReturnMaxRowCount { get; set; }
                    public string CreateTime { get; set; }
                    public long SQLServerTotalExecutionCounts { get; set; }
                    public long SQLServerTotalExecutionTimes { get; set; }
                    public long TotalLogicalReadCounts { get; set; }
                    public long TotalPhysicalReadCounts { get; set; }
                    public string ReportTime { get; set; }
                    public long MaxExecutionTime { get; set; }
                    public long AvgExecutionTime { get; set; }
            }
        };

    }

}
