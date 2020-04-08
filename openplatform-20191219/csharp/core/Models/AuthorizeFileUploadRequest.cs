// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.OpenPlatform20191219.Models
{
    public class AuthorizeFileUploadRequest : TeaModel {
        [NameInMap("Product")]
        [Validation(Required=true)]
        public string Product { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=false)]
        public string RegionId { get; set; }

    }

}
