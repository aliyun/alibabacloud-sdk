// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class RunInstancesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ImageId")]
        [Validation(Required=false)]
        public string ImageId { get; set; }

        [NameInMap("ImageFamily")]
        [Validation(Required=false)]
        public string ImageFamily { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=false)]
        public string InstanceType { get; set; }

        [NameInMap("SecurityGroupId")]
        [Validation(Required=false)]
        public string SecurityGroupId { get; set; }

        [NameInMap("SecurityGroupIds")]
        [Validation(Required=false)]
        public List<string> SecurityGroupIds { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=false)]
        public string VSwitchId { get; set; }

        [NameInMap("InstanceName")]
        [Validation(Required=false)]
        public string InstanceName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("InternetMaxBandwidthIn")]
        [Validation(Required=false)]
        public int? InternetMaxBandwidthIn { get; set; }

        [NameInMap("InternetMaxBandwidthOut")]
        [Validation(Required=false)]
        public int? InternetMaxBandwidthOut { get; set; }

        [NameInMap("HostName")]
        [Validation(Required=false)]
        public string HostName { get; set; }

        [NameInMap("UniqueSuffix")]
        [Validation(Required=false)]
        public bool? UniqueSuffix { get; set; }

        [NameInMap("Password")]
        [Validation(Required=false)]
        public string Password { get; set; }

        [NameInMap("PasswordInherit")]
        [Validation(Required=false)]
        public bool? PasswordInherit { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=false)]
        public string ZoneId { get; set; }

        [NameInMap("InternetChargeType")]
        [Validation(Required=false)]
        public string InternetChargeType { get; set; }

        [NameInMap("SystemDisk")]
        [Validation(Required=true)]
        public RunInstancesRequestSystemDisk SystemDisk { get; set; }
        public class RunInstancesRequestSystemDisk : TeaModel {
            [NameInMap("Size")]
            [Validation(Required=false)]
            public string Size { get; set; }
            [NameInMap("Category")]
            [Validation(Required=false)]
            public string Category { get; set; }
            [NameInMap("DiskName")]
            [Validation(Required=false)]
            public string DiskName { get; set; }
            [NameInMap("Description")]
            [Validation(Required=false)]
            public string Description { get; set; }
            [NameInMap("PerformanceLevel")]
            [Validation(Required=false)]
            public string PerformanceLevel { get; set; }
            [NameInMap("AutoSnapshotPolicyId")]
            [Validation(Required=false)]
            public string AutoSnapshotPolicyId { get; set; }
        };

        [NameInMap("DataDisk")]
        [Validation(Required=false)]
        public List<RunInstancesRequestDataDisk> DataDisk { get; set; }
        public class RunInstancesRequestDataDisk : TeaModel {
            [NameInMap("Size")]
            [Validation(Required=true)]
            public int? Size { get; set; }

            [NameInMap("SnapshotId")]
            [Validation(Required=true)]
            public string SnapshotId { get; set; }

            [NameInMap("Category")]
            [Validation(Required=true)]
            public string Category { get; set; }

            [NameInMap("Encrypted")]
            [Validation(Required=true)]
            public string Encrypted { get; set; }

            [NameInMap("KMSKeyId")]
            [Validation(Required=true)]
            public string KMSKeyId { get; set; }

            [NameInMap("DiskName")]
            [Validation(Required=true)]
            public string DiskName { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("Device")]
            [Validation(Required=true)]
            public string Device { get; set; }

            [NameInMap("DeleteWithInstance")]
            [Validation(Required=true)]
            public bool? DeleteWithInstance { get; set; }

            [NameInMap("PerformanceLevel")]
            [Validation(Required=true)]
            public string PerformanceLevel { get; set; }

            [NameInMap("AutoSnapshotPolicyId")]
            [Validation(Required=true)]
            public string AutoSnapshotPolicyId { get; set; }

            [NameInMap("EncryptAlgorithm")]
            [Validation(Required=true)]
            public string EncryptAlgorithm { get; set; }

        }

        [NameInMap("Arn")]
        [Validation(Required=false)]
        public List<RunInstancesRequestArn> Arn { get; set; }
        public class RunInstancesRequestArn : TeaModel {
            [NameInMap("AssumeRoleFor")]
            [Validation(Required=true)]
            public long AssumeRoleFor { get; set; }

            [NameInMap("Rolearn")]
            [Validation(Required=true)]
            public string Rolearn { get; set; }

            [NameInMap("RoleType")]
            [Validation(Required=true)]
            public string RoleType { get; set; }

        }

        [NameInMap("IoOptimized")]
        [Validation(Required=false)]
        public string IoOptimized { get; set; }

        [NameInMap("NetworkInterface")]
        [Validation(Required=false)]
        public List<RunInstancesRequestNetworkInterface> NetworkInterface { get; set; }
        public class RunInstancesRequestNetworkInterface : TeaModel {
            [NameInMap("PrimaryIpAddress")]
            [Validation(Required=true)]
            public string PrimaryIpAddress { get; set; }

            [NameInMap("VSwitchId")]
            [Validation(Required=true)]
            public string VSwitchId { get; set; }

            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public string SecurityGroupId { get; set; }

            [NameInMap("SecurityGroupIds")]
            [Validation(Required=false)]
            public List<string> SecurityGroupIds { get; set; }

            [NameInMap("NetworkInterfaceName")]
            [Validation(Required=true)]
            public string NetworkInterfaceName { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

        }

        [NameInMap("UserData")]
        [Validation(Required=false)]
        public string UserData { get; set; }

        [NameInMap("KeyPairName")]
        [Validation(Required=false)]
        public string KeyPairName { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=false)]
        public string RamRoleName { get; set; }

        [NameInMap("Amount")]
        [Validation(Required=false)]
        public int? Amount { get; set; }

        [NameInMap("MinAmount")]
        [Validation(Required=false)]
        public int? MinAmount { get; set; }

        [NameInMap("AutoReleaseTime")]
        [Validation(Required=false)]
        public string AutoReleaseTime { get; set; }

        [NameInMap("SpotStrategy")]
        [Validation(Required=false)]
        public string SpotStrategy { get; set; }

        [NameInMap("SpotDuration")]
        [Validation(Required=false)]
        public int? SpotDuration { get; set; }

        [NameInMap("SpotPriceLimit")]
        [Validation(Required=false)]
        public float? SpotPriceLimit { get; set; }

        [NameInMap("SpotInterruptionBehavior")]
        [Validation(Required=false)]
        public string SpotInterruptionBehavior { get; set; }

        [NameInMap("SecurityEnhancementStrategy")]
        [Validation(Required=false)]
        public string SecurityEnhancementStrategy { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<RunInstancesRequestTag> Tag { get; set; }
        public class RunInstancesRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("HpcClusterId")]
        [Validation(Required=false)]
        public string HpcClusterId { get; set; }

        [NameInMap("DryRun")]
        [Validation(Required=false)]
        public bool? DryRun { get; set; }

        [NameInMap("DedicatedHostId")]
        [Validation(Required=false)]
        public string DedicatedHostId { get; set; }

        [NameInMap("LaunchTemplateId")]
        [Validation(Required=false)]
        public string LaunchTemplateId { get; set; }

        [NameInMap("LaunchTemplateName")]
        [Validation(Required=false)]
        public string LaunchTemplateName { get; set; }

        [NameInMap("LaunchTemplateVersion")]
        [Validation(Required=false)]
        public long LaunchTemplateVersion { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

        [NameInMap("Period")]
        [Validation(Required=false)]
        public int? Period { get; set; }

        [NameInMap("PeriodUnit")]
        [Validation(Required=false)]
        public string PeriodUnit { get; set; }

        [NameInMap("AutoRenew")]
        [Validation(Required=false)]
        public bool? AutoRenew { get; set; }

        [NameInMap("AutoRenewPeriod")]
        [Validation(Required=false)]
        public int? AutoRenewPeriod { get; set; }

        [NameInMap("InstanceChargeType")]
        [Validation(Required=false)]
        public string InstanceChargeType { get; set; }

        [NameInMap("DeploymentSetId")]
        [Validation(Required=false)]
        public string DeploymentSetId { get; set; }

        [NameInMap("DeploymentSetGroupNo")]
        [Validation(Required=false)]
        public int? DeploymentSetGroupNo { get; set; }

        [NameInMap("PrivateIpAddress")]
        [Validation(Required=false)]
        public string PrivateIpAddress { get; set; }

        [NameInMap("CreditSpecification")]
        [Validation(Required=false)]
        public string CreditSpecification { get; set; }

        [NameInMap("Ipv6Address")]
        [Validation(Required=false)]
        public List<string> Ipv6Address { get; set; }

        [NameInMap("Ipv6AddressCount")]
        [Validation(Required=false)]
        public int? Ipv6AddressCount { get; set; }

        [NameInMap("DeletionProtection")]
        [Validation(Required=false)]
        public bool? DeletionProtection { get; set; }

        [NameInMap("Affinity")]
        [Validation(Required=false)]
        public string Affinity { get; set; }

        [NameInMap("Tenancy")]
        [Validation(Required=false)]
        public string Tenancy { get; set; }

        [NameInMap("StorageSetId")]
        [Validation(Required=false)]
        public string StorageSetId { get; set; }

        [NameInMap("StorageSetPartitionNumber")]
        [Validation(Required=false)]
        public int? StorageSetPartitionNumber { get; set; }

        [NameInMap("CpuOptions")]
        [Validation(Required=true)]
        public RunInstancesRequestCpuOptions CpuOptions { get; set; }
        public class RunInstancesRequestCpuOptions : TeaModel {
            [NameInMap("Core")]
            [Validation(Required=false)]
            public int? Core { get; set; }
            [NameInMap("ThreadsPerCore")]
            [Validation(Required=false)]
            public int? ThreadsPerCore { get; set; }
            [NameInMap("Numa")]
            [Validation(Required=false)]
            public string Numa { get; set; }
        };

        [NameInMap("HttpEndpoint")]
        [Validation(Required=false)]
        public string HttpEndpoint { get; set; }

        [NameInMap("HttpTokens")]
        [Validation(Required=false)]
        public string HttpTokens { get; set; }

        [NameInMap("HttpPutResponseHopLimit")]
        [Validation(Required=false)]
        public int? HttpPutResponseHopLimit { get; set; }

    }

}
