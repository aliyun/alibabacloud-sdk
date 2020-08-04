// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateLaunchTemplateRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TemplateTag")]
        [Validation(Required=false)]
        public List<CreateLaunchTemplateRequestTemplateTag> TemplateTag { get; set; }
        public class CreateLaunchTemplateRequestTemplateTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("LaunchTemplateName")]
        [Validation(Required=true)]
        public string LaunchTemplateName { get; set; }

        [NameInMap("VersionDescription")]
        [Validation(Required=false)]
        public string VersionDescription { get; set; }

        [NameInMap("ImageId")]
        [Validation(Required=false)]
        public string ImageId { get; set; }

        [NameInMap("ImageOwnerAlias")]
        [Validation(Required=false)]
        public string ImageOwnerAlias { get; set; }

        [NameInMap("PasswordInherit")]
        [Validation(Required=false)]
        public bool? PasswordInherit { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=false)]
        public string InstanceType { get; set; }

        [NameInMap("SecurityGroupId")]
        [Validation(Required=false)]
        public string SecurityGroupId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=false)]
        public string VpcId { get; set; }

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

        [NameInMap("ZoneId")]
        [Validation(Required=false)]
        public string ZoneId { get; set; }

        [NameInMap("SystemDisk")]
        [Validation(Required=true)]
        public CreateLaunchTemplateRequestSystemDisk SystemDisk { get; set; }
        public class CreateLaunchTemplateRequestSystemDisk : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=false)]
            public string Category { get; set; }
            [NameInMap("Size")]
            [Validation(Required=false)]
            public int? Size { get; set; }
            [NameInMap("DiskName")]
            [Validation(Required=false)]
            public string DiskName { get; set; }
            [NameInMap("Description")]
            [Validation(Required=false)]
            public string Description { get; set; }
            [NameInMap("Iops")]
            [Validation(Required=false)]
            public int? Iops { get; set; }
        };

        [NameInMap("DataDisk")]
        [Validation(Required=false)]
        public List<CreateLaunchTemplateRequestDataDisk> DataDisk { get; set; }
        public class CreateLaunchTemplateRequestDataDisk : TeaModel {
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

            [NameInMap("DiskName")]
            [Validation(Required=true)]
            public string DiskName { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("DeleteWithInstance")]
            [Validation(Required=true)]
            public bool? DeleteWithInstance { get; set; }

            [NameInMap("Device")]
            [Validation(Required=true)]
            public string Device { get; set; }

        }

        [NameInMap("IoOptimized")]
        [Validation(Required=false)]
        public string IoOptimized { get; set; }

        [NameInMap("NetworkInterface")]
        [Validation(Required=false)]
        public List<CreateLaunchTemplateRequestNetworkInterface> NetworkInterface { get; set; }
        public class CreateLaunchTemplateRequestNetworkInterface : TeaModel {
            [NameInMap("PrimaryIpAddress")]
            [Validation(Required=true)]
            public string PrimaryIpAddress { get; set; }

            [NameInMap("VSwitchId")]
            [Validation(Required=true)]
            public string VSwitchId { get; set; }

            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public string SecurityGroupId { get; set; }

            [NameInMap("NetworkInterfaceName")]
            [Validation(Required=true)]
            public string NetworkInterfaceName { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

        }

        [NameInMap("InstanceChargeType")]
        [Validation(Required=false)]
        public string InstanceChargeType { get; set; }

        [NameInMap("Period")]
        [Validation(Required=false)]
        public int? Period { get; set; }

        [NameInMap("InternetChargeType")]
        [Validation(Required=false)]
        public string InternetChargeType { get; set; }

        [NameInMap("EnableVmOsConfig")]
        [Validation(Required=false)]
        public bool? EnableVmOsConfig { get; set; }

        [NameInMap("NetworkType")]
        [Validation(Required=false)]
        public string NetworkType { get; set; }

        [NameInMap("UserData")]
        [Validation(Required=false)]
        public string UserData { get; set; }

        [NameInMap("KeyPairName")]
        [Validation(Required=false)]
        public string KeyPairName { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=false)]
        public string RamRoleName { get; set; }

        [NameInMap("AutoReleaseTime")]
        [Validation(Required=false)]
        public string AutoReleaseTime { get; set; }

        [NameInMap("SpotStrategy")]
        [Validation(Required=false)]
        public string SpotStrategy { get; set; }

        [NameInMap("SpotPriceLimit")]
        [Validation(Required=false)]
        public float? SpotPriceLimit { get; set; }

        [NameInMap("SpotDuration")]
        [Validation(Required=false)]
        public int? SpotDuration { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

        [NameInMap("TemplateResourceGroupId")]
        [Validation(Required=false)]
        public string TemplateResourceGroupId { get; set; }

        [NameInMap("SecurityEnhancementStrategy")]
        [Validation(Required=false)]
        public string SecurityEnhancementStrategy { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<CreateLaunchTemplateRequestTag> Tag { get; set; }
        public class CreateLaunchTemplateRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

    }

}
