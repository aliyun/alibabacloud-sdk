// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class FaceFilterResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public FaceFilterResponseData Data { get; set; }
        public class FaceFilterResponseData : TeaModel {
            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }
        };

    }

}
