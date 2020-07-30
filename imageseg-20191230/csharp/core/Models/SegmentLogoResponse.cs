// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageseg20191230.Models
{
    public class SegmentLogoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SegmentLogoResponseData Data { get; set; }
        public class SegmentLogoResponseData : TeaModel {
            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }
        };

    }

}
