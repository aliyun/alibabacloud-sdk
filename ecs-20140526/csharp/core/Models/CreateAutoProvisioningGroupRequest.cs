// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateAutoProvisioningGroupRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

        [NameInMap("AutoProvisioningGroupName")]
        [Validation(Required=false)]
        public string AutoProvisioningGroupName { get; set; }

        [NameInMap("AutoProvisioningGroupType")]
        [Validation(Required=false)]
        public string AutoProvisioningGroupType { get; set; }

        [NameInMap("SpotAllocationStrategy")]
        [Validation(Required=false)]
        public string SpotAllocationStrategy { get; set; }

        [NameInMap("SpotInstanceInterruptionBehavior")]
        [Validation(Required=false)]
        public string SpotInstanceInterruptionBehavior { get; set; }

        [NameInMap("SpotInstancePoolsToUseCount")]
        [Validation(Required=false)]
        public int? SpotInstancePoolsToUseCount { get; set; }

        [NameInMap("PayAsYouGoAllocationStrategy")]
        [Validation(Required=false)]
        public string PayAsYouGoAllocationStrategy { get; set; }

        [NameInMap("ExcessCapacityTerminationPolicy")]
        [Validation(Required=false)]
        public string ExcessCapacityTerminationPolicy { get; set; }

        [NameInMap("ValidFrom")]
        [Validation(Required=false)]
        public string ValidFrom { get; set; }

        [NameInMap("ValidUntil")]
        [Validation(Required=false)]
        public string ValidUntil { get; set; }

        [NameInMap("TerminateInstancesWithExpiration")]
        [Validation(Required=false)]
        public bool? TerminateInstancesWithExpiration { get; set; }

        [NameInMap("TerminateInstances")]
        [Validation(Required=false)]
        public bool? TerminateInstances { get; set; }

        [NameInMap("MaxSpotPrice")]
        [Validation(Required=false)]
        public float? MaxSpotPrice { get; set; }

        [NameInMap("TotalTargetCapacity")]
        [Validation(Required=true)]
        public string TotalTargetCapacity { get; set; }

        [NameInMap("PayAsYouGoTargetCapacity")]
        [Validation(Required=false)]
        public string PayAsYouGoTargetCapacity { get; set; }

        [NameInMap("SpotTargetCapacity")]
        [Validation(Required=false)]
        public string SpotTargetCapacity { get; set; }

        [NameInMap("DefaultTargetCapacityType")]
        [Validation(Required=false)]
        public string DefaultTargetCapacityType { get; set; }

        [NameInMap("LaunchTemplateId")]
        [Validation(Required=true)]
        public string LaunchTemplateId { get; set; }

        [NameInMap("LaunchTemplateVersion")]
        [Validation(Required=false)]
        public string LaunchTemplateVersion { get; set; }

        [NameInMap("LaunchTemplateConfig")]
        [Validation(Required=false)]
        public List<CreateAutoProvisioningGroupRequestLaunchTemplateConfig> LaunchTemplateConfig { get; set; }
        public class CreateAutoProvisioningGroupRequestLaunchTemplateConfig : TeaModel {
            [NameInMap("InstanceType")]
            [Validation(Required=true)]
            public string InstanceType { get; set; }

            [NameInMap("MaxPrice")]
            [Validation(Required=true)]
            public double? MaxPrice { get; set; }

            [NameInMap("VSwitchId")]
            [Validation(Required=true)]
            public string VSwitchId { get; set; }

            [NameInMap("WeightedCapacity")]
            [Validation(Required=true)]
            public double? WeightedCapacity { get; set; }

            [NameInMap("Priority")]
            [Validation(Required=true)]
            public int? Priority { get; set; }

        }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

    }

}
