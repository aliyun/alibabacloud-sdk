// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class FaceMakeupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public FaceMakeupResponseData Data { get; set; }
        public class FaceMakeupResponseData : TeaModel {
            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }
        };

    }

}
