// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeLifecyclePoliciesResponse : TeaModel {
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

        [NameInMap("LifecyclePolicies")]
        [Validation(Required=true)]
        public List<DescribeLifecyclePoliciesResponseLifecyclePolicies> LifecyclePolicies { get; set; }
        public class DescribeLifecyclePoliciesResponseLifecyclePolicies : TeaModel {
            [NameInMap("FileSystemId")]
            [Validation(Required=true)]
            public string FileSystemId { get; set; }

            [NameInMap("LifecyclePolicyName")]
            [Validation(Required=true)]
            public string LifecyclePolicyName { get; set; }

            [NameInMap("Path")]
            [Validation(Required=true)]
            public string Path { get; set; }

            [NameInMap("LifecycleRuleName")]
            [Validation(Required=true)]
            public string LifecycleRuleName { get; set; }

            [NameInMap("StorageType")]
            [Validation(Required=true)]
            public string StorageType { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

        }

    }

}
