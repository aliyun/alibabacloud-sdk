// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class ExtendImageStyleRequest : TeaModel {
        [NameInMap("StyleUrl")]
        [Validation(Required=true)]
        public string StyleUrl { get; set; }

        [NameInMap("MajorUrl")]
        [Validation(Required=true)]
        public string MajorUrl { get; set; }

    }

}
