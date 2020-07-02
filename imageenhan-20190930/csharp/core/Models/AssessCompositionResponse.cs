// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class AssessCompositionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AssessCompositionResponseData Data { get; set; }
        public class AssessCompositionResponseData : TeaModel {
            [NameInMap("Score")]
            [Validation(Required=true)]
            public float? Score { get; set; }
        };

    }

}
