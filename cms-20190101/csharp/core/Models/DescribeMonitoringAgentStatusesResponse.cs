// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitoringAgentStatusesResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NodeStatusList")]
        [Validation(Required=true)]
        public DescribeMonitoringAgentStatusesResponseNodeStatusList NodeStatusList { get; set; }
        public class DescribeMonitoringAgentStatusesResponseNodeStatusList : TeaModel {
            [NameInMap("NodeStatus")]
            [Validation(Required=true)]
            public List<DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus> NodeStatus { get; set; }
            public class DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus : TeaModel {
                    public string InstanceId { get; set; }
                    public bool? AutoInstall { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
