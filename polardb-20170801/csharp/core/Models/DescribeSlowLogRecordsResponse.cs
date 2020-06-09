// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeSlowLogRecordsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

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
        public DescribeSlowLogRecordsResponseItems Items { get; set; }
        public class DescribeSlowLogRecordsResponseItems : TeaModel {
            [NameInMap("SQLSlowRecord")]
            [Validation(Required=true)]
            public List<DescribeSlowLogRecordsResponseItemsSQLSlowRecord> SQLSlowRecord { get; set; }
            public class DescribeSlowLogRecordsResponseItemsSQLSlowRecord : TeaModel {
                    public string HostAddress { get; set; }
                    public string DBName { get; set; }
                    public string SQLText { get; set; }
                    public long QueryTimes { get; set; }
                    public long LockTimes { get; set; }
                    public long ParseRowCounts { get; set; }
                    public long ReturnRowCounts { get; set; }
                    public string ExecutionStartTime { get; set; }
                    public string DBNodeId { get; set; }
            }
        };

    }

}
