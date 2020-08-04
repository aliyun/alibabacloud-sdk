// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeAutoProvisioningGroupsResponse : TeaModel {
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

        [NameInMap("AutoProvisioningGroups")]
        [Validation(Required=true)]
        public DescribeAutoProvisioningGroupsResponseAutoProvisioningGroups AutoProvisioningGroups { get; set; }
        public class DescribeAutoProvisioningGroupsResponseAutoProvisioningGroups : TeaModel {
            [NameInMap("AutoProvisioningGroup")]
            [Validation(Required=true)]
            public List<DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroup> AutoProvisioningGroup { get; set; }
            public class DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroup : TeaModel {
                    public string AutoProvisioningGroupId { get; set; }
                    public string AutoProvisioningGroupName { get; set; }
                    public string AutoProvisioningGroupType { get; set; }
                    public string Status { get; set; }
                    public string State { get; set; }
                    public string RegionId { get; set; }
                    public string ValidFrom { get; set; }
                    public string ValidUntil { get; set; }
                    public string ExcessCapacityTerminationPolicy { get; set; }
                    public float? MaxSpotPrice { get; set; }
                    public string LaunchTemplateId { get; set; }
                    public string LaunchTemplateVersion { get; set; }
                    public bool? TerminateInstances { get; set; }
                    public bool? TerminateInstancesWithExpiration { get; set; }
                    public string CreationTime { get; set; }
                    public DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupLaunchTemplateConfigs LaunchTemplateConfigs { get; set; }
                    public class DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupLaunchTemplateConfigs : TeaModel {
                        [NameInMap("LaunchTemplateConfig")]
                        [Validation(Required=true)]
                        public List<DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupLaunchTemplateConfigsLaunchTemplateConfig> LaunchTemplateConfig { get; set; }
                        public class DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupLaunchTemplateConfigsLaunchTemplateConfig : TeaModel {
                            [NameInMap("InstanceType")]
                            [Validation(Required=true)]
                            public string InstanceType { get; set; }

                            [NameInMap("MaxPrice")]
                            [Validation(Required=true)]
                            public float? MaxPrice { get; set; }

                            [NameInMap("VSwitchId")]
                            [Validation(Required=true)]
                            public string VSwitchId { get; set; }

                            [NameInMap("WeightedCapacity")]
                            [Validation(Required=true)]
                            public float? WeightedCapacity { get; set; }

                            [NameInMap("Priority")]
                            [Validation(Required=true)]
                            public float? Priority { get; set; }

                        }

                    }
                    public DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupSpotOptions SpotOptions { get; set; }
                    public class DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupSpotOptions : TeaModel {
                        [NameInMap("AllocationStrategy")]
                        [Validation(Required=true)]
                        public string AllocationStrategy { get; set; }

                        [NameInMap("InstanceInterruptionBehavior")]
                        [Validation(Required=true)]
                        public string InstanceInterruptionBehavior { get; set; }

                        [NameInMap("InstancePoolsToUseCount")]
                        [Validation(Required=true)]
                        public int? InstancePoolsToUseCount { get; set; }

                    }
                    public DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupPayAsYouGoOptions PayAsYouGoOptions { get; set; }
                    public class DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupPayAsYouGoOptions : TeaModel {
                        [NameInMap("AllocationStrategy")]
                        [Validation(Required=true)]
                        public string AllocationStrategy { get; set; }

                    }
                    public DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupTargetCapacitySpecification TargetCapacitySpecification { get; set; }
                    public class DescribeAutoProvisioningGroupsResponseAutoProvisioningGroupsAutoProvisioningGroupTargetCapacitySpecification : TeaModel {
                        [NameInMap("TotalTargetCapacity")]
                        [Validation(Required=true)]
                        public float? TotalTargetCapacity { get; set; }

                        [NameInMap("PayAsYouGoTargetCapacity")]
                        [Validation(Required=true)]
                        public float? PayAsYouGoTargetCapacity { get; set; }

                        [NameInMap("SpotTargetCapacity")]
                        [Validation(Required=true)]
                        public float? SpotTargetCapacity { get; set; }

                        [NameInMap("DefaultTargetCapacityType")]
                        [Validation(Required=true)]
                        public string DefaultTargetCapacityType { get; set; }

                    }
            }
        };

    }

}
