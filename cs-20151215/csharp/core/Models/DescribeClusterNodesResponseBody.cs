// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClusterNodesResponseBody : TeaModel {
        [NameInMap("nodes")]
        [Validation(Required=true)]
        public DescribeClusterNodesResponseBodyNodes Nodes { get; set; }
        public class DescribeClusterNodesResponseBodyNodes : TeaModel {
            [NameInMap("nodes")]
            [Validation(Required=true)]
            public List<DescribeClusterNodesResponseBodyNodesNodes> Nodes { get; set; }
            public class DescribeClusterNodesResponseBodyNodesNodes : TeaModel {
                    public string InstanceId { get; set; }
                    public string InstanceRole { get; set; }
                    public string InstanceName { get; set; }
                    public string HostName { get; set; }
                    public string NodeName { get; set; }
                    public string InstanceType { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string ImageId { get; set; }
                    public string InstanceTypeFamily { get; set; }
                    public string DockerVersion { get; set; }
                    public string AgentVersion { get; set; }
                    public bool? IsLeader { get; set; }
                    public int? Containers { get; set; }
                    public bool? IsAliyunNode { get; set; }
                    public string State { get; set; }
                    public string NodepoolId { get; set; }
                    public string ErrorMessage { get; set; }
                    public DescribeClusterNodesResponseBodyNodesNodesIpAddress IpAddress { get; set; }
                    public class DescribeClusterNodesResponseBodyNodesNodesIpAddress : TeaModel {
                        [NameInMap("ip")]
                        [Validation(Required=true)]
                        public List<string> Ip { get; set; }

                    }
            }
        };

        [NameInMap("page")]
        [Validation(Required=true)]
        public DescribeClusterNodesResponseBodyPage Page { get; set; }
        public class DescribeClusterNodesResponseBodyPage : TeaModel {
            [NameInMap("total_count")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("page_number")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("page_size")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
        };

    }

}
