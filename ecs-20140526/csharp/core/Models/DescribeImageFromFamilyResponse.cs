// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeImageFromFamilyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Image")]
        [Validation(Required=true)]
        public DescribeImageFromFamilyResponseImage Image { get; set; }
        public class DescribeImageFromFamilyResponseImage : TeaModel {
            [NameInMap("Progress")]
            [Validation(Required=true)]
            public string Progress { get; set; }
            [NameInMap("ImageId")]
            [Validation(Required=true)]
            public string ImageId { get; set; }
            [NameInMap("ImageName")]
            [Validation(Required=true)]
            public string ImageName { get; set; }
            [NameInMap("ImageFamily")]
            [Validation(Required=true)]
            public string ImageFamily { get; set; }
            [NameInMap("ImageVersion")]
            [Validation(Required=true)]
            public string ImageVersion { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("Size")]
            [Validation(Required=true)]
            public int? Size { get; set; }
            [NameInMap("ImageOwnerAlias")]
            [Validation(Required=true)]
            public string ImageOwnerAlias { get; set; }
            [NameInMap("IsSupportIoOptimized")]
            [Validation(Required=true)]
            public bool? IsSupportIoOptimized { get; set; }
            [NameInMap("IsSupportCloudinit")]
            [Validation(Required=true)]
            public bool? IsSupportCloudinit { get; set; }
            [NameInMap("OSName")]
            [Validation(Required=true)]
            public string OSName { get; set; }
            [NameInMap("Architecture")]
            [Validation(Required=true)]
            public string Architecture { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("ProductCode")]
            [Validation(Required=true)]
            public string ProductCode { get; set; }
            [NameInMap("IsSubscribed")]
            [Validation(Required=true)]
            public bool? IsSubscribed { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("IsSelfShared")]
            [Validation(Required=true)]
            public string IsSelfShared { get; set; }
            [NameInMap("OSType")]
            [Validation(Required=true)]
            public string OSType { get; set; }
            [NameInMap("Platform")]
            [Validation(Required=true)]
            public string Platform { get; set; }
            [NameInMap("Usage")]
            [Validation(Required=true)]
            public string Usage { get; set; }
            [NameInMap("IsCopied")]
            [Validation(Required=true)]
            public bool? IsCopied { get; set; }
            [NameInMap("DiskDeviceMappings")]
            [Validation(Required=true)]
            public DescribeImageFromFamilyResponseImageDiskDeviceMappings DiskDeviceMappings { get; set; }
            public class DescribeImageFromFamilyResponseImageDiskDeviceMappings : TeaModel {
                [NameInMap("DiskDeviceMapping")]
                [Validation(Required=true)]
                public List<DescribeImageFromFamilyResponseImageDiskDeviceMappingsDiskDeviceMapping> DiskDeviceMapping { get; set; }
                public class DescribeImageFromFamilyResponseImageDiskDeviceMappingsDiskDeviceMapping : TeaModel {
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

                }

            }
            [NameInMap("Tags")]
            [Validation(Required=true)]
            public DescribeImageFromFamilyResponseImageTags Tags { get; set; }
            public class DescribeImageFromFamilyResponseImageTags : TeaModel {
                [NameInMap("Tag")]
                [Validation(Required=true)]
                public List<DescribeImageFromFamilyResponseImageTagsTag> Tag { get; set; }
                public class DescribeImageFromFamilyResponseImageTagsTag : TeaModel {
                    [NameInMap("TagKey")]
                    [Validation(Required=true)]
                    public string TagKey { get; set; }

                    [NameInMap("TagValue")]
                    [Validation(Required=true)]
                    public string TagValue { get; set; }

                }

            }
        };

    }

}
