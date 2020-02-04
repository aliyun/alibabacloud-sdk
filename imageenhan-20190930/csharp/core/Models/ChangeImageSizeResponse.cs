// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class ChangeImageSizeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ChangeImageSizeResponseData Data { get; set; }
        public class ChangeImageSizeResponseData : TeaModel {
            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }
        };

    }

}
