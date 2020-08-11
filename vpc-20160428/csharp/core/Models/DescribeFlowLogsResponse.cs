// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeFlowLogsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public string TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public string PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public string PageSize { get; set; }

        [NameInMap("FlowLogs")]
        [Validation(Required=true)]
        public DescribeFlowLogsResponseFlowLogs FlowLogs { get; set; }
        public class DescribeFlowLogsResponseFlowLogs : TeaModel {
            [NameInMap("FlowLog")]
            [Validation(Required=true)]
            public List<DescribeFlowLogsResponseFlowLogsFlowLog> FlowLog { get; set; }
            public class DescribeFlowLogsResponseFlowLogsFlowLog : TeaModel {
                    public string FlowLogId { get; set; }
                    public string FlowLogName { get; set; }
                    public string Description { get; set; }
                    public string CreationTime { get; set; }
                    public string ResourceType { get; set; }
                    public string ResourceId { get; set; }
                    public string ProjectName { get; set; }
                    public string LogStoreName { get; set; }
                    public string Status { get; set; }
                    public string TrafficType { get; set; }
                    public string RegionId { get; set; }
            }
        };

    }

}
