// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class CreateImageCacheResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ImageCacheId")]
        [Validation(Required=true)]
        public string ImageCacheId { get; set; }

        [NameInMap("ContainerGroupId")]
        [Validation(Required=true)]
        public string ContainerGroupId { get; set; }

    }

}
