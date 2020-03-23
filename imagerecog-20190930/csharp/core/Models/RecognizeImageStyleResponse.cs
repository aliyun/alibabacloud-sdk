// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class RecognizeImageStyleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeImageStyleResponseData Data { get; set; }
        public class RecognizeImageStyleResponseData : TeaModel {
            [NameInMap("Styles")]
            [Validation(Required=true)]
            public List<string> Styles { get; set; }
        };

    }

}
