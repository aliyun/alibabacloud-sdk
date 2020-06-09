// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeRecordLogsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public long TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("RecordLogs")]
        [Validation(Required=true)]
        public DescribeRecordLogsResponseRecordLogs RecordLogs { get; set; }
        public class DescribeRecordLogsResponseRecordLogs : TeaModel {
            [NameInMap("RecordLog")]
            [Validation(Required=true)]
            public List<DescribeRecordLogsResponseRecordLogsRecordLog> RecordLog { get; set; }
            public class DescribeRecordLogsResponseRecordLogsRecordLog : TeaModel {
                    public string ActionTime { get; set; }
                    public long ActionTimestamp { get; set; }
                    public string Action { get; set; }
                    public string Message { get; set; }
                    public string ClientIp { get; set; }
            }
        };

    }

}
