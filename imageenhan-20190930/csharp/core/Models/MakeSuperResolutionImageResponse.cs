// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class MakeSuperResolutionImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public MakeSuperResolutionImageResponseData Data { get; set; }
        public class MakeSuperResolutionImageResponseData : TeaModel {
            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }
        };

    }

}
