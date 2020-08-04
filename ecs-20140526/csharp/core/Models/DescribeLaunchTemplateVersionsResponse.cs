// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeLaunchTemplateVersionsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("LaunchTemplateVersionSets")]
        [Validation(Required=true)]
        public DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSets LaunchTemplateVersionSets { get; set; }
        public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSets : TeaModel {
            [NameInMap("LaunchTemplateVersionSet")]
            [Validation(Required=true)]
            public List<DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSet> LaunchTemplateVersionSet { get; set; }
            public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSet : TeaModel {
                    public string CreateTime { get; set; }
                    public string ModifiedTime { get; set; }
                    public string LaunchTemplateId { get; set; }
                    public string LaunchTemplateName { get; set; }
                    public bool? DefaultVersion { get; set; }
                    public long VersionNumber { get; set; }
                    public string VersionDescription { get; set; }
                    public string CreatedBy { get; set; }
                    public DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateData LaunchTemplateData { get; set; }
                    public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateData : TeaModel {
                        [NameInMap("ImageId")]
                        [Validation(Required=true)]
                        public string ImageId { get; set; }

                        [NameInMap("ImageOwnerAlias")]
                        [Validation(Required=true)]
                        public string ImageOwnerAlias { get; set; }

                        [NameInMap("PasswordInherit")]
                        [Validation(Required=true)]
                        public bool? PasswordInherit { get; set; }

                        [NameInMap("InstanceType")]
                        [Validation(Required=true)]
                        public string InstanceType { get; set; }

                        [NameInMap("SecurityGroupId")]
                        [Validation(Required=true)]
                        public string SecurityGroupId { get; set; }

                        [NameInMap("VpcId")]
                        [Validation(Required=true)]
                        public string VpcId { get; set; }

                        [NameInMap("VSwitchId")]
                        [Validation(Required=true)]
                        public string VSwitchId { get; set; }

                        [NameInMap("InstanceName")]
                        [Validation(Required=true)]
                        public string InstanceName { get; set; }

                        [NameInMap("Description")]
                        [Validation(Required=true)]
                        public string Description { get; set; }

                        [NameInMap("InternetMaxBandwidthIn")]
                        [Validation(Required=true)]
                        public int? InternetMaxBandwidthIn { get; set; }

                        [NameInMap("InternetMaxBandwidthOut")]
                        [Validation(Required=true)]
                        public int? InternetMaxBandwidthOut { get; set; }

                        [NameInMap("HostName")]
                        [Validation(Required=true)]
                        public string HostName { get; set; }

                        [NameInMap("ZoneId")]
                        [Validation(Required=true)]
                        public string ZoneId { get; set; }

                        [NameInMap("IoOptimized")]
                        [Validation(Required=true)]
                        public string IoOptimized { get; set; }

                        [NameInMap("InstanceChargeType")]
                        [Validation(Required=true)]
                        public string InstanceChargeType { get; set; }

                        [NameInMap("Period")]
                        [Validation(Required=true)]
                        public int? Period { get; set; }

                        [NameInMap("InternetChargeType")]
                        [Validation(Required=true)]
                        public string InternetChargeType { get; set; }

                        [NameInMap("EnableVmOsConfig")]
                        [Validation(Required=true)]
                        public bool? EnableVmOsConfig { get; set; }

                        [NameInMap("NetworkType")]
                        [Validation(Required=true)]
                        public string NetworkType { get; set; }

                        [NameInMap("UserData")]
                        [Validation(Required=true)]
                        public string UserData { get; set; }

                        [NameInMap("KeyPairName")]
                        [Validation(Required=true)]
                        public string KeyPairName { get; set; }

                        [NameInMap("RamRoleName")]
                        [Validation(Required=true)]
                        public string RamRoleName { get; set; }

                        [NameInMap("AutoReleaseTime")]
                        [Validation(Required=true)]
                        public string AutoReleaseTime { get; set; }

                        [NameInMap("SpotStrategy")]
                        [Validation(Required=true)]
                        public string SpotStrategy { get; set; }

                        [NameInMap("SpotPriceLimit")]
                        [Validation(Required=true)]
                        public float? SpotPriceLimit { get; set; }

                        [NameInMap("SpotDuration")]
                        [Validation(Required=true)]
                        public int? SpotDuration { get; set; }

                        [NameInMap("ResourceGroupId")]
                        [Validation(Required=true)]
                        public string ResourceGroupId { get; set; }

                        [NameInMap("SecurityEnhancementStrategy")]
                        [Validation(Required=true)]
                        public string SecurityEnhancementStrategy { get; set; }

                        [NameInMap("SystemDisk")]
                        [Validation(Required=true)]
                        public DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataSystemDisk SystemDisk { get; set; }
                        public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataSystemDisk : TeaModel {
                            [NameInMap("Size")]
                            [Validation(Required=true)]
                            public int? Size { get; set; }
                            [NameInMap("Category")]
                            [Validation(Required=true)]
                            public string Category { get; set; }
                            [NameInMap("DiskName")]
                            [Validation(Required=true)]
                            public string DiskName { get; set; }
                            [NameInMap("Description")]
                            [Validation(Required=true)]
                            public string Description { get; set; }
                            [NameInMap("Iops")]
                            [Validation(Required=true)]
                            public int? Iops { get; set; }
                        };

                        [NameInMap("DataDisks")]
                        [Validation(Required=true)]
                        public DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataDataDisks DataDisks { get; set; }
                        public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataDataDisks : TeaModel {
                            [NameInMap("DataDisk")]
                            [Validation(Required=true)]
                            public List<DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataDataDisksDataDisk> DataDisk { get; set; }
                            public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataDataDisksDataDisk : TeaModel {
                                    public int? Size { get; set; }
                                    public string SnapshotId { get; set; }
                                    public string Category { get; set; }
                                    public string Encrypted { get; set; }
                                    public string DiskName { get; set; }
                                    public string Description { get; set; }
                                    public bool? DeleteWithInstance { get; set; }
                                    public string Device { get; set; }
                            }
                        };

                        [NameInMap("NetworkInterfaces")]
                        [Validation(Required=true)]
                        public DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataNetworkInterfaces NetworkInterfaces { get; set; }
                        public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataNetworkInterfaces : TeaModel {
                            [NameInMap("NetworkInterface")]
                            [Validation(Required=true)]
                            public List<DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataNetworkInterfacesNetworkInterface> NetworkInterface { get; set; }
                            public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataNetworkInterfacesNetworkInterface : TeaModel {
                                    public string PrimaryIpAddress { get; set; }
                                    public string VSwitchId { get; set; }
                                    public string SecurityGroupId { get; set; }
                                    public string NetworkInterfaceName { get; set; }
                                    public string Description { get; set; }
                            }
                        };

                        [NameInMap("Tags")]
                        [Validation(Required=true)]
                        public DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataTags Tags { get; set; }
                        public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataTags : TeaModel {
                            [NameInMap("InstanceTag")]
                            [Validation(Required=true)]
                            public List<DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataTagsInstanceTag> InstanceTag { get; set; }
                            public class DescribeLaunchTemplateVersionsResponseLaunchTemplateVersionSetsLaunchTemplateVersionSetLaunchTemplateDataTagsInstanceTag : TeaModel {
                                    public string Key { get; set; }
                                    public string Value { get; set; }
                            }
                        };

                    }
            }
        };

    }

}
