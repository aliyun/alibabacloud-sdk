// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("InstanceName")]
        [Validation(Required=true)]
        public string InstanceName { get; set; }

        [NameInMap("ImageId")]
        [Validation(Required=true)]
        public string ImageId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("ClusterId")]
        [Validation(Required=true)]
        public string ClusterId { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=true)]
        public string InstanceType { get; set; }

        [NameInMap("Cpu")]
        [Validation(Required=true)]
        public int? Cpu { get; set; }

        [NameInMap("Memory")]
        [Validation(Required=true)]
        public int? Memory { get; set; }

        [NameInMap("HostName")]
        [Validation(Required=true)]
        public string HostName { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("InternetChargeType")]
        [Validation(Required=true)]
        public string InternetChargeType { get; set; }

        [NameInMap("InternetMaxBandwidthIn")]
        [Validation(Required=true)]
        public int? InternetMaxBandwidthIn { get; set; }

        [NameInMap("InternetMaxBandwidthOut")]
        [Validation(Required=true)]
        public int? InternetMaxBandwidthOut { get; set; }

        [NameInMap("VlanId")]
        [Validation(Required=true)]
        public string VlanId { get; set; }

        [NameInMap("SerialNumber")]
        [Validation(Required=true)]
        public string SerialNumber { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("InstanceNetworkType")]
        [Validation(Required=true)]
        public string InstanceNetworkType { get; set; }

        [NameInMap("IoOptimized")]
        [Validation(Required=true)]
        public string IoOptimized { get; set; }

        [NameInMap("InstanceChargeType")]
        [Validation(Required=true)]
        public string InstanceChargeType { get; set; }

        [NameInMap("ExpiredTime")]
        [Validation(Required=true)]
        public string ExpiredTime { get; set; }

        [NameInMap("StoppedMode")]
        [Validation(Required=true)]
        public string StoppedMode { get; set; }

        [NameInMap("CreditSpecification")]
        [Validation(Required=true)]
        public string CreditSpecification { get; set; }

        [NameInMap("OperationLocks")]
        [Validation(Required=true)]
        public DescribeInstanceAttributeResponseOperationLocks OperationLocks { get; set; }
        public class DescribeInstanceAttributeResponseOperationLocks : TeaModel {
            [NameInMap("LockReason")]
            [Validation(Required=true)]
            public List<DescribeInstanceAttributeResponseOperationLocksLockReason> LockReason { get; set; }
            public class DescribeInstanceAttributeResponseOperationLocksLockReason : TeaModel {
                    public string LockReason { get; set; }
            }
        };

        [NameInMap("VpcAttributes")]
        [Validation(Required=true)]
        public DescribeInstanceAttributeResponseVpcAttributes VpcAttributes { get; set; }
        public class DescribeInstanceAttributeResponseVpcAttributes : TeaModel {
            [NameInMap("VpcId")]
            [Validation(Required=true)]
            public string VpcId { get; set; }
            [NameInMap("VSwitchId")]
            [Validation(Required=true)]
            public string VSwitchId { get; set; }
            [NameInMap("NatIpAddress")]
            [Validation(Required=true)]
            public string NatIpAddress { get; set; }
            [NameInMap("PrivateIpAddress")]
            [Validation(Required=true)]
            public DescribeInstanceAttributeResponseVpcAttributesPrivateIpAddress PrivateIpAddress { get; set; }
            public class DescribeInstanceAttributeResponseVpcAttributesPrivateIpAddress : TeaModel {
                [NameInMap("IpAddress")]
                [Validation(Required=true)]
                public List<string> IpAddress { get; set; }

            }
        };

        [NameInMap("EipAddress")]
        [Validation(Required=true)]
        public DescribeInstanceAttributeResponseEipAddress EipAddress { get; set; }
        public class DescribeInstanceAttributeResponseEipAddress : TeaModel {
            [NameInMap("AllocationId")]
            [Validation(Required=true)]
            public string AllocationId { get; set; }
            [NameInMap("IpAddress")]
            [Validation(Required=true)]
            public string IpAddress { get; set; }
            [NameInMap("Bandwidth")]
            [Validation(Required=true)]
            public int? Bandwidth { get; set; }
            [NameInMap("InternetChargeType")]
            [Validation(Required=true)]
            public string InternetChargeType { get; set; }
        };

        [NameInMap("DedicatedHostAttribute")]
        [Validation(Required=true)]
        public DescribeInstanceAttributeResponseDedicatedHostAttribute DedicatedHostAttribute { get; set; }
        public class DescribeInstanceAttributeResponseDedicatedHostAttribute : TeaModel {
            [NameInMap("DedicatedHostId")]
            [Validation(Required=true)]
            public string DedicatedHostId { get; set; }
            [NameInMap("DedicatedHostName")]
            [Validation(Required=true)]
            public string DedicatedHostName { get; set; }
        };

        [NameInMap("SecurityGroupIds")]
        [Validation(Required=true)]
        public DescribeInstanceAttributeResponseSecurityGroupIds SecurityGroupIds { get; set; }
        public class DescribeInstanceAttributeResponseSecurityGroupIds : TeaModel {
            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public List<string> SecurityGroupId { get; set; }
        };

        [NameInMap("PublicIpAddress")]
        [Validation(Required=true)]
        public DescribeInstanceAttributeResponsePublicIpAddress PublicIpAddress { get; set; }
        public class DescribeInstanceAttributeResponsePublicIpAddress : TeaModel {
            [NameInMap("IpAddress")]
            [Validation(Required=true)]
            public List<string> IpAddress { get; set; }
        };

        [NameInMap("InnerIpAddress")]
        [Validation(Required=true)]
        public DescribeInstanceAttributeResponseInnerIpAddress InnerIpAddress { get; set; }
        public class DescribeInstanceAttributeResponseInnerIpAddress : TeaModel {
            [NameInMap("IpAddress")]
            [Validation(Required=true)]
            public List<string> IpAddress { get; set; }
        };

    }

}
