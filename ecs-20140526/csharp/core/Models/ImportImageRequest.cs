// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ImportImageRequest : TeaModel {
        [NameInMap("DiskDeviceMapping")]
        [Validation(Required=false)]
        public List<ImportImageRequestDiskDeviceMapping> DiskDeviceMapping { get; set; }
        public class ImportImageRequestDiskDeviceMapping : TeaModel {
            [NameInMap("Format")]
            [Validation(Required=false)]
            public string Format { get; set; }

            [NameInMap("OSSBucket")]
            [Validation(Required=false)]
            public string OSSBucket { get; set; }

            [NameInMap("OSSObject")]
            [Validation(Required=false)]
            public string OSSObject { get; set; }

            [NameInMap("DiskImSize")]
            [Validation(Required=false)]
            public int? DiskImSize { get; set; }

            [NameInMap("DiskImageSize")]
            [Validation(Required=false)]
            public int? DiskImageSize { get; set; }

            [NameInMap("Device")]
            [Validation(Required=false)]
            public string Device { get; set; }

        }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ImageName")]
        [Validation(Required=false)]
        public string ImageName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("Architecture")]
        [Validation(Required=false)]
        public string Architecture { get; set; }

        [NameInMap("OSType")]
        [Validation(Required=false)]
        public string OSType { get; set; }

        [NameInMap("Platform")]
        [Validation(Required=false)]
        public string Platform { get; set; }

        [NameInMap("BootMode")]
        [Validation(Required=false)]
        public string BootMode { get; set; }

        [NameInMap("RoleName")]
        [Validation(Required=false)]
        public string RoleName { get; set; }

        [NameInMap("LicenseType")]
        [Validation(Required=false)]
        public string LicenseType { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<ImportImageRequestTag> Tag { get; set; }
        public class ImportImageRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

    }

}
