// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class DescribeImageCachesRequest : TeaModel {
        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("OwnerAccount")]
        [Validation(Required=false)]
        public string OwnerAccount { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ImageCacheId")]
        [Validation(Required=false)]
        public string ImageCacheId { get; set; }

        [NameInMap("ImageCacheName")]
        [Validation(Required=false)]
        public string ImageCacheName { get; set; }

        [NameInMap("SnapshotId")]
        [Validation(Required=false)]
        public string SnapshotId { get; set; }

        [NameInMap("Image")]
        [Validation(Required=false)]
        public string Image { get; set; }

    }

}
