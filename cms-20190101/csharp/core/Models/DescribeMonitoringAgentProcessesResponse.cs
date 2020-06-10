// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitoringAgentProcessesResponse : TeaModel {
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

        [NameInMap("NodeProcesses")]
        [Validation(Required=true)]
        public DescribeMonitoringAgentProcessesResponseNodeProcesses NodeProcesses { get; set; }
        public class DescribeMonitoringAgentProcessesResponseNodeProcesses : TeaModel {
            [NameInMap("NodeProcess")]
            [Validation(Required=true)]
            public List<DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess> NodeProcess { get; set; }
            public class DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess : TeaModel {
                    public long ProcessId { get; set; }
                    public string InstanceId { get; set; }
                    public string ProcessName { get; set; }
                    public string ProcessUser { get; set; }
                    public string Command { get; set; }
                    public string GroupId { get; set; }
            }
        };

    }

}
