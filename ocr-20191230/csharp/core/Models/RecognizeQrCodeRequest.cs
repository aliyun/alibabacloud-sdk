// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ocr20191230.Models
{
    public class RecognizeQrCodeRequest : TeaModel {
        [NameInMap("Tasks")]
        [Validation(Required=true)]
        public List<RecognizeQrCodeRequestTasks> Tasks { get; set; }
        public class RecognizeQrCodeRequestTasks : TeaModel {
            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }

        }

    }

}
