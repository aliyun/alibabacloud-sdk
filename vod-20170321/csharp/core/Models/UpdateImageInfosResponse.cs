// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class UpdateImageInfosResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NonExistImageIds")]
        [Validation(Required=true)]
        public UpdateImageInfosResponseNonExistImageIds NonExistImageIds { get; set; }
        public class UpdateImageInfosResponseNonExistImageIds : TeaModel {
            [NameInMap("ImageId")]
            [Validation(Required=true)]
            public List<string> ImageId { get; set; }
        };

    }

}
