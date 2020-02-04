// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class ExtendImageStyleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ExtendImageStyleResponseData Data { get; set; }
        public class ExtendImageStyleResponseData : TeaModel {
            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }
            [NameInMap("MajorUrl")]
            [Validation(Required=true)]
            public string MajorUrl { get; set; }
        };

    }

}
