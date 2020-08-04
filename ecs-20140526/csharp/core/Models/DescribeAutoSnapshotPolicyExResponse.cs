// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeAutoSnapshotPolicyExResponse : TeaModel {
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

        [NameInMap("AutoSnapshotPolicies")]
        [Validation(Required=true)]
        public DescribeAutoSnapshotPolicyExResponseAutoSnapshotPolicies AutoSnapshotPolicies { get; set; }
        public class DescribeAutoSnapshotPolicyExResponseAutoSnapshotPolicies : TeaModel {
            [NameInMap("AutoSnapshotPolicy")]
            [Validation(Required=true)]
            public List<DescribeAutoSnapshotPolicyExResponseAutoSnapshotPoliciesAutoSnapshotPolicy> AutoSnapshotPolicy { get; set; }
            public class DescribeAutoSnapshotPolicyExResponseAutoSnapshotPoliciesAutoSnapshotPolicy : TeaModel {
                    public string AutoSnapshotPolicyId { get; set; }
                    public string RegionId { get; set; }
                    public string AutoSnapshotPolicyName { get; set; }
                    public string TimePoints { get; set; }
                    public string RepeatWeekdays { get; set; }
                    public int? RetentionDays { get; set; }
                    public int? DiskNums { get; set; }
                    public int? VolumeNums { get; set; }
                    public string CreationTime { get; set; }
                    public string Status { get; set; }
                    public bool? EnableCrossRegionCopy { get; set; }
                    public string TargetCopyRegions { get; set; }
                    public int? CopiedSnapshotsRetentionDays { get; set; }
                    public DescribeAutoSnapshotPolicyExResponseAutoSnapshotPoliciesAutoSnapshotPolicyTags Tags { get; set; }
                    public class DescribeAutoSnapshotPolicyExResponseAutoSnapshotPoliciesAutoSnapshotPolicyTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeAutoSnapshotPolicyExResponseAutoSnapshotPoliciesAutoSnapshotPolicyTagsTag> Tag { get; set; }
                        public class DescribeAutoSnapshotPolicyExResponseAutoSnapshotPoliciesAutoSnapshotPolicyTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
            }
        };

    }

}
