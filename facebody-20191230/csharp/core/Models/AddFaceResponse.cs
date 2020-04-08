// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class AddFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AddFaceResponseData Data { get; set; }
        public class AddFaceResponseData : TeaModel {
            [NameInMap("FaceId")]
            [Validation(Required=true)]
            public string FaceId { get; set; }
        };

    }

}
