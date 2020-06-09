// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeAutoSnapshotPoliciesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("AutoSnapshotPolicies")]
        [Validation(Required=true)]
        public DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies AutoSnapshotPolicies { get; set; }
        public class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies : TeaModel {
            [NameInMap("AutoSnapshotPolicy")]
            [Validation(Required=true)]
            public List<DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy> AutoSnapshotPolicy { get; set; }
            public class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy : TeaModel {
                    public string AutoSnapshotPolicyId { get; set; }
                    public string AutoSnapshotPolicyName { get; set; }
                    public string CreateTime { get; set; }
                    public int? FileSystemNums { get; set; }
                    public string RegionId { get; set; }
                    public string RepeatWeekdays { get; set; }
                    public int? RetentionDays { get; set; }
                    public string Status { get; set; }
                    public string TimePoints { get; set; }
            }
        };

    }

}
