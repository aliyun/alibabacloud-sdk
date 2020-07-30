// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageseg20191230.Models
{
    public class SegmentSceneResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SegmentSceneResponseData Data { get; set; }
        public class SegmentSceneResponseData : TeaModel {
            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }
        };

    }

}
