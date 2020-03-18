// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class DescribeImageCachesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ImageCaches")]
        [Validation(Required=true)]
        public List<DescribeImageCachesResponseImageCaches> ImageCaches { get; set; }
        public class DescribeImageCachesResponseImageCaches : TeaModel {
            [NameInMap("ContainerGroupId")]
            [Validation(Required=true)]
            public string ContainerGroupId { get; set; }

            [NameInMap("ImageCacheId")]
            [Validation(Required=true)]
            public string ImageCacheId { get; set; }

            [NameInMap("ImageCacheName")]
            [Validation(Required=true)]
            public string ImageCacheName { get; set; }

            [NameInMap("SnapshotId")]
            [Validation(Required=true)]
            public string SnapshotId { get; set; }

            [NameInMap("Progress")]
            [Validation(Required=true)]
            public string Progress { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("ExpireDateTime")]
            [Validation(Required=true)]
            public string ExpireDateTime { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("Events")]
            [Validation(Required=true)]
            public List<DescribeImageCachesResponseImageCachesEvents> Events { get; set; }
            public class DescribeImageCachesResponseImageCachesEvents : TeaModel {
                [NameInMap("Count")]
                [Validation(Required=true)]
                public int? Count { get; set; }

                [NameInMap("Type")]
                [Validation(Required=true)]
                public string Type { get; set; }

                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("Message")]
                [Validation(Required=true)]
                public string Message { get; set; }

                [NameInMap("FirstTimestamp")]
                [Validation(Required=true)]
                public string FirstTimestamp { get; set; }

                [NameInMap("LastTimestamp")]
                [Validation(Required=true)]
                public string LastTimestamp { get; set; }

            }

            [NameInMap("Images")]
            [Validation(Required=true)]
            public List<DescribeImageCachesResponseImageCachesImages> Images { get; set; }
            public class DescribeImageCachesResponseImageCachesImages : TeaModel {
                [NameInMap("Image")]
                [Validation(Required=true)]
                public string Image { get; set; }

            }

        }

    }

}
