// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSQLLogRecordsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public long TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeSQLLogRecordsResponseItems Items { get; set; }
        public class DescribeSQLLogRecordsResponseItems : TeaModel {
            [NameInMap("SQLRecord")]
            [Validation(Required=true)]
            public List<DescribeSQLLogRecordsResponseItemsSQLRecord> SQLRecord { get; set; }
            public class DescribeSQLLogRecordsResponseItemsSQLRecord : TeaModel {
                    public string DBName { get; set; }
                    public string AccountName { get; set; }
                    public string HostAddress { get; set; }
                    public string SQLText { get; set; }
                    public long TotalExecutionTimes { get; set; }
                    public long ReturnRowCounts { get; set; }
                    public string ExecuteTime { get; set; }
                    public string ThreadID { get; set; }
            }
        };

    }

}
