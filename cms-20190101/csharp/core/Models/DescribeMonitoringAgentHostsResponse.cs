// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitoringAgentHostsResponse : TeaModel {
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

        [NameInMap("PageTotal")]
        [Validation(Required=true)]
        public int? PageTotal { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("Hosts")]
        [Validation(Required=true)]
        public DescribeMonitoringAgentHostsResponseHosts Hosts { get; set; }
        public class DescribeMonitoringAgentHostsResponseHosts : TeaModel {
            [NameInMap("Host")]
            [Validation(Required=true)]
            public List<DescribeMonitoringAgentHostsResponseHostsHost> Host { get; set; }
            public class DescribeMonitoringAgentHostsResponseHostsHost : TeaModel {
                    public string InstanceId { get; set; }
                    public string SerialNumber { get; set; }
                    public string HostName { get; set; }
                    public long AliUid { get; set; }
                    public string OperatingSystem { get; set; }
                    public string IpGroup { get; set; }
                    public string Region { get; set; }
                    public string AgentVersion { get; set; }
                    public string EipAddress { get; set; }
                    public string EipId { get; set; }
                    public bool? IsAliyunHost { get; set; }
                    public string NatIp { get; set; }
                    public string NetworkType { get; set; }
                    public string InstanceTypeFamily { get; set; }
            }
        };

    }

}
