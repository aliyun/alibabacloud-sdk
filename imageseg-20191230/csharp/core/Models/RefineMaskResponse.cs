// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageseg.Models
{
    public class RefineMaskResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RefineMaskResponseData Data { get; set; }
        public class RefineMaskResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RefineMaskResponseDataElements> Elements { get; set; }
            public class RefineMaskResponseDataElements : TeaModel {
                    public string ImageURL { get; set; }
            }
        };

    }

}
