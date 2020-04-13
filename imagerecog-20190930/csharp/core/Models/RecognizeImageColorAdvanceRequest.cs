// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imagerecog20190930.Models
{
    public class RecognizeImageColorAdvanceRequest : TeaModel {
        [NameInMap("UrlObject")]
        [Validation(Required=true)]
        public Stream UrlObject { get; set; }

        [NameInMap("ColorCount")]
        [Validation(Required=false)]
        public int? ColorCount { get; set; }

    }

}
