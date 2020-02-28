// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class RecognizePublicFaceRequest : TeaModel {
        [NameInMap("Task")]
        [Validation(Required=true)]
        public List<RecognizePublicFaceRequestTask> Task { get; set; }
        public class RecognizePublicFaceRequestTask : TeaModel {
            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }

        }

    }

}
