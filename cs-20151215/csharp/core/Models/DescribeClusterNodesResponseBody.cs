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
        public List<DescribeClusterNodesResponseBodyNodes> Nodes { get; set; }
        public class DescribeClusterNodesResponseBodyNodes : TeaModel {
            [NameInMap("instance_type")]
            [Validation(Required=true)]
            public string InstanceType { get; set; }

            [NameInMap("instance_role")]
            [Validation(Required=true)]
            public string InstanceRole { get; set; }

            [NameInMap("expired_time")]
            [Validation(Required=true)]
            public string ExpiredTime { get; set; }

            [NameInMap("state")]
            [Validation(Required=true)]
            public string State { get; set; }

            [NameInMap("instance_name")]
            [Validation(Required=true)]
            public string InstanceName { get; set; }

            [NameInMap("is_aliyun_node")]
            [Validation(Required=true)]
            public bool? IsAliyunNode { get; set; }

            [NameInMap("host_name")]
            [Validation(Required=true)]
            public string HostName { get; set; }

            [NameInMap("image_id")]
            [Validation(Required=true)]
            public string ImageId { get; set; }

            [NameInMap("instance_status")]
            [Validation(Required=true)]
            public string InstanceStatus { get; set; }

            [NameInMap("instance_charge_type")]
            [Validation(Required=true)]
            public string InstanceChargeType { get; set; }

            [NameInMap("source")]
            [Validation(Required=true)]
            public string Source { get; set; }

            [NameInMap("error_message")]
            [Validation(Required=true)]
            public string ErrorMessage { get; set; }

            [NameInMap("node_status")]
            [Validation(Required=true)]
            public string NodeStatus { get; set; }

            [NameInMap("creation_time")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("node_name")]
            [Validation(Required=true)]
            public string NodeName { get; set; }

            [NameInMap("instance_type_family")]
            [Validation(Required=true)]
            public string InstanceTypeFamily { get; set; }

            [NameInMap("nodepool_id")]
            [Validation(Required=true)]
            public string NodepoolId { get; set; }

            [NameInMap("instance_id")]
            [Validation(Required=true)]
            public string InstanceId { get; set; }

            [NameInMap("ip_address")]
            [Validation(Required=true)]
            public List<string> IpAddress { get; set; }

        }

        [NameInMap("page")]
        [Validation(Required=true)]
        public DescribeClusterNodesResponseBodyPage Page { get; set; }
        public class DescribeClusterNodesResponseBodyPage : TeaModel {
            [NameInMap("page_size")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("page_number")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("total_count")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
        };

    }

}
