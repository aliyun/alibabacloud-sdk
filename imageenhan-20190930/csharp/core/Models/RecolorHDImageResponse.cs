// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class RecolorHDImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecolorHDImageResponseData Data { get; set; }
        public class RecolorHDImageResponseData : TeaModel {
            [NameInMap("ImageList")]
            [Validation(Required=true)]
            public List<string> ImageList { get; set; }
        };

    }

}
