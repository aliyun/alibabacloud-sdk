// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class EnhanceImageColorAdvanceRequest : TeaModel {
        [NameInMap("ImageURLObject")]
        [Validation(Required=true)]
        public Stream ImageURLObject { get; set; }

        [NameInMap("OutputFormat")]
        [Validation(Required=true)]
        public string OutputFormat { get; set; }

        [NameInMap("Mode")]
        [Validation(Required=true)]
        public string Mode { get; set; }

    }

}
