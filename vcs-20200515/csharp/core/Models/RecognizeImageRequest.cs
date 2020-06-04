// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class RecognizeImageRequest : TeaModel {
        [NameInMap("CorpId")]
        [Validation(Required=true)]
        public string CorpId { get; set; }

        [NameInMap("PicContent")]
        [Validation(Required=true)]
        public string PicContent { get; set; }

        [NameInMap("PicFormat")]
        [Validation(Required=true)]
        public string PicFormat { get; set; }

    }

}
