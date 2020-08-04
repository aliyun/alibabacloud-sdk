// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeTagsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public DescribeTagsResponseTags Tags { get; set; }
        public class DescribeTagsResponseTags : TeaModel {
            [NameInMap("Tag")]
            [Validation(Required=true)]
            public List<DescribeTagsResponseTagsTag> Tag { get; set; }
            public class DescribeTagsResponseTagsTag : TeaModel {
                    public string TagKey { get; set; }
                    public string TagValue { get; set; }
                    public DescribeTagsResponseTagsTagResourceTypeCount ResourceTypeCount { get; set; }
                    public class DescribeTagsResponseTagsTagResourceTypeCount : TeaModel {
                        [NameInMap("Instance")]
                        [Validation(Required=true)]
                        public int? Instance { get; set; }

                        [NameInMap("Disk")]
                        [Validation(Required=true)]
                        public int? Disk { get; set; }

                        [NameInMap("Volume")]
                        [Validation(Required=true)]
                        public int? Volume { get; set; }

                        [NameInMap("Image")]
                        [Validation(Required=true)]
                        public int? Image { get; set; }

                        [NameInMap("Snapshot")]
                        [Validation(Required=true)]
                        public int? Snapshot { get; set; }

                        [NameInMap("Securitygroup")]
                        [Validation(Required=true)]
                        public int? Securitygroup { get; set; }

                        [NameInMap("LaunchTemplate")]
                        [Validation(Required=true)]
                        public int? LaunchTemplate { get; set; }

                        [NameInMap("Eni")]
                        [Validation(Required=true)]
                        public int? Eni { get; set; }

                        [NameInMap("Ddh")]
                        [Validation(Required=true)]
                        public int? Ddh { get; set; }

                        [NameInMap("KeyPair")]
                        [Validation(Required=true)]
                        public int? KeyPair { get; set; }

                        [NameInMap("SnapshotPolicy")]
                        [Validation(Required=true)]
                        public int? SnapshotPolicy { get; set; }

                    }
            }
        };

    }

}
