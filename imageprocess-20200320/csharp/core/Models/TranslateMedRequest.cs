// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class TranslateMedRequest : TeaModel {
        [NameInMap("FromLanguage")]
        [Validation(Required=true)]
        public string FromLanguage { get; set; }

        [NameInMap("ToLanguage")]
        [Validation(Required=true)]
        public string ToLanguage { get; set; }

        [NameInMap("Text")]
        [Validation(Required=true)]
        public string Text { get; set; }

    }

}
