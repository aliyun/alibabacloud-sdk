// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeImagesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Images")]
        [Validation(Required=true)]
        public DescribeImagesResponseImages Images { get; set; }
        public class DescribeImagesResponseImages : TeaModel {
            [NameInMap("Image")]
            [Validation(Required=true)]
            public List<DescribeImagesResponseImagesImage> Image { get; set; }
            public class DescribeImagesResponseImagesImage : TeaModel {
                    public string Progress { get; set; }
                    public string ImageId { get; set; }
                    public string ImageName { get; set; }
                    public string ImageFamily { get; set; }
                    public string ImageVersion { get; set; }
                    public string Description { get; set; }
                    public int? Size { get; set; }
                    public string ImageOwnerAlias { get; set; }
                    public bool? IsSupportIoOptimized { get; set; }
                    public bool? IsSupportCloudinit { get; set; }
                    public string OSName { get; set; }
                    public string OSNameEn { get; set; }
                    public string Architecture { get; set; }
                    public string Status { get; set; }
                    public string ProductCode { get; set; }
                    public bool? IsSubscribed { get; set; }
                    public string CreationTime { get; set; }
                    public string IsSelfShared { get; set; }
                    public string OSType { get; set; }
                    public string Platform { get; set; }
                    public string Usage { get; set; }
                    public bool? IsCopied { get; set; }
                    public string ResourceGroupId { get; set; }
                    public DescribeImagesResponseImagesImageDiskDeviceMappings DiskDeviceMappings { get; set; }
                    public class DescribeImagesResponseImagesImageDiskDeviceMappings : TeaModel {
                        [NameInMap("DiskDeviceMapping")]
                        [Validation(Required=true)]
                        public List<DescribeImagesResponseImagesImageDiskDeviceMappingsDiskDeviceMapping> DiskDeviceMapping { get; set; }
                        public class DescribeImagesResponseImagesImageDiskDeviceMappingsDiskDeviceMapping : TeaModel {
                            [NameInMap("SnapshotId")]
                            [Validation(Required=true)]
                            public string SnapshotId { get; set; }

                            [NameInMap("Size")]
                            [Validation(Required=true)]
                            public string Size { get; set; }

                            [NameInMap("Device")]
                            [Validation(Required=true)]
                            public string Device { get; set; }

                            [NameInMap("Type")]
                            [Validation(Required=true)]
                            public string Type { get; set; }

                            [NameInMap("Format")]
                            [Validation(Required=true)]
                            public string Format { get; set; }

                            [NameInMap("ImportOSSBucket")]
                            [Validation(Required=true)]
                            public string ImportOSSBucket { get; set; }

                            [NameInMap("ImportOSSObject")]
                            [Validation(Required=true)]
                            public string ImportOSSObject { get; set; }

                            [NameInMap("Progress")]
                            [Validation(Required=true)]
                            public string Progress { get; set; }

                            [NameInMap("RemainTime")]
                            [Validation(Required=true)]
                            public int? RemainTime { get; set; }

                        }

                    }
                    public DescribeImagesResponseImagesImageTags Tags { get; set; }
                    public class DescribeImagesResponseImagesImageTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeImagesResponseImagesImageTagsTag> Tag { get; set; }
                        public class DescribeImagesResponseImagesImageTagsTag : TeaModel {
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
