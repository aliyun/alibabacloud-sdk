// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class DetectBodyCountResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectBodyCountResponseData Data { get; set; }
        public class DetectBodyCountResponseData : TeaModel {
            [NameInMap("PersonNumber")]
            [Validation(Required=true)]
            public int? PersonNumber { get; set; }
        };

    }

}
