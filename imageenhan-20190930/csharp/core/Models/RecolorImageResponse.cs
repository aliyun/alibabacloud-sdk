// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class RecolorImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecolorImageResponseData Data { get; set; }
        public class RecolorImageResponseData : TeaModel {
            [NameInMap("ImageList")]
            [Validation(Required=true)]
            public List<string> ImageList { get; set; }
        };

    }

}
